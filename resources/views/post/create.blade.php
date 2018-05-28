@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 col-md-offset-2">
				<div class="card">
					<div class="card-header">
						Tulis Post
					</div>

					<div class="card-body">
						<form class="" action="{{ route('post.store') }}" method="post">
							@csrf
							<div class="form-group">
								<label for="title">Judul</label>
								<input type="text" class="form-control" name="title" placeholder="Judul Post">
							</div>

							<div class="form-group">
								<label for="category">Kategori</label>
								<select name="category_id" id="" class="form-control">
									@foreach($categories as $kategori)
										<option value="{{ $kategori->id }}">
											{{ $kategori->name }}
										</option>
									@endforeach
								</select>
							</div>		

							<div class="form-group">
								<label for="">Konten</label>
								<textarea name="content" rows="5" class="form-control" placeholder="Konten Post"></textarea>
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