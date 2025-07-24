@extends('layouts.app')
@section('title') schow @endsection
@section('content')
<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            Contact Info
        </div>
        <div class="card-body">
            <h5 class="card-title">name : {{$contact['name']}}</h5>
            <p class="card-text">Phone: {{$contact['phone']}}</p>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
           Message
        </div>
        <div class="card-body">
            <p class="card-text">Email: {{$contact['email']}}</p>
            <p class="card-text">Message : {{$contact['message']}}</p>
        </div>
        <div></div>
    </div>
</div>
</div>
</html>
@endsection