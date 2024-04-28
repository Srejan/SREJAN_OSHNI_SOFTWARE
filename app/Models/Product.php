<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function purchase_items()
    {
        return $this->hasMany(PurchaseItem::class);
    }

    public function purchase_return_items()
    {
        return $this->hasMany(PurchaseReturnItem::class);
    }

    public function sale_items()
    {
        return $this->hasMany(SaleItem::class);
    }

    public function sale_return_items()
    {
        return $this->hasMany(SaleReturnItem::class);
    }

}
