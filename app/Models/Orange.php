<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orange extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_item';
    public function products()
    {
        return $this->hasMany(Product::class, 'id_item');
    }
}
