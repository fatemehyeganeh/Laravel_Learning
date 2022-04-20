@extends('layouts.master')
@section('content')
    <h2>Create User</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/admin/users/create" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name :</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password :</label>
            <input type="text" name="password" class="form-control">
        </div>
        <button class="btn btn-danger">Send</button>
    </form>
@endsection