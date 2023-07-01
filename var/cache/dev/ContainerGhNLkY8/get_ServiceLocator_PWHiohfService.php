<?php

namespace ContainerGhNLkY8;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PWHiohfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pWHiohf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pWHiohf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'contactForm' => ['privates', '.errored..service_locator.pWHiohf.App\\Entity\\ContactForm', NULL, 'Cannot autowire service ".service_locator.pWHiohf": it needs an instance of "App\\Entity\\ContactForm" but this type has been excluded in "config/services.yaml".'],
            'contactFormRepository' => ['privates', 'App\\Repository\\ContactFormRepository', 'getContactFormRepositoryService', true],
        ], [
            'contactForm' => 'App\\Entity\\ContactForm',
            'contactFormRepository' => 'App\\Repository\\ContactFormRepository',
        ]);
    }
}