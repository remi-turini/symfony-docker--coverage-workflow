<?php

namespace ContainerCuv1qTf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMysqlDatabaseBackupService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Liip\TestFixturesBundle\Services\DatabaseBackup\MysqlDatabaseBackup' shared service.
     *
     * @return \Liip\TestFixturesBundle\Services\DatabaseBackup\MysqlDatabaseBackup
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'test-fixtures-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'DatabaseBackup'.\DIRECTORY_SEPARATOR.'DatabaseBackupInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'test-fixtures-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'DatabaseBackup'.\DIRECTORY_SEPARATOR.'AbstractDatabaseBackup.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'test-fixtures-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'DatabaseBackup'.\DIRECTORY_SEPARATOR.'MysqlDatabaseBackup.php';

        return $container->services['Liip\\TestFixturesBundle\\Services\\DatabaseBackup\\MysqlDatabaseBackup'] = new \Liip\TestFixturesBundle\Services\DatabaseBackup\MysqlDatabaseBackup($container, ($container->services['Liip\\TestFixturesBundle\\Services\\FixturesLoaderFactory'] ?? $container->load('getFixturesLoaderFactoryService')));
    }
}
