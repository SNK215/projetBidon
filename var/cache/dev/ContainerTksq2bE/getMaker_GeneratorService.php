<?php

<<<<<<<< HEAD:var/cache/dev/ContainerEVLu7xd/getMaker_GeneratorService.php
namespace ContainerEVLu7xd;
========
namespace ContainerTksq2bE;
>>>>>>>> d37af2c76241d2721ee751a5b98ea271824e379d:var/cache/dev/ContainerTksq2bE/getMaker_GeneratorService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_GeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.generator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Generator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Generator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'TemplateComponentGenerator.php';

        $a = ($container->privates['maker.php_compat_util'] ?? $container->load('getMaker_PhpCompatUtilService'));

        return $container->privates['maker.generator'] = new \Symfony\Bundle\MakerBundle\Generator(($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService')), 'App', $a, new \Symfony\Bundle\MakerBundle\Util\TemplateComponentGenerator($a));
    }
}
