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
                        <div class="card-header text-center">Change Password</div>
                        <div class="card-body">
                            <p class="text-success text-center">{{Session::get('message')}}</p>
                            <form action="{{route('update-student-password',['id'=> $id])}}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Old Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="old_password" value="" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">New Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" value="" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" name="btn" value="Update Password Info" />
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
