@extends("templates.template")
@section("titulo", "Informações de Contato")

@section('conteudo')
<div class="box-formulario">
    <form action="">
        <!-- TEXT -->
        <div class='text-login'>
            <p>Como podemos te contatar?</p>
        </div>

        <div class="label-input-form login">
            <label for="">Telefone</label>
            <input type="text" name="" id="" required>
        </div>

        <div class="label-input-form passwd">
            <label for="">Email</label>
            <input type="email" name="" id="" required>
        </div>

        <div class="label-input-form login">
            <label for="">WhatAapp</label>
            <input type="email" name="" id="" required>
        </div>

        <div class="btn">
            <button class='btn-form'>Avançar
            </button>
        </div>
    </form>
</div>
@endsection