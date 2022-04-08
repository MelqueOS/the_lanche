@extends("templates.template")
@section("titulo", "CADASTRAR")
@section('conteudo')

<div class="cont">
    <div class="lg">
        <img class='logo' src="{{asset('img/logo.svg')}}" alt="">
    </div>
    <div class="fm">
    <form>
        <main>
            
            <section id="conteudo1" class="">
                <div class="" id="frame1">
                    <div class="title-form">
                        <p>cadastre-se</p>
                    </div>
                    <div class="cadastro-inputs">
                        <div class="row col-12">
                            <div class="name col-5">
                                <input name="nome" type="text" placeholder='Nome' required>
                            </div>
                            <div class="sob-name col-7">
                                <input name="nome" type="text" placeholder='Sobrenome' required>
                            </div>
                        </div>
                        <div class="">
                            <input name="email" type="email" placeholder='Email' required>
                        </div>
                        <div class="">
                            <input name="senha" type="password" placeholder='Senha' required>
                        </div>
                        <div>
                            <input type="password" name='conf-senha' placeholder='Confirme a Senha' required>
                        </div>
                    </div>
                    <div class="btn">
                        <a href="#conteudo2" class='btn btn-primary shadow-none t' id="btn1">Avançar</a>
                    </div>
                </div>
            </section>
    <section id="conteudo2">
    <div class="" id="frame2">
                <div class="title-form">
                    <p class="textopergunta">Dados complementares!</p>
                </div>
                <div class="cadastroinputs">
                    <div class="">
                        <input ame="telefone" type="text" required>
                    </div>
                    <div class="">
                        <input name="datanascimento" nascimento" type="date" required>
                    </div>
                    <div class="">
                        <input name="whatsapp" type="text" required>
                    </div>
                    <div class="btn">
                        <a href="#conteudo3"class='btn btn-primary t' id="btn2">Avançar<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
    </section>
    <section id="conteudo3">
    <div class="" id="frame3" >
                <div class="title-form">
                    <p class="textopergunta">Localize-se! </p>
                </div>
                <div class="cadastroinputs2">
                    <div class="">
                        <div class="">
                            <select name="tipologadouro" class="inptselect" required <option value="1" selected="selected">Avenida</option>
                                <option value="2">Rua</option>
                                <option value="3">Fazenda</option>
                                <option value="4">Rodovia</option>
                                <option value="5">Condominio</option>
                            </select>
                        </div>
                        <div class="">
                            <input name="bairro" type="text" required>
                        </div>
                        <div class="">
                            <input name="complemento" type="text" required>
                        </div>
                    </div>
                    <div class="">
                        <div class="">
                            <input name="logradouro" type="text" required>
                        </div>
                        <div class="">
                            <input name="numero" type="number" required>
                        </div>
                        <div class="">
                            <input name="pontoderef" referência" type="text" required>
                        </div>
                        <div class="btn l">
                            <button type="submit" class='btn btn-primary t pr-5' id="btn3">Finalizar<i class="bi bi-clipboard2-check"></i></button>
                        </div>
                    </div>
                </div>
    </section>

    </main>
    </form>
    </div>
</div>
@endsection