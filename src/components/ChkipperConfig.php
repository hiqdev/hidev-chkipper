<?php
/**
 * HiDev plugin for Chkipper.
 *
 * @link      https://github.com/hiqdev/hidev-chkipper
 * @package   hidev-chkipper
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\chkipper\components;

/**
 * `chkipper.json` file component.
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class ChkipperConfig extends \hidev\components\File
{
    protected $_file = 'chkipper.json';

    public function load()
    {
        parent::load();
        $this->mergeItems([
            'name'    => $this->getName(),
            'authors' => $this->getAuthors(),
        ], 'first');
    }

    public function getName()
    {
        return $this->take('package')->fullName;
    }

    public function getAuthors()
    {
        return $this->take('package')->authors;
    }
}
