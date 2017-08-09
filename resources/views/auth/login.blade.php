@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                <label for="email">Email Address</label>
            </div>
            <div class="input-field col s12">
                <input id="password" type="password" class="form-control" name="password" required>
                <label for="password">Password</label>
            </div>
            <div class="col s12">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
