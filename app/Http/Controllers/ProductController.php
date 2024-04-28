<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Traits\FileSaver;
use DB;

class ProductController extends Controller
{
    use FileSaver;

    public function index()
    {
        
        $data['products'] = Product::paginate(50);
        return view('admin.products.index', $data);
    }










      /*
     |--------------------------------------------------------------------------
     | CREATE METHOD
     |--------------------------------------------------------------------------
    */
    public function create(Request $request)
    {
        
        return view('admin.products.create');
    }













    /*
     |--------------------------------------------------------------------------
     | STORE METHOD
     |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        DB::transaction(function() use ($request){

            $product= Product::create([
                'name'             => $request->name,
                'purchase_price'   => $request->purchase_price,
                'sale_price'       => $request->sale_price,

            ]);

            
            if($request->image){
                $this->upload_file($request->image, $product, 'image', 'product');
            }
        });

        return redirect()->route('admin.products.index');
       
    }













    /*
     |--------------------------------------------------------------------------
     | SHOW METHOD
     |--------------------------------------------------------------------------
    */
    public function show($id)
    {
        # code...
    }





    



    /*
     |--------------------------------------------------------------------------
     | EDIT METHOD
     |--------------------------------------------------------------------------
    */
    public function edit($id)
    {
        $data['product'] = Product::find($id);
        return view('admin.products.edit', $data);
    }













    /*
     |--------------------------------------------------------------------------
     | UPDATE METHOD
     |--------------------------------------------------------------------------
    */
    public function update($id, Request $request)
    {
        DB::transaction(function() use ($request){

            $product = Product::find($id);
            $product->update([
                'name'             => $request->name,
                'purchase_price'   => $request->purchase_price,
                'sale_price'       => $request->sale_price,
            ]);

            if($request->image){
                $this->upload_file($request->image, $product, 'image', 'product');
            }
        });

        return redirect()->route('admin.products.index');

    }












    /*
     |--------------------------------------------------------------------------
     | DELETE/DESTORY METHOD
     |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('admin.products.index');

    }






}
