@extends('layouts.app')

@section('content')
<form action="{{ route('user.login') }}" method="post">
  @csrf
  <div class="mb-3">
    <label for="Card Code" class="form-label">Card Code</label>
    <input type="text" class="form-control" name="card_number" placeholder="0ХХХХ-ХХХХX-X">
    @error('card_number')
        <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="Contact Number" class="form-label">Contact Number</label>
    <input type="tel" class="form-control" name="phone" placeholder="+380 ХХ ХХХХХХХ">
    @error('phone')
        <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Увійти</button>
</form>
@endsection