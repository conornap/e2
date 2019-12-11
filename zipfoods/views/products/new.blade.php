@extends('templates.master')


@section('content')

@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<div id='product-new'>
    <h2>Create New Product</h2>

        <form method='POST' id='product-new' action='/products/new'>
        <h3>Enter Product Information Below</h3>

        <div class='form-group'>
            <label for='name'>Name</label>
            <input type='text' class="form-control" name='name' id='name' value='{{ $app->old("name") }}'>
        </div>

        <div class='form-group'>
            <label for='description'>Description</label>
            <textarea name='description' id='description' class='form-control'>{{ $app->old('description') }}</textarea>
        
        </div>

        <div class='form-group'>
            <label for='price'>Price</label>
            <input type='text' class="form-control" name='price' id='price' value='{{ $app->old("price") }}'>
        </div>

        <div class='form-group'>
            <label for='available'>Available</label>
            <input type='text' class="form-control" name='available' id='available' value='{{ $app->old("available") }}'>
        </div>

        <div class='form-group'>
            <label for='weight'>Weight</label>
            <input type='text' class="form-control" name='weight' id='weight' value='{{ $app->old("weight") }}'>
        </div>

        <div class='form-group'>
            <label for='perishable'>Perishable</label>
            <input type='text' class="form-control" name='perishable' id='perishable' value='{{ $app->old("perishable") }}'>
        </div>


        <button type='submit' class='btn btn-primary'>Enter Product</button>
    </form>

    

</div>
@endsection