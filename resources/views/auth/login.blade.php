<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ShoppingFan</title>
  <!-- ---- Bootstrap css--- -->
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <!-- ---------- default css --------- -->
  <link rel="stylesheet" href="../../css/login.css" />

</head>

<body>

<div class="main-wrapper">
    <div class="main-card">
        <div class="left-side-wrapper">
            <div class="overlay"></div>

            <div class="learn-more-wrapper">
                <div class="software-eng-text">
                    <span>
                        Vamos quién da más 

                    </span>
                        
                    </div>
            </div>

            <div class="navigation-links">
                    
                    
                <a class="nav-link" href="{{ route('index') }}">{{ __('Inicio') }}</a>
            </div>
    </div>

    <div class="right-side-wrapper">
        <div class="inner-wrapper">
          <div class="header-wrapper">
            <span>Iniciar Sesión</span>
          </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="input-wrapper form_group">
                            <label>{{ __('Email Address') }}</label>

                            <div class="input">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-wrapper">
                            <label for="password">{{ __('Password') }}</label>

                            <div class="input">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--<div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>-->

                       
                            <div class="action-wrapper form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a  href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
        
                    </form>

                    <div class="sign-up-wrapper">
                        <span>Don't have an account? <a href="#">Sign up!</a></span>
                      </div>
          
                      <div class="horizontal-separator"></div>


                </div>
            </div>
        </div>
    </div>
</div>

