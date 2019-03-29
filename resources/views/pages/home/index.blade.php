@extends('master')
@section('stylesheet')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="./public/css/home.css" />
@endsection

@section('body')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="/" class="was-validated">
                        @csrf
                        <div class="form-group">
                            <label for="product_name">Product name:</label>
                            <input type="text" class="form-control" id="product_name" placeholder="Enter Product name" name="product_name" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="quantity_stock">Quantity in stock:</label>
                            <input type="number" class="form-control" id="quantity_stock" placeholder="Enter Quantity in stock" name="quantity_stock" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="price_per_item">Price per item:</label>
                            <input type="number" class="form-control" id="price_per_item" placeholder="Enter Price per item" name="price_per_item" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>

                        <button type="button" class="btn btn-primary btn-add-new">Add new</button>
                    </form>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table id="product_list" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Product name</th>
                            <th>Quantity in stock</th>
                            <th>Price per item</th>
                            <th>Datetime</th>
                            <th>Total value number</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Product name Example</td>
                            <td>Quantity in stock Example</td>
                            <td>Price per item Example</td>
                            <td>Datetime Example</td>
                            <td>Total value number Example</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection

@section('script')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $( function () {
            $('#product_list').DataTable();
            $('.btn-add-new').click(function ( ) {
                alert('Add new product feature is updating!')
            })
        } );
    </script>
@endsection


