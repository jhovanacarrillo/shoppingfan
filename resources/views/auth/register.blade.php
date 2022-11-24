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
  <link rel="stylesheet" href="../../css/registro.css" />

</head>


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
                    <span>¡Registrate!</span>

                </div>
                    
                    

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <input type="hidden" name="ficha" value="">

                        <div class="input-wrapper">
                            <div class="input">
                            <!--<label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>-->

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nombre" required autocomplete="name" autofocus>
                                <em class="fas fa-user-alt"></em>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-wrapper">
                            <!--<label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>-->

                            <div class="input">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-wrapper">
                            <!--<label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>-->

                            <div class="input">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-wrapper">
                            <!--<label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>-->

                            <div class="input">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="wrap">
                            
                                <button type="submit" class="glow-on-hover">
                                    {{ __('Register') }}
                                </button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

