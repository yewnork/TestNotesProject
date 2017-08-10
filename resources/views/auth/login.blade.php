@extends('layouts.app')

@section('content')
<div class="container">
    
    <form method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <div class="row">
        <div class="col s6 offset-s3">
            
            <div class="row">
                @if ($errors->any())
                    <?php $error_message = "";?>
                    @foreach ($errors->all() as $error)
                    <?php $error_message .= $error . "<br />";?>
                    @endforeach
                    <script>
                    swal({
                      title: "Alert!",
                      text: "<?php echo $error_message; ?>",
                      type: "error",
                      html: true,
                    });
                    </script>            
                @endif
                <div class="input-field col s12 m6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus autocomplete="off">
                    <label for="email">Email Address</label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="password" type="password" class="form-control" name="password" required>
                    <label for="password">Password</label>
                </div>
                <div class="col s12 m6">
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection
