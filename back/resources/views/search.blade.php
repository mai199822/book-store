@extends('layouts.home')

@section('content')

<h1> result for {{$name}} </h1>


<div class="container-fluid text-center" id="new">
    <div class="row">
    @foreach($products as $product)
        <div class="col-sm-6 col-md-3 col-lg-3">
            <a href="{{route('product.details', $product->id)}}">
                <div class="book-block">
                    <div class="tag-side"><img src="{{asset('img/tag.png')}}"></div>
                    <img class="book block-center img-responsive" style="height: 300px; width:200px" src="{{asset('storage/' . $product->image)}}">
                    <hr>
                    {{$product->name}} <br>
                    $ {{$product->price}} &nbsp
                </div>
            </a>
        </div>
        @endforeach
    </div>
    
</div>

@endsection