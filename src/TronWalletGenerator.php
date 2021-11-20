<?php

namespace dgladys\TronGenerator;

class TronWalletGenerator {

    private $python_dir = 'python';

    public function generate(): TronWallet
    {
        $content = shell_exec($this->python_dir." script.py");
        $data = json_decode($content, true);
        return new TronWallet($data);
    }
}