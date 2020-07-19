<?php
/**
 * HiDev plugin for Chkipper
 *
 * @link      https://github.com/hiqdev/hidev-chkipper
 * @package   hidev-chkipper
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2020, HiQDev (http://hiqdev.com/)
 */

namespace hidev\chkipper\console;

/**
 * `composer.json` file generation.
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class ChkipperConfigController extends \hidev\base\Controller
{
    public $defaultAction = 'update';

    public function actionUpdate()
    {
        $this->take('chkipper.json')->save();
    }
}
