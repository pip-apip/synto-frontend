@extends('app.app')

@section('title', 'Dashboard')
@section('body')
    @include('partials.switcher')

    <div class="page">
        @include('partials.sidebar')
        @include('partials.header')

        <div class="content">
            @yield('content')
        </div>

        @include('partials.footer')
    </div>
@endsection
