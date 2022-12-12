<?php

namespace Container3O0PUVU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateApiKey_LazyService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.App\Command\CreateApiKey.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.App\\Command\\CreateApiKey.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('app:create-api-key', [0 => 'app:add-api-key'], 'Créer une nouvelle clé api.', false, function () use ($container): \App\Command\CreateApiKey {
            return ($container->privates['App\\Command\\CreateApiKey'] ?? $container->load('getCreateApiKeyService'));
        });
    }
}
