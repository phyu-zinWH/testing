
@extends('layout.master')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-4 ms-auto">
                    <a href="{{route('customer.index')}} " class="btn btn-dark float-left">Back</a>
                </div>
            </div>
            <div class="card content-center col-md-6">
                <div class="card-title">
                    <h2>Customer Information</h2>

                </div>
                <div class="row">
                    <div class="col-md-6">

                        <span>Name::&nbsp;{{$customer->name}}</span> 
                        <br>
                        <span>Code::{{$customer->phone}}</span>
                        <br>
                        <span>Phone::{{$customer->address}}</span>
                    </div>
                </div>
            </div>

            

        </div>
    </main>
@endsection



