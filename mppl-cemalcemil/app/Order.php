<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $fillable = ['users_id', 'bolabolacoklat', 'chococookies', 'cupcaketopping', 'miecrispy', 'mixbox4in1'];
}
