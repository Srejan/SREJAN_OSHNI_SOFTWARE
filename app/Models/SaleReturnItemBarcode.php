<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleReturnItemBarcode extends Model
{
    use HasFactory;

    public function sale_return_item()
    {
        return $this->belongsTo(SaleReturnItem::class);
    }
}
