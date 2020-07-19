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
 * chkipper.
 */
class ChkipperController extends \hidev\base\Controller
{
    protected $_before = ['chkipper.json'];

    public $defaultAction = 'bump';

    public function getConfiguration()
    {
        return $this->take('chkipper.json');
    }

    public function actionBump($version = null)
    {
        $version = $version ?: $this->module->request->getParams()[1];
        $args = ['bump'];
        $this->take('version')->update($version);
        if ($version) {
            $args[] = $version;
        }

        return $this->passthru('chkipper', $args);
    }

    public function actionReleaseNotes()
    {
        echo $this->take('chkipper')->getReleaseNotes() . PHP_EOL;
    }

    public function actionCommit($message = 'bump')
    {
        $this->take('vcs')->commit($message);
    }
}
