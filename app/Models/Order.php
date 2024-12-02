<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name', 'description', 'location', 'quantity'];
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;

    public function flowers()
    {
        return $this->hasMany(Flower::class);
    }
}
