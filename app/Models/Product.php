<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "product";
    protected $primaryKey = "id";
    protected $fillable = ['name', 'slug', 'category_id', 'image', 'description'];
    protected $hidden=['category_id'];

    // Relationship
    function category(){
        return $this->hasMany(Category::class, 'id','category_id');
    }

    // Accessors
    public function getImageAttribute($value){
        $image_name=url('')."/storage/$value";
        return $image_name;
    }
}
