<?php

namespace Container3O0PUVU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LNu4FHCService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.lNu4FHC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lNu4FHC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\LoginController::register' => ['privates', '.service_locator.JAxyK91', 'get_ServiceLocator_JAxyK91Service', true],
            'App\\Controller\\MedicationController::medicationAddDemand' => ['privates', '.service_locator.MeZhy.t', 'get_ServiceLocator_MeZhy_TService', true],
            'App\\Controller\\MedicationController::medicationDetail' => ['privates', '.service_locator.MeZhy.t', 'get_ServiceLocator_MeZhy_TService', true],
            'App\\Controller\\MedicationController::userMedicationAdd' => ['privates', '.service_locator.UBc_WHD', 'get_ServiceLocator_UBcWHDService', true],
            'App\\Controller\\MedicationController::userMedicationAll' => ['privates', '.service_locator.6h6_351', 'get_ServiceLocator_6h6351Service', true],
            'App\\Controller\\MedicationController::userRequestMedication' => ['privates', '.service_locator.MeZhy.t', 'get_ServiceLocator_MeZhy_TService', true],
            'App\\Controller\\UserController::reset' => ['privates', '.service_locator.Kn9Vk3z', 'get_ServiceLocator_Kn9Vk3zService', true],
            'App\\Controller\\UserController::sendEmail' => ['privates', '.service_locator.pXhSQsU', 'get_ServiceLocator_PXhSQsUService', true],
            'App\\Controller\\UserController::userUpdate' => ['privates', '.service_locator.nwM5KKf', 'get_ServiceLocator_NwM5KKfService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\LoginController:register' => ['privates', '.service_locator.JAxyK91', 'get_ServiceLocator_JAxyK91Service', true],
            'App\\Controller\\MedicationController:medicationAddDemand' => ['privates', '.service_locator.MeZhy.t', 'get_ServiceLocator_MeZhy_TService', true],
            'App\\Controller\\MedicationController:medicationDetail' => ['privates', '.service_locator.MeZhy.t', 'get_ServiceLocator_MeZhy_TService', true],
            'App\\Controller\\MedicationController:userMedicationAdd' => ['privates', '.service_locator.UBc_WHD', 'get_ServiceLocator_UBcWHDService', true],
            'App\\Controller\\MedicationController:userMedicationAll' => ['privates', '.service_locator.6h6_351', 'get_ServiceLocator_6h6351Service', true],
            'App\\Controller\\MedicationController:userRequestMedication' => ['privates', '.service_locator.MeZhy.t', 'get_ServiceLocator_MeZhy_TService', true],
            'App\\Controller\\UserController:reset' => ['privates', '.service_locator.Kn9Vk3z', 'get_ServiceLocator_Kn9Vk3zService', true],
            'App\\Controller\\UserController:sendEmail' => ['privates', '.service_locator.pXhSQsU', 'get_ServiceLocator_PXhSQsUService', true],
            'App\\Controller\\UserController:userUpdate' => ['privates', '.service_locator.nwM5KKf', 'get_ServiceLocator_NwM5KKfService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\LoginController::register' => '?',
            'App\\Controller\\MedicationController::medicationAddDemand' => '?',
            'App\\Controller\\MedicationController::medicationDetail' => '?',
            'App\\Controller\\MedicationController::userMedicationAdd' => '?',
            'App\\Controller\\MedicationController::userMedicationAll' => '?',
            'App\\Controller\\MedicationController::userRequestMedication' => '?',
            'App\\Controller\\UserController::reset' => '?',
            'App\\Controller\\UserController::sendEmail' => '?',
            'App\\Controller\\UserController::userUpdate' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\LoginController:register' => '?',
            'App\\Controller\\MedicationController:medicationAddDemand' => '?',
            'App\\Controller\\MedicationController:medicationDetail' => '?',
            'App\\Controller\\MedicationController:userMedicationAdd' => '?',
            'App\\Controller\\MedicationController:userMedicationAll' => '?',
            'App\\Controller\\MedicationController:userRequestMedication' => '?',
            'App\\Controller\\UserController:reset' => '?',
            'App\\Controller\\UserController:sendEmail' => '?',
            'App\\Controller\\UserController:userUpdate' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
