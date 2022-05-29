<html>

<head>
    <title>{{$titulo}}</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('css/padroes.css')}}">
    <link rel="stylesheet" href="{{asset('css/painel_gerenciamento.css')}}" />
    
</head>
<div class="conteiner-sm">
    <div class="d-flex">
        <div class="panel">
            <p class="lead">{{$secao[1]}}</p>
            <div class="max-width col">
                <div class="card">
                    @if($produto->url_img != NULL)
                    <img alt="" id="imgPhoto" src="{{asset($produto->url_img);}}" class="imgPhoto">
                    @else
                    <img alt="" id="imgPhoto" src="{{asset('img/mais.webp')}}" class="imgPhoto">
                    @endif
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cadastro">
                <div class='produto'>
                    <form action="/produto" method="POST" enctype="multipart/form-data" class="row">
                        @csrf

                        @if($img_lock == "disable")
                        <input type="file" id="flImage" name="imagem_produto" accept="image/png, image/jpeg" required />
                        @else
                        <input type="file" id="flImage" name="imagem_produto" accept="image/png, image/jpeg" />
                        <input type="hidden" name="att_url" value="{{$produto->url_img}}" />
                        @endif
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
                            <input type="number" name="valor" class="form-control" step="0.01" min=="0.01" value="{{$produto->valor}}" required />
                        </div>
                        <div class="form-group col-12">
                            <label for="descricao">Descriçao</label>
                            <textarea class="form-control" rows="10" name="descricao">{{$produto->descricao}}</textarea>
                        </div>
                        <div class="item2">
                            <div class="col-4">
                                <button type="button" class="btn btn-second bottom "><i class="fas fa-save"></i>Cancelar</button>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary bottom"><i class="fas fa-save"></i>Salvar</button>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="{{$produto->id}}">
                        <input type="hidden" name="tokid" value="{{$tokid}}">
                    </form>
                </div>
            </div>
            <!--Combo-->
            @endforeach
            @endif

        </div> <!-- Cadastro -->
        <div class="listagem">
            <div>
        </div>
    </div>
    <div class="">
        <!--listagem-->
        <div class="content">
            <div class="count">
                <p>{{$secao[2]}}, cadastrado um total de {{count($produtos)}} produtos</p>
            </div>
            <div class="listagem">
                @if(count($produtos) > 0)
                <table>
                    <th>Produto</th>
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
                </table>
                @endif
            </div>
        </div>
    </div>
    </body>

</html>

<script>
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