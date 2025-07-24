@extends('Layouts.app')
@section('title') Create @endsection
@section('content')


  <form method="POST" action="{{route('contacts.store')}}" class="p-4 border rounded shadow" style="min-width: 300px;">
    @csrf
    <div class="mb-3">
      <label class="form-label">Name :</label>
      <input name="name" type="name" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Email :</label>
      <input name="email" type="email" class="form-control" rows="3">
    </div>
    <div class="mb-3">
      <label class="form-label">Phone :</label>
      <input name="phone" type="tel" class="form-control" rows="3">
    </div>
    <div class="mb-3">
      <label class="form-label">Message :</label>
      <textarea name="message"  class="form-control" rows="3"></textarea>
    </div>
     

    <button class="btn btn-success w-100">Submit</button>
  </form>



@endsection