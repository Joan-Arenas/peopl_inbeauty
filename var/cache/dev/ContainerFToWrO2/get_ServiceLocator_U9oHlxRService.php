<?php

namespace ContainerFToWrO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_U9oHlxRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.u9oHlxR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.u9oHlxR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'produit' => ['privates', '.errored..service_locator.u9oHlxR.App\\Entity\\Produit', NULL, 'Cannot autowire service ".service_locator.u9oHlxR": it references class "App\\Entity\\Produit" but no such service exists.'],
            'session' => ['services', 'session', 'getSessionService', true],
        ], [
            'produit' => 'App\\Entity\\Produit',
            'session' => '?',
        ]);
    }
}
