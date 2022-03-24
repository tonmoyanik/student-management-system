@extends('master.front.master')

@section('body')

   <section class="py-5">
       <div class="container">
           <div class="row">
               <div class="col-md-3">
                   <div class="card" style="width: 18rem;">
                       <div class="list-group list-group-flush">
                           <a class="list-group-item">My All Courses</a>
                           <a class="list-group-item">My Profile</a>
                           <a class="list-group-item">My Payment</a>
                       </div>
                   </div>
               </div>
               <div class="col-md-9">
                   <div class="card">
                       <div class="card-header">My Applied Course</div>
                       <div class="card-body">
                           <p class="text-success text-center">{{Session::get('message')}}</p>
                           <table class="table table-bordered table-hover">
                               <thead>
                               <tr>
                                   <th>#</th>
                                   <th>Course Title</th>
                                   <th>Trainer Name</th>
                                   <th>Course Fee</th>
                                   <th>Enroll Status</th>
                               </tr>
                               </thead>
                               <tbody>
                               @foreach($enrolls as $enroll)
                               <tr>
                                   <td>{{$loop->iteration}}</td>
                                   <td>{{$enroll->subject->title}}</td>
                                   <td>{{\App\Models\Teacher::find($enroll->subject->teacher_id)->name}}</td>
                                   <td>{{$enroll->subject->fee}}</td>
                                   <td>{{$enroll->enroll_status}}</td>
                               </tr>
                               @endforeach
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>

@endsection
