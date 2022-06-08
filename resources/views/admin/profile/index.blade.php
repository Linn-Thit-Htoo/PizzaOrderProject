@extends('admin.layout.app')

@section('content')
    <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row mt-4">
          <div class="col-8 offset-3 mt-5">
            <div class="col-md-9">
              <div class="card">
                @if (Session::has('updateSuccess'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('updateSuccess') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                <div class="card-header p-2">
                  <legend class="text-center">User Profile</legend>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                      <form class="form-horizontal" method="POST" action="">
                        @csrf
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Name" name="name" value="{{ old('name',$profileShow->name )}}">
                            @if ($errors->has('name'))
                            <p class="text-danger">{{ $errors->first('name') }}</p>
                              
                            @endif
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" placeholder="Email" name="email" value="{{ old('email',$profileShow->email )}}">
                            @if ($errors->has('email'))
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                              
                            @endif
                          </div>
                        </div>
                        {{-- <div class="form-group row">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                          <div class="col-sm-10">
                            <input name="password" type="password" class="form-control" placeholder="Password" value="{{ old('password',$profileShow->password )}}">
                          </div>
                        </div> --}}
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Phone</label>
                          <div class="col-sm-10">
                            <input type="number" class="form-control" placeholder="Phone" name="phone" value="{{ old('phone',$profileShow->phone )}}">
                            @if ($errors->has('phone'))
                            <p class="text-danger">{{ $errors->first('phone') }}</p>
                              
                            @endif
                          </div>
                        </div>
                        <div class="form-group row">
                          <label  class="col-sm-2 col-form-label">Address</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control"  placeholder="address" name="address" value="{{ old('address',$profileShow->address )}}">
                            @if ($errors->has('address'))
                            <p class="text-danger">{{ $errors->first('address') }}</p>
                              
                            @endif
                          </div>
                        </div>
                      </form>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <a href="{{ route('userChangePasswordPage') }}">Change Password</a>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                          <input type="submit" value="Update" class="btn bg-dark text-white float-end">
                          </div>
                        </div>
                    
                      
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
  </div>
@endsection