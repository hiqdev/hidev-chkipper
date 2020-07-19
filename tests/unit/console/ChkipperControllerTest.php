<?php
/**
 * HiDev plugin for Chkipper
 *
 * @link      https://github.com/hiqdev/hidev-chkipper
 * @package   hidev-chkipper
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2020, HiQDev (http://hiqdev.com/)
 */

namespace hidev\chkipper\tests\unit\console;

use hidev\chkipper\console\ChkipperController;

class ChkipperControllerTest extends \PHPUnit\Framework\TestCase
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
