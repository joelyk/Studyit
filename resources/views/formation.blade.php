
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyIT</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
  <header>
    <div class="logo">
       <p>
           <span>IT</span> KOLA
       </p>
    </div>
     @include('navbar')

    <div class="toggle_menu">

    </div>
</header>

<body>

   <section id="home">
    <div class="left">
        <h4>Decouvrir : </h4>
        <h1> {{$formation->title}} </h1>
        <p>
            {{$formation->content}}
        </p>
        <button> <a href="{{route('personnes.create')}}">S'inscrire A cette Formation</a></button>
    </div>
    <div class="right">
        <img src="{{ asset('images/laravel.png') }}" alt="Formation logo"> 
    </div>
  </section>


 
</body>
 @include('footer')
</html>
