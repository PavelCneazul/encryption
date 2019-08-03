<?php

class randomdistribution
{
    var $app='';

    public function getApp()
    {
        return $this->app;
    }

    public function setApp($app)
    {
        $this->app = $app;
    }

    function one()
    {
        $array = $this->getApp();
        return $array;
//        for ($k = 0; $k < 30; $k++) {
//            if ($k == 0) $value[$k] = $array[0];
//            if ($k == 5) $value[$k] = $array[1];
//            if ($k == 10) $value[$k] = $array[2];
//            if ($k == 15) $value[$k] = $array[3];
//            if ($k == 20) $value[$k] = $array[4];
//            if ($k == 25) $value[$k] = $array[5];
//        }
//        $value = str_split($value);
//        $value=array_unique($value);
//        $value=implode('',$value);
    }

//    function two(&$value, &$k)
//    {
//        $array = '';
//        $this->insertthekey($array);
//        for ($k = 0; $k < 30; $k++) {
//            if ($k == 1) $value[$k] = $array[0];
//            if ($k == 6) $value[$k] = $array[1];
//            if ($k == 11) $value[$k] = $array[2];
//            if ($k == 16) $value[$k] = $array[3];
//            if ($k == 21) $value[$k] = $array[4];
//            if ($k == 26) $value[$k] = $array[5];
//        }
//        $value = str_split($value);
//        $value=array_unique($value);
//        $value=implode('',$value);
//    }
//
//    function three(&$value, &$k)
//    {
//        $array = '';
//        $this->insertthekey($array);
//        for ($k = 0; $k < 30; $k++) {
//            if ($k == 2) $value[$k] = $array[0];
//            if ($k == 7) $value[$k] = $array[1];
//            if ($k == 12) $value[$k] = $array[2];
//            if ($k == 17) $value[$k] = $array[3];
//            if ($k == 22) $value[$k] = $array[4];
//            if ($k == 27) $value[$k] = $array[5];
//        }
//        $value = str_split($value);
//        $value=array_unique($value);
//        $value=implode('',$value);
//    }
//
//    function four(&$value, &$k)
//    {
//        $array = '';
//        $this->insertthekey($array);
//        for ($k = 0; $k < 30; $k++) {
//            if ($k == 3) $value[$k] = $array[0];
//            if ($k == 8) $value[$k] = $array[1];
//            if ($k == 13) $value[$k] = $array[2];
//            if ($k == 18) $value[$k] = $array[3];
//            if ($k == 23) $value[$k] = $array[4];
//            if ($k == 28) $value[$k] = $array[5];
//        }
//        $value = str_split($value);
//        $value=array_unique($value);
//        $value=implode('',$value);
//    }
//
//    function five(&$value, &$k)
//    {
//        $array = '';
//        $this->insertthekey($array);
//        for ($k = 0; $k < 30; $k++) {
//            if ($k == 4) $value[$k] = $array[0];
//            if ($k == 9) $value[$k] = $array[1];
//            if ($k == 14) $value[$k] = $array[2];
//            if ($k == 19) $value[$k] = $array[3];
//            if ($k == 24) $value[$k] = $array[4];
//            if ($k == 29) $value[$k] = $array[5];
//        }
//        $value = str_split($value);
//        $value=array_unique($value);
//        $value=implode('',$value);
//    }
//
//    function six(&$value, &$k)
//    {
//        $array = '';
//        $this->insertthekey($array);
//        for ($k = 0; $k < 30; $k++) {
//            if ($k == 6) $value[$k] = $array[0];
//            if ($k == 8) $value[$k] = $array[1];
//            if ($k == 13) $value[$k] = $array[2];
//            if ($k == 19) $value[$k] = $array[3];
//            if ($k == 23) $value[$k] = $array[4];
//            if ($k == 27) $value[$k] = $array[5];
//        }
//        $value = str_split($value);
//        $value=array_unique($value);
//        $value=implode('',$value);
//    }
//
//    function seven(&$value, &$k)
//    {
//        $array = '';
//        $this->insertthekey($array);
//        for ($k = 0; $k < 30; $k++) {
//            if ($k == 0) $value[$k] = $array[0];
//            if ($k == 1) $value[$k] = $array[1];
//            if ($k == 2) $value[$k] = $array[2];
//            if ($k == 3) $value[$k] = $array[3];
//            if ($k == 4) $value[$k] = $array[4];
//            if ($k == 5) $value[$k] = $array[5];
//        }
//        $value = str_split($value);
//        $value=array_unique($value);
//        $value=implode('',$value);
//    }
//
//    function eight(&$value, &$k)
//    {
//        $array = '';
//        $this->insertthekey($array);
//        for ($k = 0; $k < 30; $k++) {
//            if ($k == 11) $value[$k] = $array[0];
//            if ($k == 13) $value[$k] = $array[1];
//            if ($k == 15) $value[$k] = $array[2];
//            if ($k == 17) $value[$k] = $array[3];
//            if ($k == 19) $value[$k] = $array[4];
//            if ($k == 21) $value[$k] = $array[5];
//        }
//        $value = str_split($value);
//        $value=array_unique($value);
//        $value=implode('',$value);
//    }
//
//    function nine(&$value, &$k)
//    {
//        $array = '';
//        $this->insertthekey($array);
//        for ($k = 0; $k < 30; $k++) {
//            if ($k == 13) $value[$k] = $array[0];
//            if ($k == 16) $value[$k] = $array[1];
//            if ($k == 19) $value[$k] = $array[2];
//            if ($k == 22) $value[$k] = $array[3];
//            if ($k == 25) $value[$k] = $array[4];
//            if ($k == 28) $value[$k] = $array[5];
//        }
//        $value = str_split($value);
//        $value=array_unique($value);
//        $value=implode('',$value);
//    }
//
//    function ten(&$value, &$k)
//    {
//        $array = '';
//        $this->insertthekey($array);
//        for ($k = 0; $k < 30; $k++) {
//            if ($k == 0) $value[$k] = $array[0];
//            if ($k == 3) $value[$k] = $array[1];
//            if ($k == 9) $value[$k] = $array[2];
//            if ($k == 12) $value[$k] = $array[3];
//            if ($k == 15) $value[$k] = $array[4];
//            if ($k == 18) $value[$k] = $array[5];
//        }
//        $value = str_split($value);
//        $value=array_unique($value);
//        $value=implode('',$value);
//    }
//
//    function eleven(&$value, &$k)
//    {
//        $array = '';
//        $this->insertthekey($array);
//        for ($k = 0; $k < 30; $k++) {
//            if ($k == 0) $value[$k] = $array[0];
//            if ($k == 4) $value[$k] = $array[1];
//            if ($k == 8) $value[$k] = $array[2];
//            if ($k == 12) $value[$k] = $array[3];
//            if ($k == 16) $value[$k] = $array[4];
//            if ($k == 20) $value[$k] = $array[5];
//        }
//        $value = str_split($value);
//        $value=array_unique($value);
//        $value=implode('',$value);
//    }
//
//    function twelve(&$value, &$k)
//    {
//        $array = '';
//        $this->insertthekey($array);
//        for ($k = 0; $k < 30; $k++) {
//            if ($k == 2) $value[$k] = $array[0];
//            if ($k == 6) $value[$k] = $array[1];
//            if ($k == 12) $value[$k] = $array[2];
//            if ($k == 18) $value[$k] = $array[3];
//            if ($k == 24) $value[$k] = $array[4];
//            if ($k == 29) $value[$k] = $array[5];
//        }
//        $value = str_split($value);
//        $value=array_unique($value);
//        $value=implode('',$value);
//    }
//
//    function thirteen(&$value, &$k)
//    {
//        $array = '';
//        $this->insertthekey($array);
//        for ($k = 0; $k < 30; $k++) {
//            if ($k == 3) $value[$k] = $array[0];
//            if ($k == 7) $value[$k] = $array[1];
//            if ($k == 14) $value[$k] = $array[2];
//            if ($k == 21) $value[$k] = $array[3];
//            if ($k == 23) $value[$k] = $array[4];
//            if ($k == 26) $value[$k] = $array[5];
//        }
//        $value = str_split($value);
//        $value=array_unique($value);
//        $value=implode('',$value);
//    }
//
//    function fourteen(&$value, &$k)
//    {
//        $array = '';
//        $this->insertthekey($array);
//        for ($k = 0; $k < 30; $k++) {
//            if ($k == 13) $value[$k] = $array[0];
//            if ($k == 21) $value[$k] = $array[1];
//            if ($k == 23) $value[$k] = $array[2];
//            if ($k == 24) $value[$k] = $array[3];
//            if ($k == 27) $value[$k] = $array[4];
//            if ($k == 28) $value[$k] = $array[5];
//        }
//        $value = str_split($value);
//        $value=array_unique($value);
//        $value=implode('',$value);
//    }
//
//    function fifteen(&$value, &$k)
//    {
//        $array = '';
//        $this-> insertthekey($array);
//        for ($k = 0; $k < 30; $k++) {
//            if ($k == 1) $value[$k] = $array[0];
//            if ($k == 6) $value[$k] = $array[1];
//            if ($k == 8) $value[$k] = $array[2];
//            if ($k == 17) $value[$k] = $array[3];
//            if ($k == 23) $value[$k] = $array[4];
//            if ($k == 25) $value[$k] = $array[5];
//        }
//        $value = str_split($value);
//        $value=array_unique($value);
//        $value=implode('',$value);
//    }
//
//    function sixteen(&$value, &$k)
//    {
//        $array = '';
//        $this-> insertthekey($array);
//        for ($k = 0; $k < 30; $k++) {
//            if ($k == 6) $value[$k] = $array[0];
//            if ($k == 12) $value[$k] = $array[1];
//            if ($k == 16) $value[$k] = $array[2];
//            if ($k == 17) $value[$k] = $array[3];
//            if ($k == 21) $value[$k] = $array[4];
//            if ($k == 29) $value[$k] = $array[5];
//        }
//        $value = str_split($value);
//        $value=array_unique($value);
//        $value=implode('',$value);
//    }
//
//    function seventeen(&$value, &$k)
//    {
//        $array = '';
//        $this->insertthekey($array);
//        for ($k = 0; $k < 30; $k++) {
//            if ($k == 5) $value[$k] = $array[0];
//            if ($k == 6) $value[$k] = $array[1];
//            if ($k == 7) $value[$k] = $array[2];
//            if ($k == 8) $value[$k] = $array[3];
//            if ($k == 9) $value[$k] = $array[4];
//            if ($k == 14) $value[$k] = $array[5];
//        }
//        $value = str_split($value);
//        $value=array_unique($value);
//        $value=implode('',$value);
//    }
//
//    function eighteen(&$value, &$k)
//    {
//        $array = '';
//        $this->insertthekey($array);
//        for ($k = 0; $k < 30; $k++) {
//            if ($k == 9) $value[$k] = $array[0];
//            if ($k == 12) $value[$k] = $array[1];
//            if ($k == 15) $value[$k] = $array[2];
//            if ($k == 18) $value[$k] = $array[3];
//            if ($k == 21) $value[$k] = $array[4];
//            if ($k == 24) $value[$k] = $array[5];
//        }
//        $value = str_split($value);
//        $value=array_unique($value);
//        $value=implode('',$value);
//    }
//
//    function nineteen(&$value, &$k)
//    {
//        $array = '';
//        $this->insertthekey($array);
//        for ($k = 0; $k < 30; $k++) {
//            if ($k == 24) $value[$k] = $array[0];
//            if ($k == 25) $value[$k] = $array[1];
//            if ($k == 26) $value[$k] = $array[2];
//            if ($k == 27) $value[$k] = $array[3];
//            if ($k == 28) $value[$k] = $array[4];
//            if ($k == 29) $value[$k] = $array[5];
//        }
//        $value = str_split($value);
//        $value=array_unique($value);
//        $value=implode('',$value);
//    }
//
//    function twenty(&$value, &$k)
//    {
//        $array = '';
//        $this->insertthekey($array);
//        for ($k = 0; $k < 30; $k++) {
//            if ($k == 19) $value[$k] = $array[0];
//            if ($k == 20) $value[$k] = $array[1];
//            if ($k == 21) $value[$k] = $array[2];
//            if ($k == 22) $value[$k] = $array[3];
//            if ($k == 23) $value[$k] = $array[4];
//            if ($k == 24) $value[$k] = $array[5];
//        }
//        $value = str_split($value);
//        $value=array_unique($value);
//        $value=implode('',$value);
//    }
//
//    function twentyone(&$value, &$k)
//    {
//        $array = '';
//        $this->insertthekey($array);
//        for ($k = 0; $k < 30; $k++) {
//            if ($k == 2) $value[$k] = $array[0];
//            if ($k == 3) $value[$k] = $array[1];
//            if ($k == 5) $value[$k] = $array[2];
//            if ($k == 8) $value[$k] = $array[3];
//            if ($k == 13) $value[$k] = $array[4];
//            if ($k == 21) $value[$k] = $array[5];
//        }
//        $value = str_split($value);
//        $value=array_unique($value);
//        $value=implode('',$value);
//    }
//
//    function twentytwo(&$value, &$k)
//    {
//        $array = '';
//        $this->insertthekey($array);
//        for ($k = 0; $k < 30; $k++) {
//            if ($k == 4) $value[$k] = $array[0];
//            if ($k == 5) $value[$k] = $array[1];
//            if ($k == 9) $value[$k] = $array[2];
//            if ($k == 14) $value[$k] = $array[3];
//            if ($k == 23) $value[$k] = $array[4];
//            if ($k == 27) $value[$k] = $array[5];
//        }
//        $value = str_split($value);
//        $value=array_unique($value);
//        $value=implode('',$value);
//    }
}

