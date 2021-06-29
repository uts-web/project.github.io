<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class topup extends Model
{
    protected $fillable = ['id','jumlah_diamond','harga'];
}
