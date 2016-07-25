<?php

/*
 * PHPUnit plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-chkipper
 * @package   hidev-chkipper
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\chkipper\controllers;

use hidev\base\File;
use hidev\handlers\BaseHandler;
use Yii;

/**
 * Goal for Chkipper.
 */
class ChkipperController extends \hidev\controllers\CommonController
{
    protected $_before = ['chkipper.json'];

    public function getConfiguration()
    {
        return $this->getGoal('chkipper.json');
    }

    public function actionMake()
    {
        return $this->actionBump();
    }

    public function actionBump()
    {
        return $this->passthru('chkipper');
    }

}
