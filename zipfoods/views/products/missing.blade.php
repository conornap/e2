@extends('templates.master')

@section('title')
  Product {{$id}} not found
@endsection

@section('content')
    <h2>Product {{ $id }} not found</h2>
      <div>
        Uh oh - we were not able to find the product you were looking for.
      </div>
    <a href='/products'>&larr; Check out our other products...</a>

  

@endsection