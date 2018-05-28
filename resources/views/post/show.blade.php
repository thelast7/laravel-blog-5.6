@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 col-md-offset-2">

	            <div class="card">
	                <div class="card-header">
	                	<strong>{{$post->title}}</strong> <button class="float-right btn btn-default">{{ $post->category->name }}</button>
	                </div>

	                <div class="card-body">
	                	<p>{{ $post->content }}</p>
	                </div>
		        </div><br>

		        <div class="card">
	                <div class="card-header">
	                	Tambahkan Komentar
	                </div>

	                <div class="card-body">
	                	@foreach($post->comments()->get() as $comment)
	                		<div class="card"><h4>{{ $comment->user->name }} <small class="float-right">{{ $comment->created_at->diffForHumans() }}</small></h4>

	                			<p>{{ $comment->message }}</p>
	                		</div>
	                	@endforeach
	                </div>

	                <div class="card-body">
	                	<form action="{{ route('post.comment.store', $post) }}" method="post" class="form-horizontal">
	                		@csrf
	                		<textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Isi Komentar"></textarea>
	                		<input type="submit" value="komentar" class="btn btn-primary ">
	                	</form>
	                </div>
		        </div><br>

			</div>
		</div>
	</div>

@endsection