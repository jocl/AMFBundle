<?php

namespace Tecbot\AMFBundle\Zend\Di\Definition\Annotation;

use Tecbot\AMFBundle\Zend\Code\Annotation\Annotation;

class Instantiator implements Annotation
{

    protected $content = null;

    public function initialize($content)
    {
        $this->content = $content;
    }
}