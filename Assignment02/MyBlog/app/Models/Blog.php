<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'content',
        'is_published',
        'inserted_by',
        'updated_by',
    ];

    // Define the relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
