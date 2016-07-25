<?php

/*
 * Chkipper plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-chkipper
 * @package   hidev-chkipper
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\chkipper\tests\unit\controllers;

use hidev\chkipper\controllers\ChkipperConfigController;

/**
 * Test for ChkipperConfigController.
 */
class ChkipperConfigControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ChkipperConfigController
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new ChkipperConfigController('chkipper.json', null);
    }

    protected function tearDown()
    {
    }

    public function testInit()
    {
        $this->assertSame('json', $this->object->file->type);
    }
}
