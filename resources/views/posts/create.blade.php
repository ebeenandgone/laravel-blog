@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">
        <h1>Create a Post</h1>

        <form>
            <div class="form-group">
                <input type="text" class="form-control" id="titleInput" aria-describedby="title" placeholder="Title">
            </div>
            <div class="form-group">
                {{-- <input type="text" class="form-control" id="postInput" placeholder="Post"> --}}
                <textarea class="form-control" aria-label="With textarea" placeholder="Post"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection

