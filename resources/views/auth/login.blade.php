@extends('layouts.app')

@section('content')
<div class="banner-banner text-center">
              <!-- <img src="img/delivery-banner.jpg" alt="" class="img-responsive"> -->
              <div class="banner-link">
              <h1 class="text-white">LOG IN</h1>
              <p class="text-white">Home | Log In</p>
              </div>
          </div>

          <a href="https://api.whatsapp.com/send?phone=2348167354743&text=Digital%20Roah%20Services" class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
            </a>

          <div class="selform_area">
            <br><br>
            <h2 class="text-center">Log In</h2>
            <div class="col-md-6 offset-md-3">
                <br><br>
                <h3 class="text-center">Log In to your dashboard</h3>
                <form method="POST" action="{{ route('login') }}">
                @csrf
                <br>
                 <div class="col-md-11">
                 <div class="form-group">
                   <label for="name/email">Email</label>
                   <input type="text" id="name/email" class="form-control  @error('email') is-invalid @enderror"   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                   @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                 <div class="form-group">
                  <label for="password">Password</label>
                  <input data-toggle="password" type="password" class="form-control  @error('password') is-invalid @enderror"   id="password" name="password" required autocomplete="current-password">

                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input"   name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <br>
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="log-links">Forgotten Password ?</a>
                @endif

                <br><br>
                <button type="submit" class="btn btn-sign  ">Log In</button>
                <br><br>
                <p>Have you registered with Kaedoors? If yes  then  <a href="/register" class="log-links">Sign Up</a>.</p>
                <br>
                </div>
              </form>
              </div>

           </div>

@endsection
