<section class="vh-100" style="background-color: #f4f5f7;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-9 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
              <div class="col-md-4 gradient-custom text-center text"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <h4>Edit Customer</h4>
                <a href="{{ url('admin/users')}}" class="btn btn-primary text-white float-right">BACK</a>
                <i class="far fa-edit mb-5"></i>
              </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                    @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('success')}}
                            </div>
                        @endif

                    <form action="{{ url('admin/users/update')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col">
  
                      <h6><strong>Name</strong></h6>
                      <input type="text" name="name" class="form-control" placeholder="Enter data" value="{{$data->name}}">
                      @error('name')
                      <div class="alert alert-danger" role="alert">
                          {{$message}}
                      </div>
                      @enderror
                    </div>

                    <div class="">
                      <h6><strong>Email</strong></h6>
                      <input type="text" name="email" class="form-control" placeholder="Enter data" value="{{$data->email}}">
                      @error('name')
                      <div class="alert alert-danger" role="alert">
                          {{$message}}
                      </div>
                      @enderror
                    </div>

                    <div class="">
                        <h6><strong>Phone</strong></h6>
                        <input type="text" name="phone" class="form-control" placeholder="Enter data" value="{{$data->phone}}">
                        @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                      </div>

                  </div>
                  
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <a type="submit" class="btn btn-outline-primary btn-floating">Update</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>