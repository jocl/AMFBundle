<?php

namespace Tecbot\AMFBundle\Zend\Db\Sql;

class Expression implements ExpressionInterface
{
    /**
     * @const
     */
    const PLACEHOLDER = '?';

    /**
     * @var string
     */
    protected $expression = '';

    /**
     * @var array
     */
    protected $parameters = array();

    /**
     * @var array
     */
    protected $types = array();

    /**
     * @param string $expression
     * @param string|array $parameters
     * @param array $types
     */
    public function __construct($expression = '', $parameters = null, array $types = array())
    {
        if ($expression) {
            $this->setExpression($expression);
        }
        if ($parameters) {
            $this->setParameters($parameters);
        }
        if ($types) {
            $this->setTypes($types);
        }
    }

    /**
     * @param $expression
     * @return Expression
     * @throws Exception\InvalidArgumentException
     */
    public function setExpression($expression)
    {
        if (!is_string($expression) || $expression == '') {
            throw new Exception\InvalidArgumentException('Supplied expression must be a string.');
        }
        $this->expression = $expression;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * @param $parameters
     * @return Expression
     * @throws Exception\InvalidArgumentException
     */
    public function setParameters($parameters)
    {
        if (!is_string($parameters) && !is_array($parameters)) {
            throw new Exception\InvalidArgumentException('Expression parameters must be a string or array.');
        }
        $this->parameters = $parameters;
        return $this;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param array $types
     */
    public function setTypes(array $types)
    {
        $this->types = $types;
    }

    /**
     * @return array
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @return array
     * @throws \RuntimeException
     */
    public function getExpressionData()
    {
        $parameters = (is_string($this->parameters)) ? array($this->parameters) : $this->parameters;

        $types = array();
        for ($i = 0; $i < count($parameters); $i++) {
            $types[$i] = (isset($this->types[$i]) && $this->types[$i] == self::TYPE_IDENTIFIER)
                ? self::TYPE_IDENTIFIER : self::TYPE_VALUE;
        }

        $expression = $this->expression;

        if (count($parameters) > 0) {
            $count = 0;
            $expression = str_replace(self::PLACEHOLDER, '%s', $expression, $count);
            if ($count !== count($parameters)) {
                throw new Exception\RuntimeException('The number of replacements in the expression does not match the number of parameters');
            }
        }

        return array(array(
            $expression,
            $parameters,
            $types
        ));
    }

}