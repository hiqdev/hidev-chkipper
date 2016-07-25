<?php

/*
 * Chkipper plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-chkipper
 * @package   hidev-chkipper
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

return [
    'components' =>  [
        'config' => [
            'chkipper' => [
                'class' => 'hidev\chkipper\controllers\ChkipperController',
            ],
            'chkipper.json' => [
                'class' => 'hidev\chkipper\controllers\ChkipperConfigController',
            ],
            'binaries' => [
                'chkipper' => [
                    'package'  => 'hiqdev/chkipper',
                    'version'  => '*',
                    'download' => 'https://hiqdev.com/chkipper/chkipper.phar',
                ],
            ],
        ],
    ],
];
