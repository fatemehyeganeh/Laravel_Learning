@extends('layouts.master')
@section('content')
<div class="container">
    <h1 style="margin-top: 30px;" class="text-center">Article</h1><br>
    @if(count($articles)>0)
        @foreach($articles as $articles)
            <div class="card">
                <div class="card-header">
                    <h3><a href="/articles/{{$article->id}}">{{$article->title}}</a></h3>
                </div>
                <div class="card-body">
                    <p>{{$article->body}}</p>
                </div>
                <div class="card-footer">
                    <p class="card-text">Published on {{$articles->created_at}}</p>    
                </div> 
            </div> 
            <br>
        @endforeach
        {{$articles->links()}}
    @else
        <h3>No articles</h3>
    @endif
@endsection