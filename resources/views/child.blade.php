@extends('layouts.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 <p>abc123</p>
    <p>This is appended to the master sidebar. 上面有一個父層</p>
@endsection
 
@section('content')
    <p>This is my body content.</p>
@endsection