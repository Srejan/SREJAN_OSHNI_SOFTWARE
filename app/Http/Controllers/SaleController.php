<?php

namespace App\Http\Controllers;
use App\Models\SaleItemBarcode;

class SaleController extends Controller
{
    public function index()
    {
        $data['records'] = SaleItemBarcode::paginate(50);
        return view('admin.sales.index', $data);
    }
}
