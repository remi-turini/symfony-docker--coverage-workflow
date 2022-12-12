<?php

namespace ContainerXum3vOY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_JsonLogin_MainService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.authenticator.json_login.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/JsonLoginAuthenticator.php';

        $container->privates['security.authenticator.json_login.main'] = $instance = new \Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator(($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), ($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService')), NULL, NULL, ['check_path' => 'login', 'username_path' => 'email', 'use_forward' => false, 'require_previous_session' => false, 'login_path' => '/login', 'password_path' => 'password'], ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')));

        if ($container->has('translator')) {
            $instance->setTranslator(($container->services['translator'] ?? $container->getTranslatorService()));
        }

        return $instance;
    }
}
