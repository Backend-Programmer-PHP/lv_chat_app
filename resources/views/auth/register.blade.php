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
                    {{-- Error message fields --}}
                    @error('name')
                        <div class="error-message">
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        </div>
                    @enderror
                    @error('email')
                        <div class="error-message">
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        </div>
                    @enderror
                    @error('password')
                        <div class="error-message">
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        </div>
                    @enderror
                    @error('password_confirmation')
                        <div class="error-message">
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        </div>
                    @enderror
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="inputBx">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <span>Name</span>
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="inputBx">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">
                            <span>Email</span>
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <div class="inputBx password">
                            <input id="password-input" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
                            <span>Password</span>
                            <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
                            <i class="fas fa-key"></i>
                        </div>
                        <div class="inputBx password">
                            <input id="password-new" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password">
                            <span>Comfirm password</span>
                            <a href="#" class="password-control" onclick="return show_hide_password_comfirm(this);"></a>
                            <i class="fas fa-key"></i>
                        </div>

                        <div class="inputBx">
                            <input type="submit" value="{{ __('Register') }}">
                        </div>
                    </form>

                    <p>If you already have an account?<a href="{{ route('login') }}">Login</a></p>
                </div>
            </div>

        </div>
    </section>
@endsection
