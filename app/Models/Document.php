<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $primaryKey = 'document_id';
    public function products()
    {
        return $this->hasMany(Product::class, 'document_id');
    }
}
