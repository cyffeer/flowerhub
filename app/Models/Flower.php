<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    protected $fillable = ['name', 'age', 'bio', 'order_id'];

    /** @use HasFactory<\Database\Factories\FlowerFactory> */
    use HasFactory;

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}

