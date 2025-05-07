<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'faculty_id',
        'patron_type_id',
        'patronid',
        'firstname',
        'lastname',
        'phone',
        'email',
        'invoice_no',
        'order_date',
        'order_month',
        'order_year',
        'status', // เพิ่ม status ใน fillable
        'created_at',
        'updated_at'
    ];

    public function faculty(){
        return $this->belongsTo(Faculty::class,'faculty_id','id');
    }

    public function patrontype(){
        return $this->belongsTo(PatronType::class,'patron_type_id','id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

}
