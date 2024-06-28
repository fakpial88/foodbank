<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'food_id', 'user_name', 'quantity',
    ];

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
