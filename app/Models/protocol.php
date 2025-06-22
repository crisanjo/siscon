<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class protocol extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'solution',
        'opening',
        'value',
        'paid',
        'user_id',
        'area_id',
        'status_id',
        'type_id',
        'priority',
        
    ];//
}
