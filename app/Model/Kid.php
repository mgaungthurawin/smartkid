<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    protected $fillable = ['customer_id', 'father_name', 'mother_name', 'birthday', 'height', 'weight', 'baby_name', 'subscribed_date'];
}
