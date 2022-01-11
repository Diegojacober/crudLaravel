<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class HomeController extends Controller
{
    public function __invoke()
    {
        //$list = Tarefa::all();
        $list = Tarefa::where('resolvido',0)->orWhere('resolvido',1)->get();
        
        //pegar o primeiro item
        $one = Tarefa::where('resolvido',0)->first();
       echo 'Apenas 1 registro '.$one->titulo.'<br><br><hr>';

       //pegar id 
    //    $item = Tarefa::find(2);
    //    echo 'id: '.$item->titulo;

    $itens = Tarefa::find([1,3]);
    foreach($itens as $i){
        echo 'Item:  '.$i->titulo.' <b>ID:</b> '.$i->id.'<br>';
    }

        foreach($list as $item){
            echo 'Item:  '.$item->titulo.'<br>';
        }

    
        $qntResolvido = Tarefa::where('resolvido',1)->count();
        echo 'Não Resolvidos: '.$qntResolvido;

        //inserir
        //$t = new Tarefa();
        // $t->titulo = 'Testando pelo eloquent';
        // $t->save();
        // echo '<hr>Salvo com Sucesso<hr>';

        //editar
        // $t = Tarefa::find(10);
        // $t->titulo = 'Atualizando pelo Eloquent';
        // $t->save();
        // echo '<hr>Editado com Sucesso<hr>';

        //deletar 
        // $t = Tarefa::find(10);
        // $t->delete();
        // echo '<hr>Deletado com Sucesso<hr>';

        //editar em massa
        // Tarefa::where('resolvido',1)->update([
        //     'resolvido' => 0
        // ]);

        //exclusão em massa
        //Tarefa::where('resolvido',1)->delete();
    }
    }

    
