@extends('layouts.main')

@section('content')
    <section>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="square" style="--i:5;"></div>

            <div class="container">
                <div class="form">
                    <img class="img-fuilds" src="{{ asset('public/img/logo_app.png') }}">
                    <h2>Chat App</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="inputBx">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <span>Email</span>
                            <i class="fas fa-user-circle"></i>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="inputBx password">
                            <input id="password-input" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password" >
                            <span>Password</span>
                            <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
                            <i class="fas fa-key"></i>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label class="remember">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            {{ __('Remember Me') }}
                        </label>
                        <div class="inputBx">
                            <input type="submit" value="{{ __('Login') }}">
                        </div>
                    </form>
                    @if (Route::has('password.request'))
                        <p>
                            {{ __('Forgot Your Password?') }}
                            <a href="{{ route('password.request') }}">Click Here</a>
                        </p>
                    @endif
                    @if (Route::has('register'))
                        <p>Don't have an account <a href="{{ route('register') }}">Sign up</a></p>
                    @endif
                </div>
            </div>

        </div>
    </section>
@endsection
