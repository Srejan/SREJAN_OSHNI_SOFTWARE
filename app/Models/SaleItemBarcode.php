<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleItemBarcode extends Model
{
    use HasFactory;

    public function sale_item()
    {
        return $this->belongsTo(SaleItem::class);
    }
}
