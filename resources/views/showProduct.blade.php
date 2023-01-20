@extends('layout')
@section('content')
<body style="background-image: url('images/background1.png'); background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;"> 
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 ">
    <div class="text-center mt-5">
    <img src="{{ asset('images/textfx.png')}}" width=50% alt="" class="img-fluid" > 
</div>
    <div id="myCarousel" class="carousel slide d-flex justify-content-center mt-5 " data-ride="carousel" data-interval="1500">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                                            <!-- Wrapper for slides -->
                    <div class="carousel-inner text-center">
                        <div class="carousel-item item active">
                        <img style="width: 20%; height: 10%;" src="{{ asset('images/freshVegetable.png')}}" alt="picture 1">
                        </div>
                    
                        <div class="carousel-item item">
                        <img style="width: 20%; height: 10%;" src="{{ asset('images/freshMeat.png')}}" alt="picture 2">
                        </div>
                    
                        <div class="carousel-item item">
                        <img style="width: 20%; height: 10%;" src="{{ asset('images/freshFruit.png')}}" alt="picture 3">
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


        <div>
        <h2 class="mt-5 text-center" >--------------------------------------------------------------------------------------------------------</h2>

        </div>
        <table class="table table-bordered  table-striped mt-3" style="border: 2px solid #000;">
            <thead>
                <tr style="font-family: Arial; font-size: 18px; font-weight: bold;">
                    <td>ID</td>
                    <td>Image</td>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Category</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr >
                    <td class="text-center">{{ $product->id }}</td>
                    <td><img src="{{ asset('images/') }}/{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid" width="100"></td>
                    <td class="text-center">{{ $product->name }}</td>
                    <td class="text-center">{{ $product->description }}</td>
                    <td class="text-center">{{ $product->price }}</td>
                    <td class="text-center">{{ $product->quantity }}</td>
                    <td class="text-center">{{ $product->catName }}</td>
                    <td class="text-center">
                        <a href="{{ route('editProduct',['id'=>$product->id]) }}" class="btn btn-warning btn-xs">Edit</a> 
                        <a href="{{ route('deleteProduct',['id'=>$product->id]) }}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br><br>
    </div>
    <div class="col-sm-2"></div>
</div>
</body>
@endsection