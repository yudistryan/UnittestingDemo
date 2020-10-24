<?php
// File : Salebonus.php


Class distance
{

    // scale 1:300.000
    public function getDistance3($map)
    {
        $scale = 300000;
        $dist = ($map*$scale)/100000;
        return $dist;
    }

    // scale 1:200.000
    public function getDistance2($map)
    {
        $scale = 200000;
        $dist = ($map*$scale)/100000;
        return $dist;
    }

    // scale 1:100.000
    public function getDistance1($map)
    {
        $scale = 100000;
        $dist = ($map*$scale)/100000;
        return $dist;
    }

    // scale 1:500.000
    public function getDistance5($map)
    {
        $scale = 500000;
        $dist = ($map*$scale)/100000;
        return $dist;
    }

    // scale 1:600.000
    public function getDistance6($map)
    {
        $scale = 600000;
        $dist = ($map*$scale)/100000;
        return $dist;
    }

    public function checkNegative($map)
    {
        if ($map < 0) {return "Input harus berupa bilangan positif";}
    }

    public function checkNumeric($map)
    {
        $value = is_numeric($map);
        if ($value == FALSE) {return "Input harus berupa angka";}
    }

    public function checkUpperBound($map)
    {
        if ($map > 100) {return "Input tidak boleh lebih dari 100";}
    }

}
?>