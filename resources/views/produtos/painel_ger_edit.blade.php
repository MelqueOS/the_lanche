<html>

<head>
    <title>{{$titulo}}</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('css/padroes.css')}}">
    <link rel="stylesheet" href="{{asset('css/painel_gerenciamento.css')}}" />
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- INPUT MONEY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js" integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<div class="conteiner-fluid">
    <div class="d-flex flex-column">
        <header class="painel d-flex flex-column align-items-center">
            <h1>{{$secao[1]}}</h1>
            <figure class="max-width col">
                @if($produto->url_img != null)
                <img alt="" id="imgHead" src="{{asset($produto->url_img);}}" class="imgPhoto">
                @else
                <img alt="" id="imgPhoto" src="{{asset('img/mais.webp')}}" class="imgPhoto">
                @endif
                <!-- <figcaption>Imagem Do Produto</figcaption> -->
            </figure>
        </header>
        <div class="content">
            <div class='cadastro'>
                <form action="/produto" method="POST" enctype="multipart/form-data" class="row formulario">
                    @csrf

                    <div class="file form-group">
                        <label for="">Imagem Do Produto</label>
                        @if($img_lock == "disable")
                        <input type="file" class='form-control col-11' id="flImage" name="imagem_produto" accept="image/png, image/jpeg" required />
                        @else
                        <input type="file" class='form-control' id="flImage" name="imagem_produto" accept="image/png, image/jpeg" />
                        <input type="hidden" name="att_url" value="{{$produto->url_img}}" />
                        @endif
                    </div>
                    <div class="form-group col-5">
                        <label for="nome_descritivo">Nome do Produto </label>
                        <input type="text" name="nome_descritivo" class="form-control" value="{{$produto->nome_descritivo}}" required />
                    </div>
                    <div class="form-group col-5">
                        <label for="tipo">Tipo de produto</label>
                        <select name="tipo" class="form-control" class="inptselect form-control" required>
                            @foreach($parametro_select as $key_selected => $value_selected)
                            <option value="{{$key_selected}}">{{$value_selected}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-2">
                        <label for="valor">Preço</label>
                        <input type="text" id='valor' name="valor" class="form-control" value="{{$produto->valor}}" maxlength="11" required />
                    </div>
                    <div class="form-group col-12 descricao-form">
                        <label for="descricao">Descriçao</label>
                        <textarea class="form-control" rows="10" name="descricao">{{$produto->descricao}}</textarea>
                    </div>
                    <div class="button-form row">
                        <div class="col-2">
                            <button type="button" class="btn btn-second bottom "><i class="fas fa-save"></i>Cancelar</button>
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-primary bottom"><i class="fas fa-save"></i>Salvar</button>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{$produto->id}}">
                    <input type="hidden" name="tokid" value="{{$tokid}}">
                </form>
            </div>
        </div>
    </div>
    <hr>
    <div class="produtos-genericos  ">
        <div class="content">
            <!--contagem-->
            <div class="count">
                <h2>{{$secao[2]}}</h2>
                <p class='lead'>total de produtos cadastrados: {{count($produtos)}}</p>
            </div>

            <!-- listagem -->
            <div class="listagem">
                @if(count($produtos) > 0)
                @foreach($produtos as $linha)
                <div class="conteudo">
                    <div class='produto'>
                        <div class="img">
                            <img src="{{asset($linha->url_img)}}" id="imgPhoto" alt="" class="imgPhoto">
                        </div>

                        <div class="informacoes ">
                            <div class="nome">{{$linha->nome_descritivo}}</div>
                            <div class="tipo_valor">
                                <div class='tipo d-flex flex-column'>
                                    <label class='under'><strong>Tipo</strong></label>
                                    <p>
                                        @foreach($parametro_select as $key_selected => $value_selected)
                                        @if($linha->tipo == $key_selected)
                                        {{$value_selected}}
                                        @endif
                                        @endforeach
                                    </p>
                                </div>

                                <div class='valor d-flex flex-column'>
                                    <label class='under' for=""><strong>Valor</strong></label>
                                    <p>R${{$linha->valor}}</p>
                                </div>
                            </div>
                            <div class="descricao-content">
                                <div class="desc d-flex flex-column">
                                    <label class='under ' for=""><strong>Descrição</strong></label>
                                    <p class='descricao'>{{$linha->descricao}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class='sep'>

                    <div class='acoes'>
                        <div class="editar">
                            <form method="GET" action="/produto/{{$linha->id}}/edit">
                                @csrf
                                <input type="hidden" name="tokid" value="{{$tokid}}" />
                                <button type="submit" id="editarBotao" class="btn btn-second">
                                    Alterar
                                </button>
                            </form>
                        </div>

                        <div class="apagar">
                            <form method="POST" action="/produto/{{$linha->id}}">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="submit" id="excluirBotao" class="btn btn-primary">Excluir</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
    </body>

</html>

<!-- <table>
                    <th>Produto(s)</th>
                    <th>Açoes</th>
                    <th>Ilustração</th>
                    @foreach($produtos as $linha)
                    <tr>
                        <td>
                            <ul>
                                <li>
                                    {{$linha->nome_descritivo}} custando R${{$linha->valor}}.
                                </li>
                                <li>
                                    Cadastrado como um(a)
                                    @foreach($parametro_select as $key_selected => $value_selected)
                                    @if($linha->tipo == $key_selected)
                                    {{$value_selected}}
                                    @endif
                                    @endforeach
                                    .
                                    {{$linha->descricao}}
                                </li>
                                <li>
                                    Cadastrado em {{ \Carbon\Carbon::parse($produto->created_at)->format('d/m/Y')}} as {{ \Carbon\Carbon::parse($produto->created_at)->format('H:m')}}
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>
                                    <form method="GET" action="/produto/{{$linha->id}}/edit">
                                        @csrf
                                        <input type="hidden" name="tokid" value="{{$tokid}}" />
                                        <input type="submit" id="editarBotao" class="btn btn-danger" value="Alterar dados" />
                                    </form>
                                </li>
                                <li>
                                    <form method="POST" action="/produto/{{$linha->id}}">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <input type="submit" id="excluirBotao" class="btn btn-danger" value="Excluir produto" />
                                    </form>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <div class="max-width col">
                                <img src="{{asset($linha->url_img)}}" id="imgPhoto" alt="" class="imgPhoto">
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table> -->

<script>
    $(document).ready(function() {
        $('#valor').maskMoney({
            prefix: 'R$ ',
            allowNegative: true,
            thousands: '.',
            decimal: ',',
            affixesStay: false
        });


    });


    'use strict'
    let photo = document.getElementById('imgPhoto');
    let file = document.getElementById('flImage');

    photo.addEventListener('click', () => {
        file.click();
    });

    file.addEventListener('change', () => {

        if (file.files.length <= 0) {
            return;
        }

        let reader = new FileReader();

        reader.onload = () => {
            photo.src = reader.result;
        }

        reader.readAsDataURL(file.files[0]);
    });
</script>