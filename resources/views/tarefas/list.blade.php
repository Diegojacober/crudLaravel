@extends('index')

@section('title','Crud em Laravel')

@section('name','Listagem de tarefas')



@section('content')
<h3><a href="{{route('tarefas.add')}}">Adicionar Nova Tarefa</a></h3>
    @if(count($list) > 0)
    
    <ul>
        @foreach ($list as $item)
          
            <li>
                
               <a href="{{route('tarefas.done',['id' =>$item->id])}}">[@if($item->resolvido == 1)  Desmarcar @else Marcar @endif]</a>
                {{$item->titulo}}
               <a href="{{route('tarefas.edit',['id' =>$item->id])}}">[ Editar ]</a>
               <a href="{{route('tarefas.delete',['id' =>$item->id])}}" onclick="return confirm('Tem certeza que deseja excluir essa tarefa?')">[ Excluir ]</a>

            </li>
        @endforeach
    </ul>
    @else
    Nenhuma tarefa encontrada
    @endif
@endsection