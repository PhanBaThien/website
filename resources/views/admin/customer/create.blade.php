@extends('layouts.admin')

@section('content')
<div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-20 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>
                            Add Customer
                            <a href="{{ url('admin/customer')}}" class="btn btn-primary text-white float-right">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('success')}}
                            </div>
                        @endif

                        <form action="{{ url('admin/customer/save')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class="col-md-6 mb-3">
                                    <Label>User Name</Label>
                                    <input type="text" name="username" class="form-control" placeholder="Enter data">
                                    @error('id')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <Label>Password</Label>
                                    <input type="text" name="password" class="form-control" placeholder="Enter data">
                                    @error('name')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <Label>Full Name</Label>
                                    <input type="text" name="fullname" class="form-control" placeholder="Enter data">
                                    @error('name')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <Label>Address</Label>
                                    <input type="text" name="address" class="form-control" placeholder="Enter data">
                                    @error('name')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <Label>Phone</Label>
                                    <input type="text" name="phone" class="form-control" placeholder="Enter data">
                                    @error('name')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <Label>Email</Label>
                                    <input type="text" name="email" class="form-control" placeholder="Enter data">
                                    @error('name')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <button type="submit" class="btn btn-primary float-end">Save</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection