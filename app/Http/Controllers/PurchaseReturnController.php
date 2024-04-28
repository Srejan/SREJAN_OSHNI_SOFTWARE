<?php

namespace App\Http\Controllers;
use App\Models\PurchaseReturnItemBarcode;

class PurchaseReturnController extends Controller
{
    public function index()
    {
        $data['records'] = PurchaseReturnItemBarcode::paginate(50);
        return view('admin.purchase-returns.index', $data);
    }
}
