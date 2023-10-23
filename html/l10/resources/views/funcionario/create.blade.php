@extends('layouts.main')
@section('title','Registrar funcionario')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading" style="font-weight: 900; font-size:18px">
                Registrar Funcionario
            </header>
        <form method="post" action="{{ route('funcionario.store') }}">
            @csrf
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">
            <label for="data_nascimento">Data de Nascimento</label>
            <input type="date" name="data_nascimento" id="data_nascimento" >     
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
        </section>
    </div>
</div>
@endsection