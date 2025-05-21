<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'message',
        'is_read',
        'confirmed_by',
        'confirmation_note',
        'confirmed_at',
    ];

    protected $casts = [
        'is_read' => 'boolean',
        'confirmed_at' => 'datetime',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'confirmed_by');
    }
    
}
