@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center text-danger">[Solve using SQL Join]</h3>
                </div>
                <div class="card-header">
                    <h3 class="card-title">Product wise Stock List</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Purchase Quantity</th>
                            <th>Purchase Return Quantity</th>
                            <th>Sale Quantity</th>
                            <th>Sale Return Quantity</th>
                            <th>Stock Quantity</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($records as $record)
                            <tr>
                                <td>{{ $record->name }}</td>
                                <td>{{ $record->total_purchase_quantity }}</td>
                                <td>{{ $record->total_purchase_return_quantity }}</td>
                                <td>{{ $record->total_sale_quantity }}</td>
                                <td>{{ $record->total_sale_return_quantity }}</td>
                                <td>{{ $record->total_purchase_quantity + $record->total_sale_return_quantity - $record->total_sale_quantity - $record->total_purchase_return_quantity }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
