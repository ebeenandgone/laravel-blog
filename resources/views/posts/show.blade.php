@extends('layouts.master')

@section('content')
    <div class="col-md-8">
        <hr>
            <h1 class="my-4" style="text-align:center;">{{ $post->title }}</h1>
        <hr>
        {{ $post->body }}
        <hr>
        <div class="timestamp">
            Posted on {{ $post->created_at->toFormattedDateString() }} by 
            <a href="#">Username Here</a>
        </div>
        <hr>
        <div class="comments">
            <ul class="list-group">
                @foreach ($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{ $comment->created_at->diffForHumans() }}: &nbsp;
                        </strong>
                        {{ $comment->body }}
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="card">
            <div class="card-body">
                <form method="POST" action="/posts/{{ $post->id }}/comments">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" placeholder="Comment here." class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>

                @include('layouts.errors')

            </div>
        </div>

    </div>
@endsection
