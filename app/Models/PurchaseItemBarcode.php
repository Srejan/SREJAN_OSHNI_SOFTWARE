<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseItemBarcode extends Model
{
    use HasFactory;

    public function purchase_item()
    {
        return $this->belongsTo(PurchaseItem::class);
    }

}
