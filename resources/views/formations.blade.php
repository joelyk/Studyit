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

<section id="menu">
    <h4 class="mini_title">Nos Formations</h4>
    <h2 class="title"> Certifiantes </h2>
    @foreach ($formations as $form)
    <div class="dishes">
          <div class="dish">
            <img src="{{ asset('images/python.png') }}">
            <h2>{{$form->title}}</h2>
            <a href="geniusniveau1.Nombre de Formations"> Plus d'infos </a>
          </div>
          <div class="dish">
           <img src="{{ asset('images/laravel.png') }}">
           <p> Nombre de Formations 2</p>
           <h2>{{$form->title}}</h2>
           <a href="geniusniveau2.Nombre de Formations"> Plus d'infos </a>
         </div>
         <div class="dish">
           <img src="{{ asset('images/django.jpg') }}">
           <p> Nombre de Formations 3</p>
           <h2>{{$form->title}}</h2>
           <a href="geniusniveau3.Nombre de Formations"> Plus d'infos </a>
         </div>
    </div>
    @endforeach
    
  </section>

  @include('footer')

</body>
</html>
