@extends('layouts.app-master')

@section('content')
<div class="bg-light p-5 rounded">
  @auth
  <h1>Dashboard</h1>

  <p class="lead">

    @if (auth()->check())
  <p>JWT Sessão</p>
  <p id="jwtt">{{ session('tokenJWT') }}</p>
  <script>
    var jwtt = document.querySelector("#jwtt");
    if (jwtt.value) {
      localStorage["jwtt"] == jwtt.value
    } else {
      jwtt.value = localStorage["jwtt"]
    }
  </script>
  <p>Usuário:</p>
  <p>{{ auth()->user() }}!</p>
  @endif

  Only authenticated users can access this section.</p>
  <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a>
  @endauth

  @guest
  <h1>Aqui vai fica o Crud</h1>
  @endguest
</div>
@endsection