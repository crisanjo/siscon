<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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


    /**
     * Get the provider that owns the comment.
     */
    public function provider(): BelongsTo
    {
        return $this->belongsTo(Provider::class, 'providers_id');
    }
}
