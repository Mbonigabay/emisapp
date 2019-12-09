<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'name',
        'type',
        'balance',
        'done_by',
        'date_of_transaction',
    ];

    public function employee()
    {
        return $this->belongsTo('App\Employee', 'done_by', 'id');
    }
}
