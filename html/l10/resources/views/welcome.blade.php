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
  <h1>Homepage</h1>
  <p class="lead">Your viewing the home page. Please login to view the restricted data. (0.0.18)</p>
  @endguest
</div>
@endsection