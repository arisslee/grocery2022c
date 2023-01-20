@extends('layout')
@section('content')
<body style="background-image: url('images/background1.png'); background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;"> 
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6 m-5 pt-3 pb-4 bg-light">
        <h2 class="text-center pt-3">Edit Product</h2>
        <form action="{{route('updateProduct')}}" method="POST" enctype="multipart/form-data"> 
            @CSRF
            @foreach($products as $product)
            <div class="form-group text-center pt-3">
                <img src="{{asset('images')}}/{{$product->image}}" alt="" width="200" class="img-fluid"><br>
            </div>
            <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input class="form-control" type="text" id="productName" name="productName" value="{{ $product->name }}" required>
            </div>    
            <div class="form-group">
                <label for="productDescription">Description</label>
                <input class="form-control" type="text" id="productDescription" name="productDescription" value="{{ $product->description }}" required>
            </div>    
            <div class="form-group">
                <label for="productPrice">Price</label>
                <input class="form-control" type="double" id="productPrice" name="productPrice" min="0" value="{{ $product->price }}" required>
            </div>
            <div class="form-group">
                <label for="productQuantity ">Quantity</label>
                <input class="form-control" type="number" id="productQuantity" name="productQuantity" min="0" value="{{ $product->quantity }}" required>
            </div>
            <div class="form-group">
                <label for="productImage">Image</label>
                <input class="form-control" type="file" id="productImage" name="productImage">
            </div>
            <div class="form-group pb-5">
                <label for="Category">Category</label>
                <select name="CategoryID" id="CategoryID" class="form-control">
                    @foreach($categoryID as $category)
                    <option value="{{$category->id}}"
                        @if($product->CategoryID==$category->id)
                            selected
                        @endif
                    >{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="text-center ">
            <button type="submit" class="btn btn-primary mx-auto d-block">Update</button>
            </div>
            @endforeach
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
</body>
@endsection