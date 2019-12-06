<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = [
        'name',
        'type',
        'balance',
        'from',
        'date_of_transaction',
    ];

    public function client()
    {
        return $this->belongsTo('App\Client', 'id', 'from');
    }
}
