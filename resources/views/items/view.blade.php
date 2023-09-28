
@extends('layout.master')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-4 ms-auto">
                    <a href="{{route('item.index')}} " class="btn btn-dark float-left">Back</a>
                </div>
            </div>
            <div class="card content-center col-md-6">
                <div class="card-title">
                    <h2>Item Information</h2>

                </div>
                <div class="row">
                    <div class="col-md-6">

                        <span>Name::&nbsp;{{$item->name}}</span> 
                        <br>
                        <span>Code::{{$item->item_code}}</span>
                        <br>
                        <span>Price::{{$item->price}}</span>
                        <span>Kyat::{{$item->kyat}}</span>
                        <span>Yway::{{$item->yway}}</span>
                        <span>Description::{{$item->description}}</span>
                        <span>Image::{{$item->image}}</span>
                    </div>
                </div>
            </div>

            

        </div>
    </main>
@endsection



