<?php

namespace Container4nrfWmx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XH7eCqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xH7eCq_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xH7eCq_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\EmployeeController::index' => ['privates', '.service_locator.IFW.IA7', 'get_ServiceLocator_IFW_IA7Service', true],
            'App\\Controller\\ProductController::index' => ['privates', '.service_locator.IFW.IA7', 'get_ServiceLocator_IFW_IA7Service', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.IFW.IA7', 'get_ServiceLocator_IFW_IA7Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\EmployeeController:index' => ['privates', '.service_locator.IFW.IA7', 'get_ServiceLocator_IFW_IA7Service', true],
            'App\\Controller\\ProductController:index' => ['privates', '.service_locator.IFW.IA7', 'get_ServiceLocator_IFW_IA7Service', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.IFW.IA7', 'get_ServiceLocator_IFW_IA7Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\EmployeeController::index' => '?',
            'App\\Controller\\ProductController::index' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\EmployeeController:index' => '?',
            'App\\Controller\\ProductController:index' => '?',
            'App\\Controller\\UserController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
