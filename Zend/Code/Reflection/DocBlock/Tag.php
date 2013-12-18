<?php

namespace Tecbot\AMFBundle\Zend\Code\Reflection\DocBlock;

interface Tag
{
    public function getName();
    public function initialize($content);
}