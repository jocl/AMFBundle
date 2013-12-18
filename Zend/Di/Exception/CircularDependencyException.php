<?php
namespace Tecbot\AMFBundle\Zend\Di\Exception;

use DomainException;

class CircularDependencyException extends DomainException implements ExceptionInterface
{
}
