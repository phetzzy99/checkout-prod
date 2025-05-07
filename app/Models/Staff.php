<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'department',
        'status'
    ];

    public function confirmations()
    {
        return $this->hasMany(Notification::class, 'confirmed_by');
    }
}
