<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'address',
        'tel_no',
        'email',
        'nid',
        'position',
    ];
}
