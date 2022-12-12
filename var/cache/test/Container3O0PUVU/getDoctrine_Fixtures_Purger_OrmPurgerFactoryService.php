<?php

namespace Container3O0PUVU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Fixtures_Purger_OrmPurgerFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.fixtures.purger.orm_purger_factory' shared service.
     *
     * @return \Doctrine\Bundle\FixturesBundle\Purger\ORMPurgerFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-fixtures-bundle'.\DIRECTORY_SEPARATOR.'Purger'.\DIRECTORY_SEPARATOR.'PurgerFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-fixtures-bundle'.\DIRECTORY_SEPARATOR.'Purger'.\DIRECTORY_SEPARATOR.'ORMPurgerFactory.php';

        return $container->privates['doctrine.fixtures.purger.orm_purger_factory'] = new \Doctrine\Bundle\FixturesBundle\Purger\ORMPurgerFactory();
    }
}
