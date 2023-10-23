@extends('layouts.main')
@section('title','Lista de Funcionarios')
@section('content')

<div class="row">
    @if(session('success'))
    <div class="col-sm-12"> 
        <div class="panel panel-info" data-collapsed="0">
            <div class="panel-heading">
                <div>Pronto!</div> 
                <p>{{ session('success') }}</p>
            </div>
        </div>
    </div>
    @endif

    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading" style="font-weight: 900; font-size:18px">
                Funcionarios
            </header>
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Data de Nascimento</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($itens as $item)
                        <div class="item">
                            <!-- Exibir itens -->
                            <tr class="">
                                <td>{{$item->nome}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->data_nascimento}}</td>
                                <td>
                                    <form method="post" style="display:inline" action="{{ route('funcionario.delete', ['id' => $item->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Deletar</button>
                                    </form>
                                    <form method="post" style="display:inline" action="{{ route('funcionario.edit', ['id' => $item->id]) }}">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-primary">Editar</button>
                                    </form>
                                </td>
                            </tr>

                        </div>
                    @endforeach


                </tbody>
            </table>
            <a class="btn btn-primary" href="{{route('funcionario.create')}}" >Adicionar</a>
            
        </section>
    </div>
</div>

@endsection