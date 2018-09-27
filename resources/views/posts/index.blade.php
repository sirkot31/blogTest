@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md">
            <a href="{{ route('posts.create') }}" class="btn btn-success">Nuevo Post</a>
        </div>
    </div>
    <br>

    @foreach ($posts as $post)
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
                </div>
            </div>
        </div>
    </div>
    <br>
    @endforeach

</div>
@endsection

