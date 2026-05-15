<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'seller_id',
        'seller_name',
        'name',
        'phone',
        'address',
        'image',
        'description',
        'email',
        'is_active',
        'sub_merchant_key',
        'iban',
        'tax_number',
        'tax_office',
        'identity_number',
    ];

    protected $casts = [
        'sub_merchant_key' => 'encrypted',
    ];

    public function seller()
    {
        return $this->belongsTo(Seller::class, 'seller_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'store_id');
    }

    public function campaigns()
    {
        return $this->hasMany(Campaign::class, 'store_id');
    }
}
