@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="card-header">{{ __('User Profile') }}</div>                 
<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="images\profile_icon.png"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
              <h4>{{Auth::user()->name}}</h4>
              <p>VIET MEMBER</p>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col">

                    <h6><strong>Email</strong></h6>
                    <p class="text">{{Auth::user()->email}}</p>
                  </div>
                  <div class="">
                    <h6><strong>Telephone</strong></h6>
                    <p class="text">{{Auth::user()->phone}}</p>
                  </div>
                </div>
                
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <a type="button" class="btn btn-outline-primary btn-floating" href="{{url('edit')}}">Edit</a>
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
            </div>
        </div>
    </div>
</div>

@endsection

