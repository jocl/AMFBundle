<?php

namespace Tecbot\AMFBundle\Zend\XmlRpc\Server\Exception;

class BadMethodCallException
    extends \BadMethodCallException
    implements \Zend\XmlRpc\Server\Exception\ExceptionInterface
{}
