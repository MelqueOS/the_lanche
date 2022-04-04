@extends("templates.template")
@section("titulo", $titulo)
@section('conteudo')

<div class="cadastrobotoes" id="frame1">
            <div>
                <p class="textopergunta" align="center">Identifique-se!</p>
            </div>
            <div class="cadastroinputs">
                <div class="">
                    <input class="inpt"name="nome" placeholder="nome"type="text"required>
                </div>
                <div class="">
                    <input class="inpt" name="email" placeholder="email"type="email" required>
                </div>
                <div class="">
                    <input class="inpt" name="senha" placeholder="senha"type="password"required>
                </div>
                <div class="btn">
                    <button class='btn btn-primary t'id="btn1">Avançar<i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
</div>

<div class="cadastrobotoes" id="frame2"style="display:none">
            <div>
                <p class="textopergunta" align="center">Dados complementares!</p>
            </div>
            <div class="cadastroinputs">
                <div class="">
                    <input class="inpt"name="telefone" placeholder="telefone"type="text"required>
                </div>
                <div class="">
                    <input class="inpt" name="datanascimento" placeholder="data de nascimento"type="date" required>
                </div>
                <div class="">
                    <input class="inpt" name="whatsapp"  placeholder="whatsapp"type="text"required>
                </div>
                <div class="btn">
                <button class='btn btn-primary t' id="btn2">Avançar<i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <div class="cadastrobotoes" id="frame3"style="display:none">
            <div>
                <p class="textopergunta" align="center">Localize-se! </p>
            </div>
            <div class="cadastroinputs2">
            <div class="">
                <div class="">
                    
                <select name="tipologadouro" class="inptselect" required placeholder="adsada">              
                    <option value="1" selected="selected">Avenida</option>
                    <option value="2">Rua</option>
                    <option value="3">Fazenda</option>
                    <option value="4">Rodovia</option>
                    <option value="5">Condominio</option>
          	</select>
                </div>
                <div class="">
                    <input class="inpt" name="bairro" placeholder="Bairro"type="text" required>
                </div>
                <div class="">
                    <input class="inpt" name="complemento"  placeholder="Complemento"type="text"required>
                </div>

            </div>
            <div class="">
                <div class="">
                    <input class="inpt" name="logradouro"placeholder="Logradouro"type="text"required>
                </div>
                <div class="">
                    <input class="inpt"  name="numero"placeholder="Numero"type="number" required>
                </div>
                <div class="">
                    <input class="inpt"  name="pontoderef"placeholder="Ponto de referência"type="text"required>
                </div>
                <div class="btn l">
                <button class='btn btn-primary t pr-5' id="btn3">Finalizar<i class="bi bi-clipboard2-check"></i></button>
                </div>
            </div>
        </div>

@endsection