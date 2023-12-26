<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryMethod extends Model
{
    use HasFactory;

    protected $fillable = ['name',
        'estimated_time',
        'sum'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
