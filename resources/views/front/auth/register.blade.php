@extends('front.auth.master')

@section('content')
<div class="row align-items-center h-100">
        <form class="col-lg-6 col-md-8 col-10 mx-auto" method="POST" action="{{ route('register') }}">
          @csrf
          <div class="mx-auto text-center my-4">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
              <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                  <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                  <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
              </svg>
            </a>
            <h2 class="my-3">Register</h2>
          </div>
          <div class="form-group">
            <label for="inputEmail4">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4">
            @error('email')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="firstname">Name</label>
              <input type="text" name="name" id="firstname" class="form-control">
              @error('name')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            
          </div>
          <hr class="my-4">
          <div class="row mb-4">
            <div class="col-md-6">
              <div class="form-group">
                <label for="inputPassword5">Password</label>
                <input name="password" type="password" class="form-control" id="inputPassword5">
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
             
            </div>
            <div class="col-md-6">
              <p class="mb-2">Password requirements</p>
              <p class="small text-muted mb-2"> To create a new password, you have to meet all of the following requirements: </p>
              <ul class="small text-muted pl-4 mb-0">
                <li> Minimum 8 character </li>
                <li>At least one special character</li>
                <li>At least one number</li>
                <li>Can’t be the same as a previous password </li>
              </ul>
            </div>
          </div>
          <button type="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
        </form>
      </div>
@endsection