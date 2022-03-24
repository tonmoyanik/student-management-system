@extends('master.teacher.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Manage Approved Course</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover mb-0">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Subject Title</th>
                                <th>Subject Code</th>
                                <th>Subject Fee</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subjects as $subject)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$subject->title}}</td>
                                    <td>{{$subject->code}}</td>
                                    <td>{{$subject->fee}}</td>
                                    @if($subject->status == 1)
                                        <td class="badge rounded-pill bg-success text-white">Active</td>
                                    @else
                                        <td class="badge rounded-pill bg-danger text-white">Inactive</td>
                                    @endif
                                    <td>
                                        <a href="{{route('enrolled-student', ['id'=> $subject->id])}}" class="btn btn-outline-success btn-sm">
                                            <i class="fa fa-list"></i>
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
@endsection
