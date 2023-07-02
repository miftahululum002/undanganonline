<?php

namespace App\Http\Helpers;

class BaseHelper
{

    public static function rupiah($angka)
    {
        $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
        return $hasil_rupiah;
    }
}
