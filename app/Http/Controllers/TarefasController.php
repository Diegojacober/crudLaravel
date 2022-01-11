<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\Tarefa;

class TarefasController extends Controller
{
    //
    public function index()
    {
        $list = Tarefa::all();

        return view('tarefas.list', [
            'list' => $list
        ]);
    }

    public function add()
    {
        return view('tarefas.add');
    }

    public function addAction(Request $request)
    {
        $request->validate([
            'titulo' => ['required', 'string']
        ]);

        $titulo = $request->input('titulo');

        $tarefa = new Tarefa();
        $tarefa->titulo = $titulo;
        $tarefa->save();

        return redirect()->route('tarefas.index');
    }

    public function edit($id)
    {
        $data = Tarefa::find($id);

        if ($data) {
            return view('tarefas.edit', [
                'data' => $data
            ]);
        } else {
            return redirect()->route('tarefas.index');
        }
    }

    public function editAction(Request $request, $id)
    {
        $request->validate([
            'titulo' => ['required', 'string']
        ]);

        $titulo = $request->input('titulo');

        //FORMA 1
        // $t = Tarefa::find($id);
        // $t->titulo = $titulo;
        // $t->save();

        //FORMA 2
        Tarefa::find($id)->update(['titulo' => $titulo]);

       return redirect()->route('tarefas.index');
    }

    public function delete($id)
    {
        Tarefa::find($id)->delete();

        return redirect()->route('tarefas.index');
    }

    public function done($id)
    {

        //DB::update('UPDATE tarefas set resolvido = 1 - resolvido WHERE id = :id', ['id' => $id]);

        $t = Tarefa::find($id);
        if($t){
        $t->resolvido = 1 - $t->resolvido;
        $t->save();
        }
        return redirect()->route('tarefas.index');
    }
}
