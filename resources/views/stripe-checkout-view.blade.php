@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <br>
            <br>
            {{$checkout->button('Buy')}}
        </div>
    </div>
</div>
@endsection