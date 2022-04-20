@extends('layouts.master')
@section('content')
    <a href="create">Add New User</a>
    <h2>All users</h2>
    <table class="table table-striped table-bordered" id="myTable">
        <thead>
            <tr>
                <th class="th-sm">show</th>
                @foreach($columns as $column)
                    <th class="th-sm">{{$column}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($rows as $row)

                <tr>
                    <td class="th-sm"><a href="/admin/users/{{$row->id}}/articles">show articles</a></td>
                    @foreach($columns as $column)
                        <td class="th-sm">{{$row->$column}}</td>
                    @endforeach                    
                    <td>
                        <form action="/admin/users/{{$row->id}}" method="post">
                            @csrf
                            @method('put')
                            <button class="btn btn-info">edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="/admin/users/{{$row->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">delete</button>
                        </form>
                    </td>
                    <td>
                        <form action="/admin/users/{{$row->id}}/sendmail" method="post">
                            @csrf
                            <button class="btn btn-danger">email</button>
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