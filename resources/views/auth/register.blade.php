@extends('auth.layouts.app')
@section('title', 'Register')
@section('content')
<div class="vh-100 d-flex">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 ">

        <div class=" d-flex justify-content-center align-items-center h-100">

            <div class="col-md-12">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <h2 class="display-5 d-inline mr-2">Register</h2>
                    <span class="lead">to become a part of our community!</span>
                    <div class="form-group floating-label-form-group controls">
                        <label for="Name">Name: </label>
                        <input type="text" class="form-control  @error('name') is-invalid @enderror" id='Name' name="name" placeholder="Name" value="{{ old('name') }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group floating-label-form-group controls">
                        <label for="email">Email: </label>
                        <input type="text" class="form-control  @error('email') is-invalid @enderror" id='email' name="email" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                        <span class=" invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group floating-label-form-group controls">
                        <label for="username">Username: </label>
                        <input type="text" class="form-control  @error('username') is-invalid @enderror" id='username' name="username" placeholder="Username" value="{{ old('username') }}">
                        @error('username')
                        <span class=" invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group floating-label-form-group controls">
                        <label for="password">Password: </label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id='password' name="password" placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group floating-label-form-group controls">
                        <label for="password">Confirm Password: </label>
                        <input id="password-confirm" type="password" class="form-control @error('confirm_password') is-invalid @enderror"" name=" password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        @error('confirm_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mt-5">
                        <button type="submit" class="btn text-white btn-block bg-primary">Login</button>
                        <a href="{{route('login')}}" class="btn text-white btn-block bg-dark">Login instead</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="col-lg-8  col-md-8 bg-primary d-md-flex d-sm-none d-none">
        <div class="content text-white">
            <span>Welcome to</span>
            <h1 class="display-1">Foruminator</h1>
        </div>
    </div>
</div>
@endsection

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection --}}
