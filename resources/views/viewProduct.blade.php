@extends('layout')
@section('content')
<body style="background-image: url('images/background1.png'); background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;"> 
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10 m-5 pt-4 pb-4 bg-light">
        <div class="card-body">
        <h2 class="pb-4">Product Details</h2>
            <div class="row">
                @foreach($products as $product)
                <div class="height d-flex justify-content-center align-items-canter">
            <div class="card p-3 m-3">
                <div class="d-flex justify-content-between align-items-canter">
                    <div class="mt-2">

                        <div class="mt-5">
                            <h5 class="text-uppercase mb-0">{{$product->name}}</h5>
                            <h1 class="main-heading mt-0">RM {{$product->price}}</h1>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{asset('images/')}}/{{$product->image}}" width = "100" class = "img-fluid">
                    </div>
                </div>

                <p>{{$product->description}}</p>
                <a href = "{{route('product.detail',['id'=>$product->id])}}" class = "">
                        <button type="submit" class="btn btn-danger btn-xs">Add to Cart</button>
                    </div>
                </div>
                @endforeach
            </form>
        </div>
    </div>
    <div class="col-sm-1"></div>
</div>
</body>
@endsection

