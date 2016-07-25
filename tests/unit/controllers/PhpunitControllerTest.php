<?php

/*
 * Chkipper plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-chkipper
 * @package   hidev-chkipper
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\chkipper\tests\unit\controllers;

use hidev\chkipper\controllers\ChkipperController;
use hidev\chkipper\controllers\ChkipperXmlController;

class ChkipperControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ChkipperController
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new ChkipperController('chkipper', null);
    }

    protected function tearDown()
    {
    }

    public function testInit()
    {
        $this->assertNull($this->object->init());
    }

    public function testConstructor()
    {
        $this->assertInstanceOf(ChkipperController::class, $this->object);
    }

}
