@extends('master.front.master')

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <div class="list-group list-group-flush">
                            <a class="list-group-item">My All Courses</a>
                            <a href="{{route('student-profile')}}" class="list-group-item">My Profile</a>
                            <a href="{{route('change-password')}}" class="list-group-item">Change Password</a>
                            <a class="list-group-item">My Payment</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header text-center">My Profile Info</div>
                        <div class="card-body">
                            <p class="text-success text-center">{{Session::get('message')}}</p>
                            <form action="{{route('update-student-profile',['id'=>$student->id])}}" method="POST" enctype="multipart/form-data">
                           @csrf
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                   <img src="{{asset($student->image)}}" alt="{{$student->name}}" height="200" width="200" /><br/>
                                    <input type="file" class="form-control-file" name="image" accept="image/*">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name" value="{{$student->name}}" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email" value="{{$student->email}}" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="mobile" value="{{$student->mobile}}" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" name="btn" value="Update Information" />
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
