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
    
    <div class="dishes">
      @foreach ($formations as $form)
          <div class="dish">
            <img src="{{ asset('images/python.png') }}">
            <p> {{$form->title}}</p>
            <h2>{{$form->created_at}}</h2>
            <a href="#"> Plus d'infos </a>
          </div>
          @endforeach
          @foreach ($formations as $form)
          <div class="dish">
           <img src="{{ asset('images/laravel.png') }}">
           <p> {{$form->title}}</p>
           <h2>{{$form->created_at}}</h2>
           <a href="#"> Plus d'infos </a>
         </div>
         @endforeach
         @foreach ($formations as $form)
         <div class="dish">
           <img src="{{ asset('images/django.jpg') }}">
           <p> {{$form->title}}</p>
           <h2>{{$form->created_at}}</h2>
           <a href="{{route('formation.show', ['id'=> $form])}}" > Plus d'infos </a>
         </div>
         @endforeach
    </div>

   
    
  </section>

  @include('footer')

</body>
</html>
