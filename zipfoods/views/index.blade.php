@extends('templates.master')

@section('title')
    {{ $app->config('app.name') }}
@endsection

@section('content')
    
<p>
{{ $app->config('app.name') }} is your one-stop-shop for convenient online grocery shopping in the greater Boston area.
</p>

<p>
    <a href='/products'>Check out our selection of products...</a>
</p>

@endsection