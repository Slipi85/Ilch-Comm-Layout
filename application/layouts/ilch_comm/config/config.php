<?php

namespace Layouts\Ilch_comm\Config;

class Config extends \Ilch\Config\Install
{
    public $config = [
        'name' => 'Ilch Community',
        'version' => '1.0.0',
        'ilchCore' => '2.0.32',
        'author' => 'Slipi',
        'link' => 'http://ilch.de',
        'desc' => 'Schlichtes Community Layout, Die Navigation wird im Admincenter unter Menü3 gesteuert',
        'settings' => [
            'logo' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/ilch_comm/img/ilch_logo.png',
                'description' => '',
                ],
            'header' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/ilch_comm/img/background.jpg',
                'description' => 'descSlider',
                ],
            'headerheading' => [
                'type' => 'text',
                'default' => 'Ilch Community-Layout',
                'description' => 'descSliderText',
                ],
            'color' => [
                'type' => 'colorpicker',
                'default' => '#d4af37',
                'description' => 'linkColorDescp',
              ],
            'hover' => [
                'type' => 'colorpicker',
                'default' => '#1b1b1b',
                'description' => 'linkHoverDescp',
              ],
        ],
    ];

    public function getUpdate($installedVersion)
    {

    }
}
