<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status'
    ];

    public function getCategoryProductStatusAttribute()
    {
        return $this->status == 1 ? 'Hiện' : 'Ẩn';
    }
}