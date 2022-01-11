@extends('index')

@section('title','Crud em Laravel')

@section('name','Edição de tarefas')


@if($errors->any())

    <x-alert>
        @foreach($errors->all() as $error)
        {{$error}}<br>
        @endforeach
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