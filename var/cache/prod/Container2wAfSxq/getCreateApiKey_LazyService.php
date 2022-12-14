<?php

namespace Container2wAfSxq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateApiKey_LazyService extends App_KernelProdContainer
{
    /*
     * Gets the private '.App\Command\CreateApiKey.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.App\\Command\\CreateApiKey.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('app:create-api-key', [0 => 'app:add-api-key'], 'Créer une nouvelle clé api.', false, function () use ($container): \App\Command\CreateApiKey {
            return ($container->privates['App\\Command\\CreateApiKey'] ?? $container->load('getCreateApiKeyService'));
        });
    }
}
