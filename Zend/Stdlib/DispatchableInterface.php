<?php
namespace Tecbot\AMFBundle\Zend\Stdlib;

use Tecbot\AMFBundle\Zend\Stdlib\ResponseInterface as Response,
    Zend\Stdlib\RequestInterface as Request;

interface DispatchableInterface
{
    public function dispatch(Request $request, Response $response = null);
}
