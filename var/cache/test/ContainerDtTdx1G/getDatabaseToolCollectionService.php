<?php

namespace ContainerDtTdx1G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDatabaseToolCollectionService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Liip\TestFixturesBundle\Services\DatabaseToolCollection' shared service.
     *
     * @return \Liip\TestFixturesBundle\Services\DatabaseToolCollection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/liip/test-fixtures-bundle/src/Services/DatabaseToolCollection.php';

        $container->services['Liip\\TestFixturesBundle\\Services\\DatabaseToolCollection'] = $instance = new \Liip\TestFixturesBundle\Services\DatabaseToolCollection($container, ($container->privates['annotations.reader'] ?? $container->getAnnotations_ReaderService()));

        $instance->add(($container->privates['Liip\\TestFixturesBundle\\Services\\DatabaseTools\\ORMDatabaseTool'] ?? $container->load('getORMDatabaseToolService')));
        $instance->add(($container->privates['Liip\\TestFixturesBundle\\Services\\DatabaseTools\\ORMSqliteDatabaseTool'] ?? $container->load('getORMSqliteDatabaseToolService')));
        $instance->add(($container->privates['Liip\\TestFixturesBundle\\Services\\DatabaseTools\\MongoDBDatabaseTool'] ?? $container->load('getMongoDBDatabaseToolService')));
        $instance->add(($container->privates['Liip\\TestFixturesBundle\\Services\\DatabaseTools\\PHPCRDatabaseTool'] ?? $container->load('getPHPCRDatabaseToolService')));

        return $instance;
    }
}