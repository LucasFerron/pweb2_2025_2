@extends('base')
@section('titulo', 'Formulário Aluno')
@section('conteúdo')
    <form action="" method="post">
        <div class="row">
            <div class="col">
                <label for="">Nome</label>
                <input type="text" name="nome">
            </div>
            <div class="col">
                <label for="">CPF</label>
                <input type="text" name="cpf">
            </div>
            <div class="col">
                <label for="">Telefone</label>
                <input type="text" name="telefone">
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn">Salvar</button>
                    <a href="{{ url('aluno') }}">Voltar</a>
                </div>
            </div>

        </div>
    </form>
