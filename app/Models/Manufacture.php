<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    use HasFactory;
    protected $primaryKey = 'item_id';
    public function products()
    {
        return $this->hasMany(Product::class, 'item_id');
    }
}
