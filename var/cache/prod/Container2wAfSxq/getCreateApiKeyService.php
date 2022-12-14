<?php

namespace Container2wAfSxq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateApiKeyService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Command\CreateApiKey' shared autowired service.
     *
     * @return \App\Command\CreateApiKey
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['App\\Command\\CreateApiKey'] = $instance = new \App\Command\CreateApiKey(($container->privates['App\\Repository\\PharmappConfigurationRepository'] ?? $container->load('getPharmappConfigurationRepositoryService')), ($container->services['doctrine'] ?? $container->load('getDoctrineService')));

        $instance->setName('app:create-api-key');
        $instance->setAliases([0 => 'app:add-api-key']);
        $instance->setDescription('Créer une nouvelle clé api.');

        return $instance;
    }
}
