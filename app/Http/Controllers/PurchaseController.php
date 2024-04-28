<?php

namespace App\Http\Controllers;
use App\Models\PurchaseItemBarcode;

class PurchaseController extends Controller
{
    public function index()
    {
        $data['records'] = PurchaseItemBarcode::paginate(50);
        return view('admin.purchases.index', $data);
    }
}
