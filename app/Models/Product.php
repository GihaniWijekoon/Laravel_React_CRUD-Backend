<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Add these fillable fields
    protected $fillable = [
        'name', 
        'price', 
        'description', 
        'category_id'
    ];

    // Optional: Define relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}