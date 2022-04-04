@extends("templates.template")
@section("titulo", "Cadastro")
@section('conteudo')

<div class="cadastrobotoes">
            <div>
                <p class="textopergunta" align="center">Identifique-se </p>
            </div>
            <div class="cadastroinputs">
                <div class="">
                    <input class="inpt" placeholder="telefone"type="text"required>
                </div>
                <div class="">
                    <input class="inpt"  placeholder="outroemail@email.com"type="email" required>
                </div>
                <div class="">
                    <input class="inpt"  placeholder="whatsapp"type="text"required>
                </div>
            <div class="cadastroinputs">
                <div class="">
                    <input class="inpt" placeholder="telefone"type="text"required>
                </div>
                <div class="">
                    <input class="inpt"  placeholder="outroemail@email.com"type="email" required>
                </div>
                <div class="">
                    <input class="inpt"  placeholder="whatsapp"type="text"required>
                </div>
                <div class="btn">
                    <button class='btn btn-primary t'>Avançar<i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>

@endsection