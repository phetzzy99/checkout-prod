<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $fillable = [
        'order_id',
        'subject',
        'author',
        'callnum',
        'status',
        'note',
        'created_at',
        'updated_at'
    ];

    public function order(){
        return $this->belongsTo(Order::class,'order_id','id');
    }

}
