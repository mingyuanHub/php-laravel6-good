@extends('a1008/main')

@section('title', 'Mater Title')

@section('name', 'ming yuan')

@section('sidebar')
    @parent 
    This is the master sidebar.
@endsection

@section('content')
    <p>This is my master content.</p>
@endsection
