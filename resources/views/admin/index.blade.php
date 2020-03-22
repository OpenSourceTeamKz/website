@extends('adminlte::page')

@section('title', 'Admin panel')

@section('content_header')
    <h1>AdminRun</h1></h1>
@stop

@section('content')
    <p>Добро пожаловать, в админ панель {{ auth()->user()->name }}.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop