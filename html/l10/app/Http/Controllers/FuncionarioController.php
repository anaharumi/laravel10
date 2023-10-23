<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //pega todos os itens da tabela
        $itens = Funcionario::all();
        return view('funcionario.index', compact('itens'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('funcionario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Define as regras de validação
        $rules = [
            'nome' => 'required', // O campo 'nome' é obrigatório
            'email' => 'required|email', // O campo 'email' é obrigatório e deve um email valido
            'data_nascimento' => 'required|date', // O campo 'data' é obrigatorio e deve ser uma data valida
        ];
        // Mensagens de erro personalizadas (opcional)
        $messages = [
            'email.valido' => 'Formato de e-mail invalido',
            'data.valida' => 'A data deve estar no formado DD/MM/YYYY',
            'nome.obrigatorio' => 'O nome é obrigatório'
        ];
    
        // Valide os dados do formulário com as regras definidas
        $request->validate($rules, $messages);
    
        // Se a validação for bem-sucedida, você pode prosseguir com a inserção no banco de dados
        // Por exemplo:
        Funcionario::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'data_nascimento' => $request->input('data_nascimento'),
        ]);
    
    return redirect()->route('funcionario.index')->with('success', 'Funcionario adicionado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $item = Funcionario::find($id);
        if (!$item) {
            return redirect()->route('funcionario.index')->with('error', 'Funcionario não encontrado.');
        }
    
        return view('funcionario.edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $item = Funcionario::find($id);

        if(!$item){
            return redirect()->route('funcionario.index')->with('error', 'Funcionario não encontrado.');
        }
        //Atualizando campos do item
        $item->nome = $request->input('nome');
        $item->email = $request->input('email');
        $item->data_nascimento = $request->input('data_nascimento');

        $item->save();
        return redirect()->route('funcionario.index')->with('success','Funcionario atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        //
        $item = Funcionario::find($id);
       if (!$item){
        return redirect()->back()->with('error', 'Funcionario não encontrado');
       }
       $item->delete();
       return redirect()->route('funcionario.index')->with('success', 'Item removido com sucesso.');
    }
}
