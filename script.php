<?php 

require_once('./vendor/autoload.php');

use dgladys\TronGenerator\TronWalletGenerator;


$generator = new TronWalletGenerator();
$wallet = $generator->generate();

echo $wallet;