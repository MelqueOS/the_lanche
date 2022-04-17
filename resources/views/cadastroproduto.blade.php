<html>
    <head>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('css/padroes.css')}}">
    <link rel="stylesheet" href="{{asset('css/cadastro.css')}}" />
    </head>
    <body>
      <div class="t">
            <div class="max-width col">
            <div class="">
                <img src="camera.png" alt="" id="imgPhoto" class="imgPhoto">
            </div>
            </div>
            <input type="file" id="flImage" name="arquivos"   accept="image/png, image/jpeg"  multiple />
            <form action="/3" method="POST" class="row">
      @csrf
    <div class="form-group col-6">
			<label for="nome">Nome: </label>
      <input type="text" name="produto"class="form-control" required />
	</div>
    <div class="form-group col-6">
        <label for="nome">TIPO: </label>
        <select name="tipo" class="inptselect form-control" required>
                        <option value="1" selected="selected">comida</option>
                        <option value="2"></option>
                        
              </select>
	</div>
    <div class="form-group col-6">
        <label for="nome">Matricula: </label>
        <input type="text" name="quantidade"class="form-control" required />
	</div>

  <div class="form-group col-6">
        <label for="nome">VAL: </label>
        <input type="text" name="valor" required class="form-control"/>
	</div>
  <div class="form-group col-6">
        <label for="nome">DES: </label>
        <textarea class="form-control" ></textarea>
	</div>
	<div class="item2">
    <div>
	<button type="submit" class="btn btn-primary bottom "><i class="fas fa-save"></i>Salvar</button>
    </div>
    <div>
	<button type="submit" class="btn btn-primary bottom"><i class="fas fa-save"></i>Salvar</button>
    </div>
    
</div>

</form>

    </body>
</html>
<script>
  function Checkfiles(){
    var fup = document.getElementById('filename');
    var fileName = fup.value;
    var ext = fileName.substring(fileName.lastIndexOf('.') + 1);

    if(ext =="jpeg" || ext=="png"){
        return true;
    }
    else{
        return false;
    }
}
</script>
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