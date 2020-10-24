<?php
// File : Salebonus.php
// Fungsi untuk memberikan bonus kepada sales jika memenuhi target tertentu
// Jika penjualan >30 maka akan mendapat bonus Rp 500.000
// Jika penjualan 21-30 maka akan mendapat bonus Rp 400.000
// Jika penjualan 11-20 maka akan mendapat bonus Rp 300.000
// Jika penjualan 6-10 maka akan mendapat bonus Rp 200.000
// Jika penjualan 1-5 maka akan mendapat bonus Rp 100.000
// Jika penjualan 0 maka tidak akan mendapat bonus

Class Bonus
{

    public function getBonus($sale)
    {
        if ($sale > 30) {return "500000";} 
        elseif ($sale > 20) {return "400000";}
        elseif ($sale > 10) {return "300000";}
        elseif ($sale > 5) {return "200000";}
        elseif ($sale > 0) {return "100000";}
        elseif ($sale == 0) {return "0";}
        else {return "Input harus berupa bilangan bulat >=0";}

    }

    public function checkDecimal($sale)
    {
        $value = is_integer($sale);
        if ($value == FALSE) {return "Input harus berupa angka bulat";}
    }

    public function checkNumeric($sale)
    {
        $value = is_numeric($sale);
        if ($value == FALSE) {return "Input harus berupa angka";}
    }
}
?>