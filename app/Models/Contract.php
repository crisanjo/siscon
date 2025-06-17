<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Contract extends Model
{
  use HasFactory;

    protected $fillable = [
        'Valor',
        'start_date',
        'end date',
        'digital_signatura',
        'providers_id',
        'readjustment_month',
    ];//  //
}
