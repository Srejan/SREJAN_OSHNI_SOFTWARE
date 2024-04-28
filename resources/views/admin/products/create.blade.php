@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
             
                
                <div class="card-header">
                    <h3 class="card-title">Product Create</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                          
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="container p-2">
                    <form action="{{ route('admin.products.store') }}" method="post"  enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label for="email">Name:</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter email" name="name">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Purchase Price:</label>
                        <input type="number" class="form-control" id="pwd"  name="purchase_price">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Purchase Price:</label>
                        <input type="number" class="form-control" id="pwd" pl name="sale_price">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Image:</label>
                        <input type="file" class="form-control" id="pwd"  name="image">
                      </div><br>
                   
                      <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                  </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
