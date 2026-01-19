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
                    <li class="breadcrumb-item active" aria-current="page">Accounts List</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <button type="button" class="btn btn-primary btn-sm fs-15" data-bs-toggle="modal" data-bs-target="" onclick="window.open('{{route('account-open.index')}}','_top');"><i class="bi bi-plus-circle"></i> Create</button>

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
                            <th>Accounts No</th>
                            <th>Account Name</th>
                            {{-- <th>Member ID</th> --}}
                            <th>Image</th>
                             <th>signature</th>
                            <th>Mobile</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $account_opens as $account_open )
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                {{-- <td>{{ @$account_open->document_no ?? ''}}</td> --}}
                                <td>
                                   
                                </td>
                                <td>
                                    
                                </td>
                                <td></td>
                                <td>
                                </td>
                                <td class="d-flex gap-1 justify-content-center">
                                  
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                   
                </table>
            </div>
        </div>
    </div>
@endsection