<?php
require 'vendor/autoload.php';

use whikloj\BagItTools\Bag;

$bag = Bag::load('tests/resources/testtar.tar.bz2');
echo 'VALID = '.  +$bag->isValid();