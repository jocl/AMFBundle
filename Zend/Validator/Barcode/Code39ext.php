<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Validate
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

namespace Tecbot\AMFBundle\Zend\Validator\Barcode;

/**
 * @uses       \Zend\Validator\Barcode\AbstractAdapter
 * @category   Zend
 * @package    Zend_Validate
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Code39ext extends AbstractAdapter
{
    /**
     * Constructor for this barcode adapter
     *
     * @return void
     */
    public function __construct()
    {
        $this->setLength(-1);
        $this->setCharacters(128);
        $this->useChecksum(false);
    }
}
