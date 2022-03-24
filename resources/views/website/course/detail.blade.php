@extends('master.front.master')

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="{{asset($subject->image)}}" alt="" class="w-200 h-100" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">

                        <h1>{{$subject->title}}</h1>
                        <p>Course Fee: {{$subject->fee}} Tk.</p>
                        <a href="{{route('enroll-now',['id'=>$subject->id])}}" class="btn btn-success mx-auto {{$check == true ? 'disabled btn-danger' : ''}}">{{$check == true ? 'Already Enrolled' : 'Enroll Now'}}</a>
                        <hr/>
                        <h2>Trainer Name: {{$subject->teacher->name}}</h2>
                        <img src="{{asset($subject->teacher->image)}}" alt="" class="w-50 h-100" />

                        <hr/>
                        <div>{!! $subject->short_description !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body">
                        <h1>Course Module Details</h1>
                        <hr/>
                       <div>{!! $subject->long_description !!}</div>
                        <a href="" class="btn btn-outline-success w-25 mx-auto">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
