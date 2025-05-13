@extends('layouts.admin-dashboard')

@section('title', 'Транспорт')

@section('content')
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Vehicle Management</h3>
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
                                Transport Type
                            </th>
                            <th>
                               Transport Number
                            </th>
                            <th>
                               Town
                            </th>
                            <th style="width: 15%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transport as $transports)
                            <tr>
                                <td>
                                    {{ $transports->id }}
                                </td>
                                <td>
                                    {{ $transports->transport_type }}
                                </td>
                                <td class="project_progress">
                                    {{ $transports->transport_number }}
                                </td>
                                <td class="project_progress">
                                    {{ $transports->city->name }}
                                </td>
                                <td class="project-actions text-right d-flex">
                                    <a class="btn btn-info btn-sm" href="{{ route('transport.edit',$transports['id']) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <form action="{{ route('transport.destroy',$transports['id']) }}" method="post">
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
            {{ $transport->links('pagination::bootstrap-4') }}
        </div>
    </section>
@endsection