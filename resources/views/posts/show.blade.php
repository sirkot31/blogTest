@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2></div>

                <div class="card-body">
                    <p>{{ $post->body }}</p>
                </div>
                <div class="card-footer">
                    <p>Creado el: {{ $post->created_at }}</p>
                    <p>Creado por: {{ $post->user->name }}</p>
                    <div class="row float-right">
                        <div class="col-md-3">
                            <a href="{{ route('posts.edit', $post->id) }}" type="button" class="btn btn-warning">Editar</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <form action="{{ route('comments.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="card-header"><h2>Comentarios</h2></div>

                <div class="card-body">
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <textarea name="texto" class="form-control" rows="3" required="required"></textarea>
                    <button type="submit" class="btn btn-primary float-right">Guardar</button>
                </div>
                <div class="card-footer">
                    @foreach ($post->comments as $comment)
                    <div class="row">
                        <div class="col-md-8">{{ $comment->texto }}</div>
                        <div class="col-md-4">{{ $comment->user->name }} <small>({{ $comment->created_at }})</small></div>
                    </div>
                    <hr>
                    @endforeach
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection