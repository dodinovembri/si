@extends('layouts.dashboard')

@section('content')

      <div class="page-content">

        <nav class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Register New User</li>
          </ol>
        </nav>

        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Form Registration</h4>                
                <form class="cmxform" id="signupForm" method="POST" action="{{ url('/auth/register') }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <fieldset>
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input id="name" class="form-control" name="name" type="text">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input id="email" class="form-control" name="email" type="email">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input id="password" class="form-control" name="password" type="password">
                    </div>
                    <div class="form-group">
                      <label for="confirm_password">Confirm password</label>
                      <input id="confirm_password" class="form-control" name="confirm_password" type="password">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Submit">
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection      