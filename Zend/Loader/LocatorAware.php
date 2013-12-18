<?php

namespace Tecbot\AMFBundle\Zend\Loader;

use Tecbot\AMFBundle\Zend\Di\LocatorInterface;

interface LocatorAware
{
    public function setLocator(LocatorInterface $locator);
    public function getLocator();
}
