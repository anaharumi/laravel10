@extends('layouts.main')
@section('title','Editar Funcionario')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading" style="font-weight: 900; font-size:18px">
                    Editar Funcionario
                </header>
                    <form method="post" action="{{ route('funcionario.update',['id' => $item->id]) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" value="{{ $item->nome }}">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{ $item->email }}">
                        </div>
                        <div class="form-group">
                            <label for="data_nascimento">Data de Nascimento</label>
                            <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" value="{{ $item->data_nascimento }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Concluir</button>
                    </form>
            </section>
        </div>
    </div>
@endsection