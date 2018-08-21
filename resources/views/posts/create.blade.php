@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">
        
        <hr>
        <h1 style="text-align:center;">Create a Post</h1>
        <hr>

        <form method="POST" action="/posts">
            {{ csrf_field() }}

            <div class="form-group">
                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
            </div>

            <div class="form-group">
                <textarea id="body" name="body" class="form-control" placeholder="Post Content"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

            @include('layouts.errors')
        
        </form>

    </div>

@endsection

