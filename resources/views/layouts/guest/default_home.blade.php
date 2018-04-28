@extends('layouts.common')

@section('content')
    {{-- Guest Header --}}

    @include('layouts/partials/_nav_connect')

    @yield('real-content')
@endsection
