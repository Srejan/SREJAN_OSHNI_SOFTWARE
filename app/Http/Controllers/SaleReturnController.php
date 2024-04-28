<?php

namespace App\Http\Controllers;
use App\Models\SaleReturnItemBarcode;

class SaleReturnController extends Controller
{
    public function index()
    {
        $data['records'] = SaleReturnItemBarcode::paginate(50);
        return view('admin.sale-returns.index', $data);
    }
}
