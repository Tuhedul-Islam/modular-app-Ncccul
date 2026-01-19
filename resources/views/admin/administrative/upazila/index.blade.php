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
                    <li class="breadcrumb-item active" aria-current="page">Upazila</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <button type="button" class="btn btn-primary btn-sm fs-15" data-bs-toggle="modal" data-bs-target="#exampleLargeModalCreate"><i class="bi bi-plus-circle"></i> Create</button>
            <form class="" method="POST" action="{{route('admin.administrative.upazila.store')}}">
                <!-- Modal -->
                @csrf
                <div class="modal fade large_modal" id="exampleLargeModalCreate" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><i class="bi bi-plus-circle"></i> Create Upazila</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="card shadow-none">
                                    <div class="card-body p-0">
                                        <div class="col-12 mb-3">
                                           
                                            <x-common.input
                                                label="Priority"
                                                placeholder="Number"
                                                name="priority"
                                                :showSymbol="false" 
                                                :required="true"
                                                :value="$max_priority"
                                                class="form-control form-control-sm"
                                                type="number"
                                            />
                                        </div>
                                        
                                        <div class="col-12 mb-3">
                                           
                                            <x-common.input
                                                label="Name"
                                                placeholder="Text"
                                                name="name"
                                                :showSymbol="false" 
                                                :required="true"
                                                class="form-control form-control-sm user_name"
                                               
                                            />
                                        </div>
                                        <div class="col-12 mb-3">
                                            <x-common.select
                                                label="District"
                                                name="district_id"
                                                :required="true"
                                                :showSymbol="false" 
                                                :options="$district->pluck('name', 'id')->toArray()"
                                                class="single-select"
                                                value="1"
                                            />
                                        </div>
                                        {{-- <div class="col-12 mb-3">
                                            <x-common.select
                                                label="Division"
                                                name="division_id"
                                                :required="true"
                                                :showSymbol="false" 
                                                :options="$divisions->pluck('name', 'id')->toArray()"
                                                class="single-select"
                                                value="1"
                                            />
                                        </div> --}}
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
                                <button type="submit" class="btn btn-primary btn-sm fs-15">Save </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--end breadcrumb-->


    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Priority</th>
                            <th>Name</th>
                            <th>District</th>
                            {{-- <th>Division</th> --}}
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $upazilas as $upazila )
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $upazila->priority ?? 1 }}</td>
                                <td>{{{$upazila->name ?? ''}}}</td>
                                <td>{{$upazila->district->name ?? ''}}</td>
                                {{-- <td>{{ $upazila->district->division->name ?? '' }}</td> --}}
                                <td>{!! $upazila->status == 1
                                   ? '<span class="badge bg-success">Active</span>'
                                   : '<span class="badge bg-danger">Inactive</span>'
                                !!}
                                </td>
                                 <td class="d-flex gap-1 justify-content-center">
                                   

                                    <form method="POST" action="{{ route('admin.administrative.upazila.update', $upazila->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal fade large_modal" id="exampleLargeModal{{ $loop->iteration }}" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"><i class="bi bi-pencil-square"></i> Edit Upazila</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="card shadow-none">
                                                            <div class="card-body">
                                                                <div class="p-3 rounded">
                                                                    <div class="col-12 mb-3">
                                                                        <x-common.input
                                                                            label="Priority"
                                                                            placeholder="Number"
                                                                            name="priority"
                                                                            :showSymbol="false" 
                                                                            :required="true"
                                                                            :value="$upazila->priority ?? ''"
                                                                            class="form-control form-control-sm"
                                                                            type="number"
                                                                            :min="1"
                                                                        />
                                                                    </div>
                                                                    <div class="col-12 mb-3">
                                                                        <x-common.input
                                                                            label="Name"
                                                                            placeholder="Text"
                                                                            name="name"
                                                                            :showSymbol="false" 
                                                                            :required="true"
                                                                            :value="$division->name ?? ''"
                                                                            class="form-control form-control-sm user_name fs-16"
                                                                            :value="$upazila->name ?? ''"
                                                                            
                                                                        />
                                                                    </div>
                                                                    <div class="col-12 mb-3">
                                                                        <x-common.select
                                                                            label="District"
                                                                            name="district_id"
                                                                            :required="true"
                                                                            :showSymbol="false" 
                                                                            :options="$district->pluck('name', 'id')->toArray()"
                                                                            class="single-select"
                                                                            value="$upazila->$district->name"
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
                                                                            class="single-select"
                                                                            value="1"
                                                                        />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger btn-sm fs-15" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary btn-sm fs-15">Save </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="btn-group">
                                         <button type="button" class="btn btn-primary fs-15 btn-sm" data-bs-toggle="modal" data-bs-target="#exampleLargeModal{{ $loop->iteration }}"><i class="bi bi-pencil-square ms-0"></i></button>
                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-danger fs-15  btn-sm" onclick="deleteData('Upazila','{{ route('admin.administrative.upazila.destroy') }}', {{$upazila->id}});">
                                        <i class="bi bi-trash ms-0"></i>
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




