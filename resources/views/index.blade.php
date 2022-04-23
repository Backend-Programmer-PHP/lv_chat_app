@extends('layouts.main')

@section('content')
    <img class="background" src="https://megabus.vn/wp-content/uploads/2019/07/sai-gon_megabus.jpg" />
    <p class="message">Chào mọi người<br>Đến với website message</p>

    <?php for ($i=0; $i < 100; $i++) { ?>
    <div class="circle-container">
        <div class="circle"></div>
    </div>
    <?php } ?>

    <div class="pt-4">
        <div class="container-app">
            <span class="menu-trigger">
                <i class="menu-trigger-bar top"></i>
                <i class="menu-trigger-bar middle"></i>
                <i class="menu-trigger-bar bottom"></i>
            </span>
            <span class="close-trigger">
                <i class="close-trigger-bar left"></i>
                <i class="close-trigger-bar right"></i>
            </span>
            <span class="logo">
                <img src="{{ asset('public/img/logo_app.png') }}">
                {{-- <span>

                    <i class="logo-badge">6</i>
                </span> --}}
            </span>
            <div class="inner-container">
                <i class="menu-bg top"></i>
                <i class="menu-bg middle"></i>
                <i class="menu-bg bottom"></i>
                <div class="menu-container">
                    <ul class="menu">
                        <li>
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">Create account</a>
                        </li>
                        @endif
                        <li>
                            <a href="#">Support</a>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
