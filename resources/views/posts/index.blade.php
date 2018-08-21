@extends('layouts.master')

@section('header_scripts')
    <link href="css/blog-home.css" rel="stylesheet">
@endsection

@section('content')
<!-- Blog Entries Column -->
<div class="col-md-8">
    <hr>
    <h1 class="my-4" style="text-align:center;">Home Page</h1>
    <hr>
    
    @foreach ($posts as $post)
        @include('posts.post')
    @endforeach

    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
        <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
        </li>
        <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
        </li>
    </ul>

</div>
@endsection
