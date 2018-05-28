@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 col-md-offset-2">
	            <div class="card">
	                <div class="card-header">
	                	Edit Post
	                </div>

	                <div class="card-body">
						<form class="" action="{{ route('post.update', $post->id) }}" method="post">
							@csrf
							@method('PATCH')
							<div class="form-group">
								<label for="title">Judul</label>
								<input type="text" class="form-control" name="title" placeholder="Judul Post" value="{{$post->title}}">
							</div>

							<div class="form-group">
								<label for="category">Kategori</label>
								<select name="category_id" id="" class="form-control">
									@foreach($categories as $kategori)
										<option value="{{ $kategori->id }}"
											@if ($kategori->id === $post->category_id)
												selected 
											@endif>
											{{ $kategori->name }}
										</option>
									@endforeach
								</select>
							</div>		

							<div class="form-group">
								<label for="">Konten</label>
								<textarea name="content" rows="5" class="form-control" placeholder="Konten Post">{{$post->content}}</textarea>
							</div>

							<div class="form-group">
								<input type="submit" class="btn btn-primary" name="Save">
							</div>
						</form>
	                </div>
	            </div><br>
			</div>
		</div>
	</div>

@endsection