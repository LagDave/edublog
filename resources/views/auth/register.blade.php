@extends('layouts.app')

@section('page_specific_stylesheets')
    <link rel="stylesheet" href="{{asset('css/auth.css')}}">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto">
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{$error}}
                            </div>
                            @endforeach
                        @endif
                        <h3 class="login-heading mb-4">Create a Free Account!</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-label-group">
                                <input name='first_name' type="text" id="first_name" class="form-control" placeholder="First Name" required>
                                <label for="first_name">First Name</label>
                            </div>

                            <div class="form-label-group">
                                <input name='last_name' type="text" id="last_name" class="form-control" placeholder="Last Name" required>
                                <label for="last_name">Last Name</label>
                            </div>

                            <div class="form-label-group">
                                <input name='username' type="text" id="username" class="form-control" placeholder="Username" required>
                                <label for="username">Username</label>
                            </div>

                            <div class="form-label-group">
                                <input name='email' type="email" id="email" class="form-control" placeholder="Email">
                                <label for="email">Email</label>
                                @if($errors->has('email'))
                                    <p class='mb-0 text-center text-danger'>
                                        <small class='text-muted '>{{$errors->first('email')}}</small>
                                    </p>
                                @endif
                            </div>

                            <div class="form-label-group">
                                <input name='phone_number' type="text" id="phone_number" class="form-control" placeholder="Phone Number">
                                <label for="phone_number">Phone Number</label>
                            </div>

                            <div class="form-label-group">
                                <input name='password' type="password" id="password" class="form-control" placeholder="Password" required>
                                <label for="password">Password</label>
                            </div>

                            <div class="form-label-group">
                                <input name='password_confirmation' type="password" id="password-confirm" class="form-control" placeholder="Confirm Password" required>
                                <label for="password-confirm">Confirm Password</label>
                            </div>

                            <button class="btn btn-secondary w-100" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                Register as a Teacher
                            </button>
                            <br>
                            <div class="collapse" id="collapseExample">
                                <div style='border:none;' class="shadow card card-body mt-3 mb-2">
                                    <div class="form-label-group">
                                        <input name='teacher_code' type="password" id="teacher_code" class="form-control" placeholder="Teacher Code" >
                                        <label for="teacher_code">Teacher Code</label>
                                    </div>
                                </div>
                            </div>

                            <button class="mt-3 btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Register</button>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection