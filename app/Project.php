<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'team_leader',
        'budget',
    ];

    public function employee()
    {
        return $this->belongsTo('App\Employee', 'id', 'team_leader');
    }
}
