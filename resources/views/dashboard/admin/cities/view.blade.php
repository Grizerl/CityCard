@extends('layouts.admin-dashboard')

@section('title', 'Міста')

@section('content')
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">City Management</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 15%">
                                #
                            </th>
                            <th style="width: 30%">
                                Name of City
                            </th>
                            <th>
                                Creation Date
                            </th>
                            <th style="width: 15%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cities as $city)
                            <tr>
                                <td>
                                    {{ $city->id }}
                                </td>
                                <td>
                                    {{ $city->name }}
                                </td>
                                <td class="project_progress">
                                    {{ $city->created_at }}
                                </td>
                                <td class="project-actions text-right d-flex">
                                    <a class="btn btn-info btn-sm" href="{{ route('city.edit',$city['id']) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <form action="{{ route('city.destroy',$city['id']) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                            <i class="fas fa-trash"></i>
                                            Remove
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
         <div class="mt-2">
            {{ $cities->links('pagination::bootstrap-4') }}
         </div>
    </section>
@endsection