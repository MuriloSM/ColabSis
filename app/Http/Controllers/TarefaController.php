<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tarefa;

class TarefaController extends Controller
{
    public function salvarTarefa(Request $request)
    {
        try {
            // Realizar o insert no banco de dados
            DB::table('tarefa')->insert([
                'Titulo' => $request->input('titulo'),
                'Descrição' => $request->input('descricao'),
                'Prazo' => $request->input('prazo'),
                'ID_Status' => $request->input('Status'),
                'Responsavel' => $request->input('responsavel'),
            ]);

            return redirect()->back()->with('success', 'Tarefa salva com sucesso!');
        } catch (\Exception $e) {
            // Se houver um erro, redirecione com uma mensagem de erro
            return redirect()->back()->with('error', 'Erro ao salvar a tarefa: ' . $e->getMessage());
        }
    }



  
}
