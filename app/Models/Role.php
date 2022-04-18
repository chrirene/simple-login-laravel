<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Select extends Model
{
    protected $fillable = [
        'id', 'name','description',
    ];


    protected $table = 'roles';
    public $timestamps = false;
}