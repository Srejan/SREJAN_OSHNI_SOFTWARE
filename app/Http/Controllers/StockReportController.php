<?php

namespace App\Http\Controllers;
use App\Models\Product;
use DB;

class StockReportController extends Controller
{
    public function index()
    {
         $data['records'] = Product::select('products.id', 'products.name',
                            DB::raw('COALESCE(SUM(purchase_item_barcodes.quantity), 0) AS total_purchase_quantity'), 
                            DB::raw('COALESCE(SUM(sale_item_barcodes.quantity), 0) AS total_sale_quantity'),
                            DB::raw('COALESCE(SUM(sale_return_item_barcodes.quantity), 0) AS total_sale_return_quantity'),
                            DB::raw('COALESCE(SUM(purchase_return_item_barcodes.quantity), 0) AS total_purchase_return_quantity'))
                            ->leftJoin('purchase_items', 'products.id', '=', 'purchase_items.product_id')
                            ->leftJoin('purchase_item_barcodes', 'purchase_items.id', '=', 'purchase_item_barcodes.purchase_item_id')
                            ->leftJoin('sale_items', 'products.id', '=', 'sale_items.product_id')
                            ->leftJoin('sale_item_barcodes', 'sale_items.id', '=', 'sale_item_barcodes.sale_item_id')
                            ->leftJoin('sale_return_items', 'products.id', '=', 'sale_return_items.product_id')
                            ->leftJoin('sale_return_item_barcodes', 'sale_return_items.id', '=', 'sale_return_item_barcodes.sale_return_item_id')
                            ->leftJoin('purchase_return_items', 'products.id', '=', 'purchase_return_items.product_id')
                            ->leftJoin('purchase_return_item_barcodes', 'purchase_return_items.id', '=', 'purchase_return_item_barcodes.purchase_return_item_id')
                            ->groupBy('products.id', 'products.name')
                            ->get();
        return view('admin.stocks.index', $data);
    }
}
