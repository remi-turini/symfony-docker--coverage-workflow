<?php

namespace Container2wAfSxq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMedicationUserRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\MedicationUserRepository' shared autowired service.
     *
     * @return \App\Repository\MedicationUserRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\MedicationUserRepository'] = new \App\Repository\MedicationUserRepository(($container->services['doctrine'] ?? $container->load('getDoctrineService')));
    }
}