@extends('layouts.dashboard')
@section('headerlinks')
<nav>
    <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Test Notes App</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li><a href="{{route('logout')}}">Logout</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li><a href="{{route('logout')}}">Logout</a></li>
        </ul>
    </div>
</nav>
@endsection
@section('content')
    @include('notes.list_notes')
@endsection
