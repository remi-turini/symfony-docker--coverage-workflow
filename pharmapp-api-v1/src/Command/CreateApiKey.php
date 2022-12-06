<?php

namespace App\Command;

use App\Entity\PharmappConfiguration;
use App\Repository\PharmappConfigurationRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;

#[AsCommand(name: 'app:create-api-key', description: 'Créer une nouvelle clé api.', aliases: ['app:add-api-key'], hidden: false)]
class CreateApiKey extends Command
{
    private $pharmappConfigurationRepository;
    private $manager;

    public function __construct(PharmappConfigurationRepository $pharmappConfigurationRepository, ManagerRegistry $managerRegistry)
    {
        $this->pharmappConfigurationRepository = $pharmappConfigurationRepository;
        $this->manager = $managerRegistry->getManager();
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            // configure an argument
            ->addArgument('apiKey', InputArgument::REQUIRED, 'La nouvelle cle api.')
            // ...
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        try {
            $cipher = "aes-128-cbc";
            $ivlen = openssl_cipher_iv_length($cipher);
            $iv = "enf72jrv96hrc4gl";
            $passphrase = "org193zpkbz4ico562gnz34bco";

            $apiInfo = array(
                "applicationName" => "pharm-app",
                "key" => $input->getArgument('apiKey')
            );

            $serializedToken = serialize($apiInfo);
            $cryptedToken = openssl_encrypt($serializedToken, $cipher, $passphrase, 1, $iv);
            $encodedToken = base64_encode($cryptedToken);

            $apiConfig = $this->pharmappConfigurationRepository->findOneBy(["keyName" => "api_token"]);
            if (empty($apiConfig))
            {
                $apiConfig = new PharmappConfiguration();
                $apiConfig->setKeyName("api_token");
            }
            $apiConfig?->setValue($encodedToken);

            $this->manager->persist($apiConfig);
            $this->manager->flush();
        } catch (\Throwable $t) {
            $output->writeln("Erreur lors de l'enregistrement de la clé api !");
            return Command::FAILURE;
        }

        $output->writeln('Cle api enregistree avec succes! Nouvelle cle api : ' .$input->getArgument('apiKey'));
        return Command::SUCCESS;
    }
}