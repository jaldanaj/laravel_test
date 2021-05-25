<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    public $table = 'cities';
    protected $fillable = ['id', 'cod' , 'name'];
}
