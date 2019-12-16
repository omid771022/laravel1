<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catgory extends Model
{

    protected $fillable=[
        'title',
        'description',
        'active'
    ];
}
