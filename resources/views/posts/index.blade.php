
@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 style="margin-top: 30px;" class="text-center">Blog Posts</h1><br>
        @if(count($posts)>0)
            @foreach($posts as $post)
                <div class="card">
                    <div class="card-header">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    </div>
                    <div class="card-body">
                        <p>{{$post->body}}</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text">Published on {{$post->created_at}}</p>    
                    </div> 
                </div> 
                <br>
            @endforeach
            {{$posts->links()}}
        @else
            <h3>No posts</h3>
        @endif
    </div>
@endsection