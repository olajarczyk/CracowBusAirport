<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $fillable = ['user_id', 'passengers', 'adult', 'child', 'from', 'to', 'date', 'hour', 'price', 'name', 'surname', 'email', 'phone'];
}
