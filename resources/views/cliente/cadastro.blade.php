@extends("templates.template")
@section("titulo", "CADASTRAR")
@section('conteudo')

<div class="cont">
    <div class="lg">
        <img class='logo' src="{{asset('img/logo.svg')}}" alt="">
    </div>
    <div class="fm">
        <form action="/cliente" method="POST">
                <input type="text"name="nome"placeholder="nome">
                <input type="email"name="email"placeholder="email">
                <input type="password"name="senha"placeholder="senha">
                <input type="password"placeholder="confirmarsenha">
                <input type="text"name="telefone"placeholder="telefone">
                <input type="date"name="datanascimento"placeholder="datanascimento">
                <input type="text"name="whatsapp"placeholder="whatsapp">
                
                <select name="tipologadouro" class="inptselect" required <option value="1" selected="selected">Avenida</option>
                                        <option value="2">Rua</option>
                                        <option value="3">Fazenda</option>
                                        <option value="4">Rodovia</option>
                                        <option value="5">Condominio</option>
                </select>
                <input type="text"name="logradouro"placeholder="logradouro">
                <input type="text"name="bairro"placeholder="bairro">
                <input type="number"name="numero"placeholder="numero">
                <input type="text"name="referencia"placeholder="referencia">
                <input type="text"name="complemento"placeholder="complemento">
                <button type="submit">Enviar</button>
    </form>
</div>
</div>
@endsection