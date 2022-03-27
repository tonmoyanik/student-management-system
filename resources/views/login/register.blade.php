@extends('master.front.master')

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Registration Form</div>
                        <div class="card-body">
                            <form action="{{route('new-registration')}}" method="POST">
                                @csrf

                                <div class="row my-3">
                                    <label class="col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" value="" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Mobile Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mobile" value="" />
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <label class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" value="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" name="" value="Sign Up" />
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
