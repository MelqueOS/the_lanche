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
            <div class="row"> 
            <div class="form-group col-6">
              <input type="text" name="produto" required />
            </div>
            <div class="form-group col-6">
              <select name="tipo" class="inptselect" required>
                        <option value="1" selected="selected">comida</option>
                        <option value="2"></option>
                        
              </select>
            </div>
            <div class="form-group col-6">
              <input type="text" name="quantidade" required />
            </div>
            <div class="form-group col-6">
              <input type="text" name="valor" required />
            </div>
            <div class="form-group row-6">
              <textarea ></textarea>
            </div>
          </div>

      </div>
      <div>
      
        <div class="item2 d-flex flex-nowrap justify-content-center mt-5"> 
          <button class="btnsave">Salvar</button>
          <button class="btncancel">Cancelar</button>
     </div>
      </div>
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