<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];


    // $builder = $this->pembayaran;
    //     $builder->select('order.*,users.*,pembayaran.*,pembayaran.status as statusPembayaran,order.status as statusWeb');
    //     $builder->join('users', 'users.id = pembayaran.id_user', 'left');
    //     $builder->join('order', 'order.id_user = pembayaran.id_user', 'left');
    //     $query = $builder->get();
    //     return $query->getResult();
}
