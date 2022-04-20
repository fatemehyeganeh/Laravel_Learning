@extends('layouts.master')
@section('contact')
    <a href="{{ route('posts.create') }}" class="btn btn-success mb-2">Add Post</a> <br>
      <div class="row">
            <div class="col-12">
              <table class="table table-bordered" id="laravel_unique_slug_table">
               <thead>
                  <tr>
                     <th>Id</th>
                     <th>Title</th>
                     <th>Slug</th>
                     <th>body</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($posts as $post)
                  <tr>
                     <td>{{ $post->id }}</td>
                     <td>{{ $post->title }}</td>
                     <td>{{ $post->slug }}</td>
                     <td>{{ $post->body }}</td>
                  </tr>
                  @endforeach
               </tbody>
              </table>
              {!! $posts->links() !!}
           </div> 
      </div>
@endsection
    