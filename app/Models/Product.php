<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "product";
    protected $primaryKey = "id";

    public $fillable = ['name', 'slug', 'category_id', 'image', 'description'];

    // function getCategory()
    // {
    //     return $this->hasMany(Category::class, 'id', 'id');
    // }

    public function getCategoryIdAttribute($value)
    {
        $category = Category::find($value);
        return $category->name;
    }
}
