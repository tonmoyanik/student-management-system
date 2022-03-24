@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Update Teacher Form</h4>
                    <p class="text-center text-success">{{ Session::get('message') }}</p>
                    <form action="{{ route('update-teacher', ['id' => $teacher->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label class="col-sm-3 col-form-label">Full name</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ $teacher->name }}" name="name" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" value="{{ $teacher->email }}" name="email" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-sm-3 col-form-label">Mobile</label>
                            <div class="col-sm-9">
                                <input type="number" value="{{ $teacher->mobile }}" name="mobile" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <textarea name="address" class="form-control">{{ $teacher->address }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control-file" accept="image/*"/>
                                <img src="{{asset($teacher->image)}}" alt="" width="100" height="100" class="m-2">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                <label><input type="radio" {{$teacher->status ==1 ? 'checked' : ''}} name="status" value="1"/>Active</label>
                                <label><input type="radio" {{$teacher->status ==0 ? 'checked' : ''}} name="status" value="0"/>Inactive</label>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update Teacher Info</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
