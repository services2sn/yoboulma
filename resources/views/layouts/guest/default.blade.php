@extends('layouts.common')

@section('content')
    {{-- Guest Header --}}

    @if($connection OR str_contains(Request::fullUrl(), 'connection'))
      @include('layouts/partials/_nav_connect')
    @else
      @include('layouts/partials/_nav')
    @endif

    @yield('guest-content')
@endsection
