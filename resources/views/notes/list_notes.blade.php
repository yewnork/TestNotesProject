@extends('layouts.dashboard')
@section('content')
<ul class="collection with-header">
    <div class="collection-header">
        <h4>Notes</h4>
    </div>
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
    <li class="collection-item row">
        <form method="POST" action="{{ route('storeNote') }}">
            {{ csrf_field() }}
            <div class="input-field col s12 m8">
                <textarea name="content" id="add-note" class="materialize-textarea" autofocus>{{ old('content') }}</textarea>
                <label for="content">Add Note Content</label>
            </div>
            <div class="input-field col s12 m4">
                <button type="submit" class="btn btn-primary">
                Add Note
                </button>
            </div>
        </form>
    </li>
    @foreach ($notes as $note)
    <li class="collection-item">
        <span class="title"><b>{{ $note->user->name }}</b></span> - <span><i>{{ $note->created_at->diffForHumans() }}</i></span>
        <p>{!! nl2br(e($note->content)) !!}</p>
    </li>
    @endforeach
</ul>
@endsection