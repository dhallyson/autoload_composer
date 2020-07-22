<?php

use Source\Classes\Address;
use Source\Classes\User;

require __DIR__ . "/vendor/autoload.php";

$user = new User;
$address = new Address;

var_dump(
    $user,
    $address
);