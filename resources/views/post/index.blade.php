@extends('layouts.app')

@section('content')
	
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">

	            @foreach($posts as $post)
		            <div class="card">
		                <div class="card-header">
		                	<a href="{{ route('post.show', $post) }}">{{$post->title}}
		                	<div class="float-right">
		                		<div class="row">
			                		<a href="{{ route('post.edit', $post) }}" class="btn btn-xs btn-warning">Edit</a>
			                		<form class="" action="{{ route('post.destroy', $post) }}" method="post">
			                			@csrf
			                			@method('DELETE')
			                			<button type="submit" class="btn btn-xs btn-danger">Hapus</button>
			                		</form>
		                		</div>
		                	</div>
		                </div>

		                <div class="card-body">
		                	<p>{{ str_limit($post, $limit = 300, $end = '...') }}</p>
		                </div>
		            </div><br>
	            @endforeach

	        </div>
	    </div>
	</div>

@endsection