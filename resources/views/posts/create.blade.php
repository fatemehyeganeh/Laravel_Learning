@extends('layouts.master')
@section('content')
<form action="{{ route('posts.store') }}" method="POST" name="add_post">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Title</strong>
                <input type="text" name="title" class="form-control" placeholder="Enter Title">
                <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Body</strong>
                <textarea class="form-control" col="4" name="body" placeholder="Enter Description"></textarea>
                <span class="text-danger">{{ $errors->first('body') }}</span>
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

  </form>

@endsection