<?php
include "insertkey.php";
class encryption
{

function generator()
{
    $functions = new randomdistribution();
    $array = $functions->getApp();
    a:
    date_default_timezone_set('Europe/Bucharest');
    $plans = date('H');
    $rows = date('i');
    $rows = ltrim($rows, "0");
    $seed = str_split('abcdefghijklmnopqrstuvwxyz'
        . 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
        . '0123456789'); // and any other characters
    shuffle($seed);

    $j = 0;

    $plan = array();
    while ($j < 24) {
        $matrix = array();
        $i = 0;
        while ($i < 60) {
            $rand = '';
            foreach (array_rand($seed, 30) as $k) $rand .= $seed[$k];
            $matrix[$i] = $rand;
            $i++;
        }

        $plan[$j] = $matrix;
        $j++;
    }



    foreach ($plan as &$matrix) {
        foreach ($matrix as $indexes => &$value) {
            for ($k = 0; $k < strlen($value); $k++) {
                if ($indexes == 0) {
                    getRandom($value, $k);
                }
                if ($indexes == 1) {
                    getRandom($value, $k);
                }
                if ($indexes == 2) {
                    getRandom($value, $k);
                }
                if ($indexes == 3) {
                    getRandom($value, $k);
                }
                if ($indexes == 4) {
                    getRandom($value, $k);
                }
                if ($indexes == 5) {
                    getRandom($value, $k);
                }
                if ($indexes == 6) {
                    getRandom($value, $k);
                }
                if ($indexes == 7) {
                    getRandom($value, $k);
                }
                if ($indexes == 8) {
                    getRandom($value, $k);
                }
                if ($indexes == 9) {
                    getRandom($value, $k);
                }
                if ($indexes == 10) {
                    getRandom($value, $k);
                }
                if ($indexes == 11) {
                    getRandom($value, $k);
                }
                if ($indexes == 12) {
                    getRandom($value, $k);
                }
                if ($indexes == 13) {
                    getRandom($value, $k);
                }
                if ($indexes == 14) {
                    getRandom($value, $k);
                }
                if ($indexes == 15) {
                    getRandom($value, $k);
                }
                if ($indexes == 16) {
                    getRandom($value, $k);
                }
                if ($indexes == 17) {
                    getRandom($value, $k);
                }
                if ($indexes == 18) {
                    getRandom($value, $k);
                }
                if ($indexes == 19) {
                    getRandom($value, $k);
                }
                if ($indexes == 20) {
                    getRandom($value, $k);
                }
                if ($indexes == 21) {
                    getRandom($value, $k);
                }
                if ($indexes == 22) {
                    getRandom($value, $k);
                }
                if ($indexes == 23) {
                    getRandom($value, $k);
                }
                if ($indexes == 24) {
                    getRandom($value, $k);
                }
                if ($indexes == 25) {
                    getRandom($value, $k);
                }
                if ($indexes == 26) {
                    getRandom($value, $k);
                }
                if ($indexes == 27) {
                    getRandom($value, $k);
                }
                if ($indexes == 28) {
                    getRandom($value, $k);
                }
                if ($indexes == 29) {
                    getRandom($value, $k);
                }
                if ($indexes == 30) {
                    getRandom($value, $k);
                }
                if ($indexes == 31) {
                    getRandom($value, $k);
                }
                if ($indexes == 32) {
                    getRandom($value, $k);
                }
                if ($indexes == 33) {
                    getRandom($value, $k);
                }
                if ($indexes == 34) {
                    getRandom($value, $k);
                }
                if ($indexes == 35) {
                    getRandom($value, $k);
                }
                if ($indexes == 36) {
                    getRandom($value, $k);
                }
                if ($indexes == 37) {
                    getRandom($value, $k);
                }
                if ($indexes == 38) {
                    getRandom($value, $k);
                }
                if ($indexes == 39) {
                    getRandom($value, $k);
                }
                if ($indexes == 40) {
                    getRandom($value, $k);
                }
                if ($indexes == 41) {
                    getRandom($value, $k);
                }
                if ($indexes == 42) {
                    getRandom($value, $k);
                }
                if ($indexes == 43) {
                    getRandom($value, $k);
                }
                if ($indexes == 44) {
                    getRandom($value, $k);
                }
                if ($indexes == 45) {
                    getRandom($value, $k);
                }
                if ($indexes == 46) {
                    getRandom($value, $k);
                }
                if ($indexes == 47) {
                    getRandom($value, $k);
                }
                if ($indexes == 48) {
                    getRandom($value, $k);
                }
                if ($indexes == 49) {
                    getRandom($value, $k);
                }
                if ($indexes == 50) {
                    getRandom($value, $k);
                }
                if ($indexes == 51) {
                    getRandom($value, $k);
                }
                if ($indexes == 52) {
                    getRandom($value, $k);
                }
                if ($indexes == 53) {
                    getRandom($value, $k);
                }
                if ($indexes == 54) {
                    getRandom($value, $k);
                }
                if ($indexes == 55) {
                    getRandom($value, $k);
                }
                if ($indexes == 56) {
                    getRandom($value, $k);
                }
                if ($indexes == 57) {
                    getRandom($value, $k);
                }
                if ($indexes == 58) {
                    getRandom($value, $k);
                }
                if ($indexes == 59) {
                    getRandom($value, $k);
                }
            }
        }
    }
    $key = array();
    for ($k = 0; $k < strlen($plan[$plans][$rows]); $k++) {
        if ($plan[$plans][$rows][$k] == $array[0]) array_push($key, $plan[$plans][$rows][$k]);
        if ($plan[$plans][$rows][$k] == $array[1]) array_push($key, $plan[$plans][$rows][$k]);
        if ($plan[$plans][$rows][$k] == $array[2]) array_push($key, $plan[$plans][$rows][$k]);
        if ($plan[$plans][$rows][$k] == $array[3]) array_push($key, $plan[$plans][$rows][$k]);
        if ($plan[$plans][$rows][$k] == $array[4]) array_push($key, $plan[$plans][$rows][$k]);
        if ($plan[$plans][$rows][$k] == $array[5]) array_push($key, $plan[$plans][$rows][$k]);

    }

    $key1 = array_unique($key);

//echo "Plan $plans and the row $rows generate the next line:\n";
//echo $plan[$plans][$rows];
    $key1 = implode('', $key1);

    if ($key1 == $array) {
        echo "The key for decryption is:\n";
        echo $key1;
    } else goto a;
}
}
?>
