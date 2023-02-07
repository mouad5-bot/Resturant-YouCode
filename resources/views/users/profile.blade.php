@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card m-3">
                <div class="text-center"> <h1>  <b> My Profile </b> </h1> </div>

                    <form method="POST" action="">
                        @csrf

                        <div class="form-group m-3">
                          <label for="name">Name</label>
                          <input type="name" class="form-control" id="name">
                        </div>

                        <div class="form-group m-3">
                          <label for="email">Email address</label>
                          <input type="email" class="form-control" id="email">
                        </div>

                        <div class="form-group m-3">
                            <label for="pswd">Password</label>
                            <input type="password" class="form-control" id="pswd">
                          </div>

                          <div class="form-group m-3">
                            <label for="Cpswd">Comfirm Password</label>
                            <input type="Cpassword" class="form-control" id="Cpswd">
                          </div>
                        
                        <div class="m-3">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}



<div class="alert alert-success m-4 text-center" role="alert">
  <h3 > Welcome in you Profile! </h3> 
</div>



<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card m-3">
        <div class="card-body">
          <h2>
            Edit Profile
          </h2>
          <hr class="w-25%" />
          <br />
          <form action="route('users.edit', $user)" method="POST">
            {{-- {{ csrf_field() }} --}}
            @csrf
            {{ method_field('patch') }}

            <div class="row">
              <div class="col-md-6">
                <div class="mb-4">
                    <input type="hidden" name="id">
                    <label class="form-label">Your Name </label>
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="name"
                        value="{{ $user->name }}"
                    />
                </div>
                <div class="mb-4">
                    <label class="form-label" 
                        >password</label
                    >
                    <input
                        type="password"
                        class="form-control"
                        name="password"
                        id="password"
                    />
                </div>
              </div>

              <div class="col-md-6">
                <div class="mb-4 mr-2">
                    <label class="form-label" >Email </label>
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        id="email"
                        value="{{ $user->email }}"
                    />
                </div>
                <div class="mb-4">
                    <label class="form-label" 
                        >Conferm password</label
                    >
                    <input
                        type="password"
                        class="form-control"
                        name="conferm_password"
                        id="conferm-password"
                    />
                </div>    
              </div>
              <div>
                <button
                  type="submit"
                  id="save"
                  name="save_Changes"
                  class="btn btn-primary"
                >
                Save Changes
                </button>
              </div>  
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
