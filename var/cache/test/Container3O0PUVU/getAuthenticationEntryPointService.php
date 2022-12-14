<?php

namespace Container3O0PUVU;

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
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EntryPoint'.\DIRECTORY_SEPARATOR.'AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'AuthenticationEntryPoint.php';

        return $container->privates['App\\Security\\AuthenticationEntryPoint'] = new \App\Security\AuthenticationEntryPoint(($container->services['router'] ?? $container->getRouterService()));
    }
}
