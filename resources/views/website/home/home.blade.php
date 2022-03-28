@extends('master.front.master')

@section('body')

    <section class="notice-section py-5">
        <div class="container">
            <h4 class="text-center text-success ">{{Session::get('message')}}</h4>
    <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card card-body rounded-0">
                    <h4 class="card-title">Notice Title Here</h4>
                    </hr>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut blanditiis deleniti ea eaque illo labore laborum nam natus necessitatibus nulla pariatur, quod ratione reiciendis reprehenderit repudiandae sapiente veniam veritatis, voluptatibus?</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus fuga laborum, necessitatibus nihil temporibus veritatis? Ad aspernatur autem magni odit perferendis repellat similique sit tenetur voluptas! Nulla, perspiciatis, porro.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card card-body">
                    <h4 class="card-title">Notice Title Here</h4>
                    </hr>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut blanditiis deleniti ea eaque illo labore laborum nam natus necessitatibus nulla pariatur, quod ratione reiciendis reprehenderit repudiandae sapiente veniam veritatis, voluptatibus?</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus fuga laborum, necessitatibus nihil temporibus veritatis? Ad aspernatur autem magni odit perferendis repellat similique sit tenetur voluptas! Nulla, perspiciatis, porro.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card card-body">
                    <h4 class="card-title">Notice Title Here</h4>
                    </hr>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut blanditiis deleniti ea eaque illo labore laborum nam natus necessitatibus nulla pariatur, quod ratione reiciendis reprehenderit repudiandae sapiente veniam veritatis, voluptatibus?</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto delectus fuga laborum, necessitatibus nihil temporibus veritatis? Ad aspernatur autem magni odit perferendis repellat similique sit tenetur voluptas! Nulla, perspiciatis, porro.</p>
                </div>
            </div>
        </div>
    </div>

        </div>
    </section>


    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($subjects as $subject)
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset($subject->image)}}" class="img-fluid rounded-start h-100" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>{{$subject->title}}</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                          {{$subject->teacher->name}}
                                        </figcaption>
                                    </figure>
                                   <div>{!! $subject->short_description !!}</div>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="{{route('course-detail', ['id'=>$subject->id])}}" class="btn btn-outline-success">Read More</a>
                                    <a href="" class="btn btn-outline-success float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-10">
                                <input type="text" placeholder="Enter your Email Here" class="form-control">
                            </div>
                            <div class="col-2">
                                <input type="submit" class="btn btn-outline-success w-100" value="Subscribe Now">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
