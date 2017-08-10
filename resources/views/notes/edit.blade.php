@extends('layouts.dashboard')
@section('content')
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
	<div class="row">
			<form method="POST" action="{{ route('updateNote', ['id' => $note->id]) }}">
            {{ csrf_field() }}
            <div class="input-field col s12 m8">
                <textarea name="content" id="add-note" class="materialize-textarea" autofocus>{!! nl2br(e($note->content)) !!}</textarea>
                <label for="content">Edit Note Content</label>
            </div>
            <div class="input-field col s12 m4">
                <button type="submit" class="btn btn-primary">
                Edit Note
                </button>
            </div>
        </form>
	</div>
@endsection