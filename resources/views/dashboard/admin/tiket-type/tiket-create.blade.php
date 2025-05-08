@extends('layouts.admin-dashboard')

@section('content')
<form action="{{ route('tiket.store') }}" method="post">
  @csrf
    <div class="mb-3">
        <label for="Ticket Type" class="form-label">Ticket Type</label>
            <select class="form-control select2 select2-hidden-accessible" name="name" style="width: 100%;">
                <option value="preferential">preferential</option>
                <option value="pupillary">pupillary</option>
                <option value="regular">regular</option>
            </select>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
    </div>
    <div class="mb-3">
        <label for="Cost" class="form-label">Cost</label>
            <input type="text" class="form-control" name="price">
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
    </div>
    <div class="mb-3">
        <label for="Transit Id " class="form-label">Transit Id</label>
            <select class="form-control select2 select2-hidden-accessible" name="transport_id" style="width: 100%;">
                @foreach ($transport as $transports)
                  <option value="{{ $transports['id'] }}">{{ $transports['transport_number']}}</option>
                @endforeach
            </select>
            @error('transport_id')
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
  <button type="submit" class="btn btn-primary">New Ticket Entry</button>
</form>
@endsection