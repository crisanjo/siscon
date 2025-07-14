<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
    /**
     * Get the area that owns the comment.
     */
    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class, 'area_id');
    }
    //
    /**
     * Get the status that owns the comment.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
    
}
