<?php

namespace Application\Form;

use Zend\Stdlib\Hydrator\ClassMethods;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class TwitterFormFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $form = new TwitterForm();
        $form->setInputFilter(new TwitterFilter());
        $form->setHydrator(new ClassMethods());
        return $form;
    }   
}