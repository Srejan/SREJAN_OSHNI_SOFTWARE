@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
              
                
                <div class="card-header">
                    <h3 class="card-title">Product Edit</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="container p-2">
                    <form action="{{ route('admin.products.update', $product->id) }}"
                         method="post"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                      <div class="form-group">
                        <label for="email">Name:</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter email" name="name" value="{{ $product->name }}">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Purchase Price:</label>
                        <input type="number" class="form-control" id="pwd"  name="purchase_price" value="{{ $product->purchase_price }}">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Purchase Price:</label>
                        <input type="number" class="form-control" id="pwd" pl name="sale_price" value="{{ $product->sale_price }}">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Image:</label>
                        <input type="file" class="form-control" id="pwd"  name="image">
                      </div>
                      <img src="{{ asset($product->image) }}" height="80px" width="80px"><br><br>
                   
                      <button type="submit" class="btn btn-primary">Update Product</button>
                    </form>
                  </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
