<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseReturnItemBarcode extends Model
{
    use HasFactory;

    public function purchase_return_item()
    {
        return $this->belongsTo(PurchaseReturnItem::class);
    }
}
