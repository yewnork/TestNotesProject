<ul class="collection with-header">
	<li class="collection-header">
		<h6>Notes</h6>
	</li>
	@foreach ($notes as $note)
	<li class="collection-item">
		<span class="title">{{ $note->user->name }}</span>
		<p>{{ $note->content }}</p>

	</li>
	@endforeach
</ul>