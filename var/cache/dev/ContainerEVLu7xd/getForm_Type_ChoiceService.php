<?php

<<<<<<<< HEAD:var/cache/dev/ContainerEVLu7xd/getForm_Type_ChoiceService.php
namespace ContainerEVLu7xd;
========
namespace ContainerTksq2bE;
>>>>>>>> d37af2c76241d2721ee751a5b98ea271824e379d:var/cache/dev/ContainerTksq2bE/getForm_Type_ChoiceService.php


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_Type_ChoiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'ChoiceType.php';

        return $container->privates['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(($container->privates['form.choice_list_factory.cached'] ?? $container->load('getForm_ChoiceListFactory_CachedService')));
    }
}
