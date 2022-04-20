@extends('layouts.master')
@section('content')
    <a href="create">Add New articles</a><br/><br/>
    <h2>All users</h2>
    <table class="table table-striped table-bordered" id="myTable">
        <thead>
            <tr>
                <th>operate</th>
                @foreach($columns as $column)
                    <th class="th-sm">{{$column}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($rows as $row)
                <tr>
                    <td>
                        <a href="/../emailuser/{{$row->id}}">Email</a><br/>
                    </td>
                    @foreach($columns as $column)
                        <td class="th-sm">{{$row->$column}}</td>
                    @endforeach
                    <td>
                        <form action="/admin/articles/{{$row->id}}" method="post">
                            @csrf
                            @method('put')
                            <button class="btn btn-info">edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="/admin/articles/{{$row->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">delete</button>
                        </form>
                    </td>
                    <td>
                        <form action="/admin/articles/{{$row->id}}/show" method="post">
                            @csrf
                            <button class="btn btn-danger">show</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
     
    <script>
        $(document).ready(function(){
            $('#myTable').dataTable();
        });
    </script>
@endsection