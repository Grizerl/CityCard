@extends('layouts.admin-dashboard')

@section('title', 'Панель адміністратора')

@section('content')
    <div class="d-flex gap-4">
        <div class="card text-center text-white shadow rounded-4 p-4" style="width: 400px; background-color: #0d6efd; ">
            <div class="card-body">
                <h2 class="display-3 fw-bold mb-2">{{ $cities }}</h2>
                    <p class="fs-5 mb-0">Locations</p>
            </div>
        </div>
        <div class="card text-center text-white shadow rounded-4 p-4" style="width: 400px; background-color: #0d6efd; ">
            <div class="card-body">
                <h2 class="display-3 fw-bold mb-2">{{ $ticket }}</h2>
                    <p class="fs-5 mb-0">Ticket</p>
            </div>
        </div>
        <div class="card text-center text-white shadow rounded-4 p-4" style="width: 400px; background-color: #0d6efd; ">
            <div class="card-body">
                <h2 class="display-3 fw-bold mb-2">{{ $transport }}</h2>
                    <p class="fs-5 mb-0">Vehicles</p>
            </div>
        </div>
    </div>
@endsection