@extends('layouts.app')

@section('content')
<form action="{{ route('admin.login') }}" method="post">
  @csrf
  <div class="mb-3">
    <label for="User Access" class="form-label">User Access</label>
    <input type="text" class="form-control" name="name" placeholder="Your name">
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" placeholder="ХХХХХХХХХ">
    @error('password')
        <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Увійти</button>
</form>
@endsection