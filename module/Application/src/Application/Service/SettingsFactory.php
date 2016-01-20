<?php
namespace Application\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class SettingsFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        //$path = $serviceLocator->get('config')['application']['settings_path'];
        $path = 'data';
        $service = new Settings($path);
        return $service;
    }   
}