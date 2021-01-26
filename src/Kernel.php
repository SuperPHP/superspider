<?php

namespace SuperPHP\SuperSpider;

class Kernel
{
    private $config = [
        name => 'Super Spider No.1',
        entry_point => NULL,
    ];

    public function __constuct(array $config = []) {
        if (empty($config['entry_point'])) {
            throw new \Exception('No Entry Point of the Spider');
        }
        $this->config = array_merge($this->config, $config);
    }
}