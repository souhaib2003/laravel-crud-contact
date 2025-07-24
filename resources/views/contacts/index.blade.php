@extends('layouts.app')
@section('title') Index @endsection
@section('content')
<div class="mt-5">
  <div class="text-center">
    <a href='{{ route("contacts.create") }}' class="btn btn-success">Create Contact</a>
  </div>

  <div class="text-center mt-3">
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Created At</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        @foreach($contacts as $contact)
        <tr>
          <td>{{ $contact->id }}</td>
          <td>{{ $contact->name }}</td>
          <td>{{ $contact->email }}</td>
          <td>{{ $contact->phone }}</td>
          <td>{{ $contact->created_at->format('y-m-d') }}</td>
          <td>
            <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info">View</a>
            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary">Edit</a>
            <form method="POST" action="{{ route('contacts.destroy', $contact->id) }}" style="display:inline;">
              @csrf
              @method('DELETE')
              <button onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
