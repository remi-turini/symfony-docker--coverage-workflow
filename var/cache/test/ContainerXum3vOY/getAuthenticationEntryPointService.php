<?php

namespace ContainerXum3vOY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthenticationEntryPointService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Security\AuthenticationEntryPoint' shared autowired service.
     *
     * @return \App\Security\AuthenticationEntryPoint
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Security/AuthenticationEntryPoint.php';

        return $container->privates['App\\Security\\AuthenticationEntryPoint'] = new \App\Security\AuthenticationEntryPoint(($container->services['router'] ?? $container->getRouterService()));
    }
}
