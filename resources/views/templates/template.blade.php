<!DOCTYPE html>
<head>
<title> @yield("titulo")</title>
   <link rel="stylesheet"href="{{asset('css/bootstrap.css')}}"/>
   <link rel="stylesheet"href="{{asset('css/bootstrap-icons.css')}}"/>
   <link rel="stylesheet"href="{{asset('css/custom.css')}}"/>
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800&display=swap" rel="stylesheet">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="">  
@yield("login")
</div>
</body>
</html>