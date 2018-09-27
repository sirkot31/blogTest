@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            	<form action="{{ route('posts.update', $post->id) }}" method="POST">
            	{{ method_field('PUT') }}
				{{ csrf_field() }}
                <div class="card-body">
                    <p><input type="text" name="title" id="input" class="form-control" value="{{ $post->title }}"></p>
                    <p><textarea name="body" id="input" class="form-control" rows="3" required="required">{{ $post->body }}</textarea></p>
                </div>
                <div class="card-footer">
                    Creado el: {{ $post->created_at }}
                    <div class="row float-right">
                        <div class="col-md-3">
                            <button type="submit" type="button" class="btn btn-primary">Actualizar</button>
                        </div>
                    </div>
                </div>
            	</form>
            </div>
        </div>
    </div>
    <br>
</div>
@endsection

