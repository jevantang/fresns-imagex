<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jarvis Tang
 * Released under the Apache-2.0 License.
 */

namespace Plugins\ImageX\Support;

class Installer
{
    protected $config = [
        // [
        //     'item_tag' => 'image_x',
        //     'item_key' => 'access_key',
        //     'item_type' => 'string',
        //     'item_value' => null,
        // ],
    ];

    public function process(callable $callable)
    {
        foreach ($this->config as $configItem) {
            $callable($configItem);
        }
    }

    // plugin install
    public function install()
    {
        try {
            $this->process(function ($configItem) {
                // add config
            });
        } catch (\Throwable $e) {
            \info('add config fail: ' . $e->getMessage());
        }
    }

    /// plugin uninstall
    public function uninstall()
    {
        try {
            $this->process(function ($configItem) {
                // remove config
            });
        } catch (\Throwable $e) {
            \info('remove config fail: ' . $e->getMessage());
        }
    }
}
