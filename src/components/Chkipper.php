<?php
/**
 * Chkipper plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-chkipper
 * @package   hidev-chkipper
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\chkipper\components;

/**
 * chkipper component.
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class Chkipper extends \hidev\base\Component
{
    public function getReleaseNotes()
    {
        return implode(PHP_EOL, $this->exec('chkipper', 'release-notes'));
    }
}
