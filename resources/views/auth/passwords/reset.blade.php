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
                {{-- error message --}}
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
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="inputBx">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                        <span>Email</span>
                        <i class="fas fa-envelope"></i>

                    </div>
                    <div class="inputBx password">
                        <input id="password-input" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        <span>Password</span>
                        <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
                        <i class="fas fa-key"></i>
                    </div>
                    <div class="inputBx password">
                        <input id="password-new" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <span>Password confirmation</span>
                        <a href="#" class="password-control" onclick="return show_hide_password_comfirm(this);"></a>
                        <i class="fas fa-key"></i>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Reset">
                    </div>
                </form>

            </div>
        </div>

    </div>
</section>
@endsection
