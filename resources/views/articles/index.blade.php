@extends('layouts.master')
@section('content')
    <h2>All Articles</h2>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>user_id</th>
                <th>title</th>
                <th>body</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td><a href="/../showuser/{{$article->user_id}}">{{ $article->user_id }}</a></td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->body }}</td>
                    <td>
                        <form action="/admin/articles/{{$article->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection