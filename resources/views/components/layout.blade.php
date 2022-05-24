@extends('layouts.app')

@section('content')
        @include('partials._sidenav')

            {{ $slot }}


@endsection
