@extends('admin.layouts.app')
@section('content')

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Administrative</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item">
                    <a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Marital Status</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <button type="button" class="btn btn-primary btn-sm fs-15" data-bs-toggle="modal" data-bs-target="#createMaritalStatusModal">
            <i class="bi bi-plus-circle"></i> Create
        </button>

        {{-- Create Modal --}}
        <form method="POST" action="{{ route('admin.administrative.marital-status.store') }}">
            @csrf
            <div class="modal fade large_modal" id="createMaritalStatusModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <i class="bi bi-plus-circle"></i> Create Marital Status
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">
                            <div class="card shadow-none">
                                <div class="card-body p-0">
                                    <div class="col-12 mb-3">
                                        <x-common.input
                                            label="Priority"
                                            name="priority"
                                            type="number"
                                            :value="$max_priority"
                                            :required="true"
                                            class="form-control form-control-sm"
                                        />
                                    </div>

                                    <div class="col-12 mb-3">
                                        <x-common.input
                                            label="Marital Status"
                                            name="name"
                                            placeholder="Text"
                                            :required="true"
                                            class="form-control form-control-sm user_name"
                                        />
                                    </div>

                                    <div class="col-12">
                                        <x-common.select
                                            label="Status"
                                            name="status"
                                            :options="['1'=>'Active','0'=>'Inactive']"
                                            value="1"
                                            :required="true"
                                            class="single-select"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-sm fs-15" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-sm fs-15">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Priority</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($marital_statuses as $marital_status)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $marital_status->priority ?? 1 }}</td>
                            <td>{{ $marital_status->name ?? '' }}</td>
                            <td>
                                {!! $marital_status->status == 1
                                    ? '<span class="badge bg-success">Active</span>'
                                    : '<span class="badge bg-danger">Inactive</span>' !!}
                            </td>
                            <td class="d-flex gap-1 justify-content-center">

                                {{-- Edit --}}
                                <form method="POST" action="{{ route('admin.administrative.marital-status.update', $marital_status->id) }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="modal fade large_modal" id="editMaritalStatusModal{{ $loop->iteration }}" tabindex="-1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">
                                                        <i class="bi bi-pencil-square"></i> Edit Marital Status
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="card shadow-none">
                                                        <div class="card-body">
                                                            <div class="p-3 rounded">
                                                                <div class="col-12 mb-3">
                                                                    <x-common.input
                                                                        label="Priority"
                                                                        name="priority"
                                                                        type="number"
                                                                        :required="true"
                                                                        :value="$marital_status->priority"
                                                                        class="form-control form-control-sm"
                                                                    />
                                                                </div>

                                                                <div class="col-12 mb-3">
                                                                    <x-common.input
                                                                        label="Marital Status"
                                                                        name="name"
                                                                        :required="true"
                                                                        :value="$marital_status->name"
                                                                        class="form-control form-control-sm user_name"
                                                                    />
                                                                </div>

                                                                <div class="col-12">
                                                                    <x-common.select
                                                                        label="Status"
                                                                        name="status"
                                                                        :required="true"
                                                                        :options="['1'=>'Active','0'=>'Inactive']"
                                                                        :value="$marital_status->status"
                                                                        class="single-select"
                                                                    />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger btn-sm fs-15" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary btn-sm fs-15">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <button type="button" class="btn btn-primary fs-15 btn-sm"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editMaritalStatusModal{{ $loop->iteration }}">
                                    <i class="bi bi-pencil-square"></i>
                                </button>

                                {{-- Delete --}}
                                <a href="javascript:void(0)"
                                   class="btn btn-danger fs-15 btn-sm"
                                   onclick="deleteData('Marital Status','{{ route('admin.administrative.marital-status.destroy') }}', {{ $marital_status->id }});">
                                    <i class="bi bi-trash"></i>
                                </a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
