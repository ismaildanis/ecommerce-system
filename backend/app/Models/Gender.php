<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $table = 'genders';

    protected $fillable = [
        'title',
        'slug',
    ];

    public function categories()
    {
        return $this->hasMany(Category::class, 'gender_id');
    }
}
