<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'year'
    ];

    public function tasks()
    {
        return $this->hasMany(task::class);
    }
}
