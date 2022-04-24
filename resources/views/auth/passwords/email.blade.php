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
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @error('email')
                        <div class="error-message">
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        </div>
                    @enderror
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="inputBx">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <span>Email</span>
                            <i class="fas fa-envelope"></i>
                        </div>

                        <div class="inputBx">
                            <input type="submit" value="Send">
                        </div>
                    </form>
                    @if (Route::has('register'))
                        <p>Don't have an account <a href="{{ route('register') }}">Sign up</a></p>
                    @endif
                    <p>Back <a href="{{ url('/') }}">Home</a></p>
                </div>
            </div>

        </div>
    </section>
@endsection
