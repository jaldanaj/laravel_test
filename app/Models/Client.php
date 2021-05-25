<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Client extends Model
{
    public $table = 'clients';
    protected $fillable = ['id', 'cod' , 'name' , 'city'];
}
