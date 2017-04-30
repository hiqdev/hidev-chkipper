<?php
/**
 * Chkipper plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-chkipper
 * @package   hidev-chkipper
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\chkipper\console;

/**
 * Goal for chkipper.json config file.
 */
class ChkipperConfigController extends \hidev\controllers\FileController
{
    protected $_file = 'chkipper.json';

    public function actionLoad()
    {
        parent::actionLoad();
        $this->mergeItems([
            'name' => $this->getName(),
            'authors' => $this->take('package')->authors,
        ], 'first');
    }

    public function getName()
    {
        return $this->take('package')->fullName;
    }
}
