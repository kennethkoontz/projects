@extends('layouts.master')

@section('content')
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
  	Geekwise Academy
  </div>
</nav>
<div class="row" style="top: 80px;position: relative;">
	<div class="col-sm-3">
		{{{ $first_name }}}
		<div class="col-sm-12">
			<form method="post" action="/message">
				<textarea class="form-control" name="body"></textarea>
				<button type="submit" class="btn btn-primary pull-right">Post Message</button>
			</form>
		</div>
	</div>
	<div class="col-sm-6">
		<ul class="list-group">
			@foreach ($messages as $message)
				<li class="list-group-item">
					<div class="media">
						<a class="pull-left" href="#">
						<img class="media-object" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" alt="...">
						</a>
						<div class="media-body">
							<h4 class="media-heading">{{ $message->user->full_name }}</h4>
							{{ $message->body }}
						</div>
					</div>
				</li>
			@endforeach
		</ul>

			
	</div>
</div>
@stop
