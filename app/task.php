<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $fillable = [
        'name',
        'desc'
    ];
    
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
