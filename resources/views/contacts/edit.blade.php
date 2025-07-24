@extends('Layouts.app')
@section('title') Edit @endsection
@section('content')


  <form method="POST" action="{{route('contacts.update' , $contact->id)}}" class="p-4 border rounded shadow" style="min-width: 300px;">
    @csrf
    @method("Put")
    <div class="mb-3">
      <label class="form-label">name :</label>
      <input name="name" value="{{$contact->name}}" type="name" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">email :</label>
      <input name="email" value="{{$contact->email}}" type="email" class="form-control">
    </div>

     <div class="mb-3">
      <label class="form-label">phone :</label>
      <input name="phone" value="{{$contact->phone}}" type="tel" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Message</label>
      <textarea name="message" class="form-control" rows="3">{{$contact->message}}</textarea>
    </div>

   

    <button class="btn btn-primary">Edit</button>
  </form>



@endsection