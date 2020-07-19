<?php
/**
 * HiDev plugin for Chkipper
 *
 * @link      https://github.com/hiqdev/hidev-chkipper
 * @package   hidev-chkipper
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2020, HiQDev (http://hiqdev.com/)
 */

return [
    'controllerMap' =>  [
        'chkipper' => [
            'class' => \hidev\chkipper\console\ChkipperController::class,
        ],
        'chkipper.json' => [
            'class' => \hidev\chkipper\console\ChkipperConfigController::class,
        ],
        'bump' => [
            'class' => \hidev\chkipper\console\ChkipperController::class,
        ],
        'release-notes' => [
            'before' => [
                'chkipper/release-notes',
            ],
        ],
        'release' => [
            'before' => [
                'chkipper',
                'git/release',
                'github/release',
            ],
        ],
    ],
    'components' => [
        'chkipper' => [
            'class' => \hidev\chkipper\components\Chkipper::class,
        ],
        'chkipper.json' => [
            'class' => \hidev\chkipper\components\ChkipperConfig::class,
        ],
        'binaries' => [
            'chkipper' => [
                'package'  => 'hiqdev/chkipper',
                'version'  => '*',
                'download' => 'https://hiqdev.com/chkipper/chkipper.phar',
            ],
        ],
    ],
];
