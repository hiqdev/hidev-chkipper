<?php
/**
 * Chkipper plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-chkipper
 * @package   hidev-chkipper
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\chkipper\tests\unit\console;

use hidev\chkipper\console\ChkipperConfigController;

/**
 * Test for ChkipperConfigController.
 */
class ChkipperConfigControllerTest extends \PHPUnit\Framework\TestCase
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
        $this->assertInstanceOf(\hidev\base\Controller::class, $this->object);
    }
}
