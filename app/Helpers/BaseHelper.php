<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class BaseHelper
{

    public static function rupiah($angka)
    {
        $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
        return $hasil_rupiah;
    }

    public static function join()
    {
        $data = DB::table('pembayaran')->select([
            'order.*',
            'users.*',
            'pembayaran.*',
            'pembayaran.status as status_pembayaran', 'order.status as status_web'
        ])
            ->join('users', 'users.id', '=', 'pembayaran.id_user')
            ->join('order', 'order.id_user', '=', 'pembayaran.id_user')
            ->get();
        return $data;
    }

    public static function getDummyString($prefix = 'dummy_')
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 7; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $generate = $prefix . $randomString;
        return $generate;
    }
}
