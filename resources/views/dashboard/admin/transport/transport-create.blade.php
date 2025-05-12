@extends('layouts.admin-dashboard')

@section('title', 'Транспорт')

@section('content')
<form action="{{ route('transport.store') }}" method="post">
  @csrf
    <div class="mb-3">
        <label for="Type of Vehicle" class="form-label">Type of Vehicle</label>
        <input type="text" class="form-control" name="transport_type" placeholder="Trolleybus or Bus">
        @error('transport_type')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="Bus_number / Trolley_number" class="form-label">Bus_number / Trolley_number</label>
        <input type="text" class="form-control" name="transport_number" placeholder="TB-202">
        @error('transport_number')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="Town" class="form-label">Town</label>
        <select class="form-control select2 select2-hidden-accessible" name="city_id" style="width: 100%;">
                @foreach ($city as $cities)
                  <option value="{{ $cities['id'] }}">{{ $cities['name'] }}</option>
                @endforeach
              </select>
        @error('city_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center justify-content-between p-3 rounded shadow-sm" role="alert" style="font-size: 0.9rem;">
            <div class="d-flex align-items-center">
                <i class="icon fa fa-check mr-2" style="font-size: 1.2rem;"></i>
                    <span>{{ session('success') }}</span>
            </div>
                <button type="button" class="btn-close ms-3" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
  <button type="submit" class="btn btn-primary">Create New Transport</button>
</form>
@endsection