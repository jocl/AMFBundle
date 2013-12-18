<?php
namespace Tecbot\AMFBundle\Zend\Di;

interface ServiceLocatorInterface extends LocatorInterface
{
    public function set($name, $service);
}
