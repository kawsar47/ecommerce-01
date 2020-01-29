
@extends('layouts/app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header bg-success">
                        Product List
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Description</th>
                                    <th>Product Price</th>
                                    <th>Alert  Quantity</th>
                                    <th>Product Quantity</th>
                                </tr>
                                </thead>
                                <tbody>

                               @foreach ($products as $product)
                                   <tr>
                                       <td>{{ $product->product_name }}</td>
                                       <td>{{ $product->product_description }}</td>
                                       <td>{{ $product->product_price }}</td>
                                       <td>{{ $product->alert_quantity }}</td>
                                       <td>{{ $product->product_quantity }}</td>

                                   </tr>
                               @endforeach


                                </tbody>
                            </table>
                            {{$products->links() }}

                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
              <div class="card">
                  <div class="card-header bg-success">
                       Add Product Form
                  </div>
                  <div class="card-body">

                      @if(session('status'))
                          <div class="alert alert-success">
                              {{ session('status') }}
                          </div>
                      @endif

                      <form action="{{ url('add/product/insert') }}" method="post">
                          @csrf
                          <div class="form-group">
                              <label>Product Name</label>
                              <input type="text" class="form-control"   placeholder="Enter your product name" name="product_name">
                          </div>

                          <div class="form-group">
                              <label>Product Description</label>
                              <textarea name="product_description" class="form-control" rows="3" ></textarea>
                          </div>

                          <div class="form-group">
                              <label>Product Price</label>
                              <input type="text" class="form-control"   placeholder="Enter your product price" name="product_price">
                          </div>

                          <div class="form-group">
                              <label>Product Quantity</label>
                              <input type="text" class="form-control"   placeholder="Enter your product quantity" name="product_quantity">
                          </div>

                          <div class="form-group">
                              <label>Alert Quantity</label>
                              <input type="text" class="form-control"   placeholder="Enter your product alert" name="alert_quantity">
                          </div>

                          <button type="submit" class="btn btn-primary">Add Product</button>
                      </form>

                  </div>

              </div>

            </div>

        </div>

    </div>

    @endsection
