<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $dados = Aluno::All();
        //dd($alunos);

        return view('aluno.list', ['dados' => $dados]);
    }


    public function create()
    {
        return view('aluno.form');
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'nome'=>'required',
            'cpf'=>'required',

        ],[
            'nome.required' => 'O :attribute é obrigatório',
            'cpf.required' => 'O :attribute é obrigatório',
        ]);

        Aluno::create($request->all());
        return redirect('aluno');
    }


    public function show(string $id)
    {

    }


    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
