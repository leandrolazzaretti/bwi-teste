@extends('admin.includes.base')

@section('conteudo')

@if(Session::has('mensagem'))

    {{Session::get('mensagem')}}

@endif

    <div class="conteudo_admin">

        <div class="titulo_admin">
            Background
            <hr class="linha">
        </div>

        <div class="painel_admin">
            cavalos
        </div>
    </div>

@endsection