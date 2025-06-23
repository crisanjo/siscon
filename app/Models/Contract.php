<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Contract extends Model
{
  use HasFactory;

    protected $fillable = [
        'value',
        'start_date',
        'end_date',
        'digital_signature',
        'providers_id',
    ];//  //
}
