@extends('layouts.admin-dashboard')

@section('content')
<form action="{{ route('city.update', $cities['id']) }}" method="post">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="Name of City" class="form-label">Name of City</label>
      <input type="text" class="form-control" name="name" value="{{ old('name', $cities->name) }}">
        @error('name')
          <div class="text-danger">{{ $message }}</div>
        @enderror
  </div>
  @if(session('success'))
    <div class="alert alert-success d-flex align-items-center justify-content-between p-3 rounded shadow-sm" role="alert" style="font-size: 0.9rem;">
        <div class="d-flex align-items-center">
            <i class="icon fa fa-check mr-2" style="font-size: 1.2rem;"></i>
            <span>{{ session('success') }}</span>
        </div>
        <button type="button" class="close btn btn-sm ml-3" data-dismiss="alert" aria-label="Close" style="font-size: 1rem; line-height: 1;">
            &times;
        </button>
    </div>
  @endif
  <button type="submit" class="btn btn-primary">Modify City</button>
</form>
@endsection