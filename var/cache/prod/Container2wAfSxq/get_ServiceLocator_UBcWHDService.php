<?php

namespace Container2wAfSxq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UBcWHDService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.UBc_WHD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UBc_WHD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'managerRegistry' => ['services', 'doctrine', 'getDoctrineService', true],
            'medicationRepository' => ['privates', 'App\\Repository\\MedicationRepository', 'getMedicationRepositoryService', true],
            'medicationUserRepository' => ['privates', 'App\\Repository\\MedicationUserRepository', 'getMedicationUserRepositoryService', true],
        ], [
            'managerRegistry' => '?',
            'medicationRepository' => 'App\\Repository\\MedicationRepository',
            'medicationUserRepository' => 'App\\Repository\\MedicationUserRepository',
        ]);
    }
}
