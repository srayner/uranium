<?php

namespace Application\Form;

use Zend\Stdlib\Hydrator\ClassMethods;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class GithubFormFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $form = new GithubForm();
        $form->setInputFilter(new GithubFilter());
        $form->setHydrator(new ClassMethods());
        return $form;
    }   
}