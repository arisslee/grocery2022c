@extends('layout')
@section('content')
<body style="background-image: url('images/background1.png'); background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;"> 
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6 m-5 pt-4 pb-4 bg-light">
        <h3 class="text-center">Add New Product</h3>
        <form action="{{ route('addProduct') }}" method="POST" enctype="multipart/form-data">
            @CSRF
            <div class="form-group">
                <label for="productName">Product Name</label>
                <input class="form-control" type="text" id="productName" name="productName" required>
            </div>    
            <div class="form-group">
                <label for="productDescription">Description</label>
                <input class="form-control" type="text" id="productDescription" name="productDescription" required>
            </div>
            <div class="form-group">
                <label for="productPrice">Price</label>
                <input class="form-control" type="double" id="productPrice" name="productPrice" min="0" required>
            </div>
            <div class="form-group">
                <label for="productQuantity ">Quantity</label>
                <input class="form-control" type="number" id="productQuantity" name="productQuantity" min="0" required>
            </div>
            <div class="form-group">
                <label for="productImage">Image</label>
                <input class="form-control" type="file" id="productImage" name="productImage" required>
            </div>
            <div class="form-group">
                <label for="Category">Category</label>
                <select name="CategoryID" id="CategoryID" class="form-control">
                    @foreach($categoryID as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="text-center">
            <button type="submit" class="btn btn-primary mt-4 mx-auto d-block">Add New</button>
            </div>
        </div>  
        </form>
        <br><br>
    </div>
    <div class="col-3-sm"></div>
</div>
</body>
@endsection