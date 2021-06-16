@extends('layouts2.setter')
@section('navbar')
    @include('layouts2.partials.header')
@endsection
<!-- @guest
    @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @endif
    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @endif
    @else
@endguest -->
@section('sidebar')
    @include('layouts2.partials.sidebar')
@endsection
@section('content')
    @yield('maincontent')
@endsection
@section('footer')
    @include('layouts2.partials.footer')
@endsection