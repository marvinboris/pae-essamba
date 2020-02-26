@extends('layouts.empty')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
                {{-- <div class="text-center logo"><a href="{{ url('/') }}"><img src="{{ url('/assets/images/logo.png') }}" style="height: 72px;" alt="Logo"></a></div> --}}
                <div class="d-flex align-items-center justify-content-center" style="height: 58px;">
                    <a href="{{ url('/') }}" class="col-12 text-decoration-none h-100 d-flex justify-content-center align-items-center">
                        <img src="{{ url('/assets/images/logo.png') }}" alt="Logo Pae Essamba" class="mr-2 h-100">
                        <div class="font-weight-bold h5" style="color: #6ec102;">
                            Pae<br>Essamba
                        </div>
                    </a>
                </div>
                <div class="text-center text-uppercase h2 font-weight-light m-0 p-0 mt-3">Login</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="control-label"><i class="fas fa-envelope mr-2"></i>{{ __('E-Mail Address') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="control-label"><i class="fas fa-lock mr-2"></i>{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <div>
                                <button type="submit" class="btn btn-block btn-success rounded-0 text-white font-weight-700">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
