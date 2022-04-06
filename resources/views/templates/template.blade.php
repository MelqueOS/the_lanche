<!DOCTYPE html>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> @yield("titulo")</title>

   <!-- BOOTSTRAP STYLE -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <!-- BOOTSTRAP ICONS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

   <!-- CSS -->
   <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
   <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}" />
   <link rel="stylesheet" href="{{asset('css/custom.css')}}" />
   <link rel="stylesheet" href="{{asset('css/padroes.css')}}">
   
   <!-- GOOGLE FONTS -->
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        @yield("conteudo")
    </div>
</body>

</html>



<!-- <script>

var btn1=document.getElementById("btn1");
var btn2=document.getElementById("btn2");
var btn3=document.getElementById("btn3");

btn1.onclick=function(){
    document.getElementById("frame1").style.display = "none";
    document.getElementById("frame2").style.display = "flex";
}
btn2.onclick=function(){
    document.getElementById("frame2").style.display = "none";
    document.getElementById("frame3").style.display = "flex";
}


</script> -->