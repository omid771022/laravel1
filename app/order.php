<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
protected $fillable=[
    'user_id','title','amount',	'order_id'
];
}
