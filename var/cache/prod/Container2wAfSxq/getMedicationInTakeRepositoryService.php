<?php

namespace Container2wAfSxq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMedicationInTakeRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\MedicationInTakeRepository' shared autowired service.
     *
     * @return \App\Repository\MedicationInTakeRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\MedicationInTakeRepository'] = new \App\Repository\MedicationInTakeRepository(($container->services['doctrine'] ?? $container->load('getDoctrineService')));
    }
}
