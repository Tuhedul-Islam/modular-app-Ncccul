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
                <li class="breadcrumb-item active" aria-current="page">Financial Year</li>
            </ol>
        </nav>
    </div>

    <div class="ms-auto">
        <button type="button" class="btn btn-primary btn-sm fs-15" data-bs-toggle="modal"
            data-bs-target="#exampleLargeModalCreate">
            <i class="bi bi-plus-circle"></i> Create
        </button>

        {{-- CREATE FORM --}}
        <form method="POST" action="{{ route('admin.administrative.financial-year.store') }}">
            @csrf
            <div class="modal fade large_modal" id="exampleLargeModalCreate" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <i class="bi bi-plus-circle"></i> Create Financial Year
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">
                            <div class="card shadow-none">
                                <div class="card-body">

                                    <div class="col-12 mb-3">
                                        <x-common.input
                                            label="Priority"
                                            name="priority"
                                            type="number"
                                            :value="$max_priority"
                                            :required="true"
                                            :showSymbol="false"
                                            class="form-control form-control-sm"
                                        />
                                    </div>

                                    <div class="col-12 mb-3">
                                        <x-common.input
                                            label="Name"
                                            name="name"
                                            placeholder="Text"
                                            :required="true"
                                            :showSymbol="true"
                                            class="form-control form-control-sm"
                                        />
                                    </div>

                                    <div class="col-12 mb-3">
                                        <x-common.input
                                            label="Start Date"
                                            name="start_date"
                                            type="text"
                                            :required="true"
                                            :showSymbol="true"
                                            class="form-control form-control-sm datepicker"
                                        />
                                    </div>

                                    <div class="col-12 mb-3">
                                        <x-common.input
                                            label="End Date"
                                            name="end_date"
                                            type="text"
                                            :required="true"
                                            :showSymbol="true"
                                            class="form-control form-control-sm datepicker"
                                        />
                                    </div>

                                    <div class="col-12 mb-3">
                                        <x-common.select
                                            label="Is Current"
                                            name="is_current"
                                            :required="true"
                                            :showSymbol="false"
                                            :options="[
                                                '1' => 'Current',
                                                '0' => 'Closed'
                                            ]"
                                            value="0"
                                            class="single-select"
                                        />
                                    </div>

                                    <div class="col-12">
                                        <x-common.select
                                            label="Status"
                                            name="status"
                                            :required="true"
                                            :showSymbol="false"
                                            :options="[
                                                '1' => 'Active',
                                                '0' => 'Inactive'
                                            ]"
                                            value="1"
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
<!-- end breadcrumb -->

{{-- LIST TABLE --}}
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Priority</th>
                        <th>Name</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Current</th>
                        <th>Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($financialYears as $financialYear)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $financialYear->priority }}</td>
                        <td>{{ $financialYear->name }}</td>
                        <td>
                            {{ $financialYear->start_date }}
                        </td>
                        <td>{{ $financialYear->end_date }}</td>
                        <td>
                            {!! $financialYear->is_current
                                ? '<span class="badge bg-success">Current</span>'
                                : '<span class="badge bg-danger">Closed</span>' !!}
                        </td>
                        <td>
                            {!! $financialYear->status
                                ? '<span class="badge bg-success">Active</span>'
                                : '<span class="badge bg-danger">Inactive</span>' !!}
                        </td>

                        <td class="d-flex gap-1 justify-content-center">

                            {{-- EDIT FORM --}}
                            <form method="POST"
                                action="{{ route('admin.administrative.financial-year.update', $financialYear->id) }}">
                                @csrf
                                @method('PUT')

                                <div class="modal fade large_modal"
                                    id="exampleLargeModal{{ $loop->iteration }}" tabindex="-1">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    <i class="bi bi-pencil-square"></i> Edit Financial Year
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="card shadow-none">
                                                    <div class="card-body">

                                                        <div class="col-lg-12 mb-3">
                                                            <x-common.input
                                                                label="Priority"
                                                                name="priority"
                                                                type="number"
                                                                :value="$financialYear->priority"
                                                                :required="true"
                                                                :showSymbol="false"
                                                                class="form-control form-control-sm"
                                                            />
                                                        </div>
                                                        <div class="col-lg-12 mb-3">
                                                            <x-common.input
                                                                label="Name"
                                                                name="name"
                                                                :value="$financialYear->name"
                                                                :required="true"
                                                                :showSymbol="false"
                                                                class="form-control form-control-sm"
                                                            />
                                                        </div>
                                                        <div class="col-lg-12 mb-3">
                                                            <x-common.input
                                                                label="Start Date"
                                                                name="start_date"
                                                                type="text"
                                                                :value="optional($financialYear->start_date)->format('Y-m-d')"
                                                                :required="true"
                                                                :showSymbol="false"
                                                                class="form-control form-control-sm datepicker"
                                                            />
                                                        </div>

                                                        <div class="col-lg-12 mb-3">
                                                            <x-common.input
                                                                label="End Date"
                                                                name="end_date"
                                                                type="text"
                                                                :value="optional($financialYear->end_date)->format('Y-m-d')"
                                                                :required="true"
                                                                :showSymbol="false"
                                                                class="form-control form-control-sm datepicker"
                                                            />
                                                        </div>

                                                        <div class="col-lg-12 mb-3">
                                                            <x-common.select
                                                                label="Is Current"
                                                                name="is_current"
                                                                :options="['1'=>'Current','0'=>'Closed']"
                                                                value="{{ $financialYear->is_current }}"
                                                                :required="true"
                                                                class="single-select"
                                                            />
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <x-common.select
                                                                label="Status"
                                                                name="status"
                                                                :options="['1'=>'Active','0'=>'Inactive']"
                                                                value="{{ $financialYear->status }}"
                                                                :required="true"
                                                                class="single-select"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btn-sm fs-15" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary btn-sm fs-15">Update</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>

                            <button class="btn btn-primary fs-15 btn-sm ms-0" data-bs-toggle="modal" data-bs-target="#exampleLargeModal{{ $loop->iteration }}"><i class="bi bi-pencil-square"></i>
                            </button>

                            <a href="javascript:void(0)"
                                class="btn fs-15 btn-danger btn-sm ms-0"
                                onclick="deleteData('Financial Year','{{ route('admin.administrative.financial-year.destroy') }}',{{ $financialYear->id }})">
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
