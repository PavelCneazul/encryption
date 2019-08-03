<?php

include "randomdistribution.php";

$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$charactersLength = strlen($characters);
$randomString = '';
for ($i = 0; $i < 6; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
}
$functions = new randomdistribution();
$functions->setApp($randomString);
$da=$functions->one();
echo $da[1];


