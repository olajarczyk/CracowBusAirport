<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    public $fillable = ['passengers', 'adult', 'child', 'from', 'to', 'date', 'hour', 'price'];
}
