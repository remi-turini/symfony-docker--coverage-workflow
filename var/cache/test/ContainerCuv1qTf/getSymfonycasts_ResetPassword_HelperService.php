<?php

namespace ContainerCuv1qTf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSymfonycasts_ResetPassword_HelperService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'symfonycasts.reset_password.helper' shared service.
     *
     * @return \SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfonycasts'.\DIRECTORY_SEPARATOR.'reset-password-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ResetPasswordHelperInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfonycasts'.\DIRECTORY_SEPARATOR.'reset-password-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ResetPasswordHelper.php';

        return $container->privates['symfonycasts.reset_password.helper'] = new \SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelper(($container->privates['symfonycasts.reset_password.token_generator'] ?? $container->load('getSymfonycasts_ResetPassword_TokenGeneratorService')), ($container->privates['symfonycasts.reset_password.cleaner'] ?? $container->load('getSymfonycasts_ResetPassword_CleanerService')), ($container->privates['App\\Repository\\ResetPasswordRequestRepository'] ?? $container->load('getResetPasswordRequestRepositoryService')), 3600, 3600);
    }
}
