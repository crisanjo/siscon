<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Protocol extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'solution',
        'opening_date',
        'value',
        'paid',
        'user_id',
        'area_id',
        'status_id',
        'type_id',
        'priority',
        
    ];//
}
