<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Readjustment extends Model
{
    use HasFactory;

    protected $fillable = [
        'readjustment',
        'contract_id',
    ];
}
