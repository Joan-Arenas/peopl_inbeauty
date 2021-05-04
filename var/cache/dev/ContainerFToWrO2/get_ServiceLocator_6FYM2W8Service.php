<?php

namespace ContainerFToWrO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6FYM2W8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6FYM2W8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6FYM2W8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticator' => ['privates', 'App\\Security\\LoginFormAuthenticator', 'getLoginFormAuthenticatorService', true],
            'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
            'handler' => ['privates', 'security.authentication.guard_handler', 'getSecurity_Authentication_GuardHandlerService', true],
        ], [
            'authenticator' => 'App\\Security\\LoginFormAuthenticator',
            'encoder' => '?',
            'handler' => '?',
        ]);
    }
}
