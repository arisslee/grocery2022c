@extends('layouts.app')

@section('content')
<body style="background-image: url('images/loginSuccess.png'); background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;"> 
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-6">
</div>
        <div class="col-md-6">
</br></br></br></br></br></br>
        <div class="card mx-auto mt-5">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br><br>
                    <a href="{{ route('viewProduct')}}"><button type="button" class="btn btn-success">Go to Dashboard</button></a>

                </div>
            </div>
        </div>
    </div>
</div>
<body> 
@endsection
