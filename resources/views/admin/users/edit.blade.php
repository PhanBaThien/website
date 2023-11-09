@extends('layouts.admin')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-20 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>
                            Edit Customer
                            <a href="{{ url('admin/users')}}" class="btn btn-primary text-white float-right">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('success')}}
                            </div>
                        @endif

                        <form action="{{ url('admin/users/update')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class="col-md-6 mb-3">
                                    <Label>ID</Label>
                                    <input type="text" name="id" class="form-control" placeholder="Enter data" value="{{$data->id}}">
                                    @error('name')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <Label>Name</Label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter data" value="{{$data->name}}">
                                    @error('name')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <Label>email</Label>
                                    <input type="text" name="email" class="form-control" placeholder="Enter data" value="{{$data->email}}">
                                    @error('name')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <Label>Role</Label>
                                    <input type="text" name="role" class="form-control" placeholder="Enter data" value="{{$data->role}}">
                                    @error('name')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>





                                <div class="col-md-12 mb-3">
                                    <button type="submit" class="btn btn-primary float-end">Update</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
