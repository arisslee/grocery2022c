@extends('layout')
@section('content')
<body style="background-image: url('images/background1.png'); background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;"> 
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 m-5 pb-3 bg-light">
        <br><br>
        <div class="card-body">
        <form action="{{route('add.to.cart')}}" method="POST">  
    @CSRF
    <table class="table table-bordered">
        <h2 class="pb-4">Product Detail</h2>
        <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{  $product->name }}</td>
                <td><img src="{{ asset('images/')}}/{{ $product->image }}" alt="" width="100" class="img-fluid"></td>
                <td>{{  $product->description }}</td>
                <td>
                    <input type="hidden" name="id" value="{{  $product->id }}">
                    <input type="number" min="1" max="{{ $product->quantity }}" name="quantity"> 
                    Available: {{  $product->quantity }}
                </td>
                <td>RM{{  $product->price }}</td>
                <td>
                    <button type="submit" class="btn btn-danger btn-xs">Add to Cart</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</form>
        </div>
    </div>
    <div class="col-sm-2"></div>
</div>
</body>
@endsection