@extends('layouts.master')

@section('content')

@if(session()->has('jsAlert'))
    <script>
        alert({{ session()->get('jsAlert') }});
    </script>
@endif 

@endsection