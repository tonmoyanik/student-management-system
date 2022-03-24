@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Manage Teacher</h4>
                    <p class="text-center text-success">{{ Session::get('message') }}</p>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover mb-0">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th width="5%">Image</th>
                                <th>Full Name</th>
                                <th>Code</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teachers as $teacher)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td><img src="{{ asset($teacher->image) }}" alt="{{ $teacher->name }}" width="100%"></td>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->code }}</td>
                                    <td>{{ $teacher->email }}</td>
                                    <td>{{ $teacher->mobile }}</td>
                                    <td>{{ $teacher->address }}</td>
                                    @if($teacher->status == 1)
                                        <td class="badge rounded-pill bg-success text-white">Active</td>
                                    @else
                                        <td class="badge rounded-pill bg-danger text-white">Inactive</td>
                                    @endif
                                    <td>
                                        <a href="" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
