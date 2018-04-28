@extends('layouts.common')

@section('content')
    {{-- Guest Header --}}

    @include('layouts/partials/_nav')

    @yield('guest-content')
@endsection
