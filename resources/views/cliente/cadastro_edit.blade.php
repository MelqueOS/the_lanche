@extends("templates.template")
@section("titulo", "CADASTRAR")
@section('conteudo')

<div>
    <form action="/cliente" method="POST"  id="msform">

        <fieldset class="label-input-form">

            <label for="">Nome</label>
            <input type="text" name="nome" placeholder="nome">
            <label for="">Email</label>
            <input type="email" name="email" placeholder="email">
            <label for="">senha</label>
            <input type="password" name="pass" placeholder="senha">
            <label for="">csenha</label>
            <input type="password" name="pass" placeholder="confirmarsenha">
            <div class="">
                <input type="button" name="next" class="next action-button" value="Next" />
            </div>
        </fieldset>

        <fieldset class="label-input-form">
            <label for="">telefone</label>
            <input type="text" name="telefone" placeholder="telefone">
            <label for="">datanascimento</label>
            <input type="date" name="datanascimento" placeholder="datanascimento">
            <label for="">whatsapp</label>
            <input type="text" name="whatsapp" placeholder="whatsapp">
            <label for="">tipologadouro</label>
            <select name="tipologadouro" class="inptselect" required <option value="1" selected="selected">Avenida</option>
                <option value="2">Rua</option>
                <option value="3">Fazenda</option>
                <option value="4">Rodovia</option>
                <option value="5">Condominio</option>
            </select>
            <div class="">
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
            </div>
        </fieldset>

        <fieldset class="label-input-form">
            <label for="">logradouro</label>
            <input type="text" name="logradouro" placeholder="logradouro">
            <label for="">bairro</label>
            <input type="text" name="bairro" placeholder="bairro">
            <label for="">numero</label>
            <input type="number" name="numero" placeholder="numero">
            <label for="">referencia</label>
            <input type="text" name="referencia" placeholder="referencia">
            <label for="">complemento</label>
            <input type="text" name="complemento" placeholder="complemento">
            <button type="submit">Enviar</button>
            <div class="">
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="submit" name="submit" class="submit action-button" value="Submit" />
            </div>
        </fieldset>
    </form>
</div>
@endsection