@extends('admin.includes.base')

@section('conteudo')

@if(Session::has('mensagem'))

    {{Session::get('mensagem')}}

@endif

    <div class="conteudo_admin">

        <div class="titulo_index">
            Painel Administrativo BWI
        </div>

    </div>

@endsection