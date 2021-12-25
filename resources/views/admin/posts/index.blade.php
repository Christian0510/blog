@extends('adminlte::page')

@section('title', 'Admin_Panel')

@section('content_header')

    <a href="{{ route('admin.posts.create') }}" class="btn btn-secondary btn-sm float-right">Crear nuevo Post</a>

    <h1>Lista de Posts</h1>
@stop

@section('content')
    @livewire('admin.posts-index')
@stop


