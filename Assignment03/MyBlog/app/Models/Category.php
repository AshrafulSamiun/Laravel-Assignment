<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'is_active',
        'inserted_by',
        'updated_by',
    ];

    // Define any relationships if needed using 
    public function blogs()
    {
        return $this->hasMany(Blog::class, 'category_id');
    }
}
