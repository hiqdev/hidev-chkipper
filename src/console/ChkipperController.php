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

    public function actionBump($version = null)
    {
        $version = $version ?: $this->module->request->getParams()[1];
        $args = ['bump'];
        if ($version) {
            $this->take('version')->actionMake($version);
            $args[] = $version;
        }

        return $this->passthru('chkipper', $args);
    }

    public function actionReleaseNotes()
    {
        echo $this->getReleaseNotes() . PHP_EOL;
    }

    public function getReleaseNotes()
    {
        return implode(PHP_EOL, $this->exec('chkipper', 'release-notes'));
    }
}
