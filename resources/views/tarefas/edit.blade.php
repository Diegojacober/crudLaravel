@extends('index')

@section('title','Crud em Laravel')

@section('name','Edição de tarefas')


@if(session('warning'))
    <x-alert>

    {{session('warning')}}

    </x-alert>
@endif

@section('content')
    <form method="post">
        @csrf

        <label for="titulo">Titulo da Tarefa:</label><br>
        <input type="text" name="titulo" value="{{$data->titulo}}"><br><br>

        <button type="submit">Salvar</button>
    </form>
@endsection