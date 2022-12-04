<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    use HasFactory;

    protected $table = "contactus";
    protected $primaryKey = "id";

    protected $fillable=[
        'name',
        'email',
        'comment'
    ];

    public function setPhoneAttribute($value)
    {
        $this->attributes['phone'] = preg_replace('/[^0-9]/', '', $value);
    }

    public function getPhoneAttribute($value)
    {
        return '+' . $value;
    }
}
