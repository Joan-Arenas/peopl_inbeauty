<?php

namespace ContainerFToWrO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStoreControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\StoreController' shared autowired service.
     *
     * @return \App\Controller\StoreController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'StoreController.php';

        $container->services['App\\Controller\\StoreController'] = $instance = new \App\Controller\StoreController(($container->privates['App\\Repository\\ProduitRepository'] ?? $container->load('getProduitRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\StoreController', $container));

        return $instance;
    }
}
