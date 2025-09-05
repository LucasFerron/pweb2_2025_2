@extends('base')
@section('titulo', 'Formulário Aluno')
@section('conteudo')
    <h3>Listagem de Alunos</h3>
    <div class="row">
        <div class="col">
            <form action="{{ route('aluno.search') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <label form="form-label">Tipo</label>
                        <select name="tipo" class="form-select">
                            <option value="nome">Nome</option>
                            <option value="cpf">CPF</option>
                            <option value="telefone">Telefone</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="">Valor</label>
                        <input type="text" class="form-control" name="valor" placeholder="Pesquisar...">
                    </div>
            </form>
            <div class="col-md-1">
                <button type="submit" class="btn btn-primary">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    Buscar
                </button>
            </div>
            <div class="col-md-1">
                <a class="btn btn-success" href="{{ url('/aluno/create') }}"><i class="fa-solid fa-plus"></i>Cadastrar</a>
            </div>
        </div>


    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <td>#ID</td>
                <td>Nome</td>
                <td>CPF</td>
                <td>telefone</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($dados as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nome }}</td>
                    <td>{{ $item->cpf }}</td>
                    <td>{{ $item->telefone }}</td>
                    <td><a class="btn btn-sm btn-outline-warning" href="{{route('aluno.edit', $item->id)}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td>
                        <form action="{{ route('aluno.destroy', $item->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                onclick="return confirm('Deseja Remover o registro?')"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
