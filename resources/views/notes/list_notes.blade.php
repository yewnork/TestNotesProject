@extends('layouts.dashboard')

@section('content')

<div class="container">
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
				<div class="input-field col s8">
                	<input id="add-note" type="text" class="form-control" name="content" value="{{ old('content') }}" autofocus>
                	<label for="content">Add Note</label>
            	</div>
            	<div class="input-field col s4">
                	<button type="submit" class="btn btn-primary">
                   		Create
                	</button>
            	</div>
			</form>

		</li>
		@foreach ($notes as $note)
		<li class="collection-item">
			<span class="title">{{ $note->user->name }}</span> - <span>{{ $note->created_at->diffForHumans() }}</span>
			<p>{{ $note->content }}</p>

		</li>
		@endforeach
	</ul>
</div>
@endsection