<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buybackemas extends Model
{
    use HasFactory;

    protected $fillable = ['karat', 'price'];
}
