<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="{{asset('css/index.css')}}">

<div class="container-all">
    <h1 class="title">Olá, {{$user->name}}. Você está logado!</h1>
    <a href="{{route('logout')}}">Sair</a>
</div>
