<?php

namespace ContainerGhNLkY8;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NjCi48aService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.njCi48a' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.njCi48a'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\ContactFormController::configureCrud' => ['privates', '.service_locator.rJuivJh', 'get_ServiceLocator_RJuivJhService', true],
            'App\\Controller\\ContactFormController::delete' => ['privates', '.service_locator.pWHiohf', 'get_ServiceLocator_PWHiohfService', true],
            'App\\Controller\\ContactFormController::edit' => ['privates', '.service_locator.pWHiohf', 'get_ServiceLocator_PWHiohfService', true],
            'App\\Controller\\ContactFormController::index' => ['privates', '.service_locator.cPbSn1g', 'get_ServiceLocator_CPbSn1gService', true],
            'App\\Controller\\ContactFormController::new' => ['privates', '.service_locator.cPbSn1g', 'get_ServiceLocator_CPbSn1gService', true],
            'App\\Controller\\ContactFormController::show' => ['privates', '.service_locator.xvRQOj0', 'get_ServiceLocator_XvRQOj0Service', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.yVvQ1jo', 'get_ServiceLocator_YVvQ1joService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.yVvQ1jo', 'get_ServiceLocator_YVvQ1joService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.Hz5btge', 'get_ServiceLocator_Hz5btgeService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\ContactFormController:configureCrud' => ['privates', '.service_locator.rJuivJh', 'get_ServiceLocator_RJuivJhService', true],
            'App\\Controller\\ContactFormController:delete' => ['privates', '.service_locator.pWHiohf', 'get_ServiceLocator_PWHiohfService', true],
            'App\\Controller\\ContactFormController:edit' => ['privates', '.service_locator.pWHiohf', 'get_ServiceLocator_PWHiohfService', true],
            'App\\Controller\\ContactFormController:index' => ['privates', '.service_locator.cPbSn1g', 'get_ServiceLocator_CPbSn1gService', true],
            'App\\Controller\\ContactFormController:new' => ['privates', '.service_locator.cPbSn1g', 'get_ServiceLocator_CPbSn1gService', true],
            'App\\Controller\\ContactFormController:show' => ['privates', '.service_locator.xvRQOj0', 'get_ServiceLocator_XvRQOj0Service', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.yVvQ1jo', 'get_ServiceLocator_YVvQ1joService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.yVvQ1jo', 'get_ServiceLocator_YVvQ1joService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.Hz5btge', 'get_ServiceLocator_Hz5btgeService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\ContactFormController::configureCrud' => '?',
            'App\\Controller\\ContactFormController::delete' => '?',
            'App\\Controller\\ContactFormController::edit' => '?',
            'App\\Controller\\ContactFormController::index' => '?',
            'App\\Controller\\ContactFormController::new' => '?',
            'App\\Controller\\ContactFormController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ContactFormController:configureCrud' => '?',
            'App\\Controller\\ContactFormController:delete' => '?',
            'App\\Controller\\ContactFormController:edit' => '?',
            'App\\Controller\\ContactFormController:index' => '?',
            'App\\Controller\\ContactFormController:new' => '?',
            'App\\Controller\\ContactFormController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
