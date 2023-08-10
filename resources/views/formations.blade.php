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
           <span>Cap</span>Build
       </p>
    </div>
     @include('navbar')

    <div class="toggle_menu">
        <span class="center-menu-bar"></span>
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

  <section id="menu">
      <h4 class="mini_title">Nos Formations</h4>
      <h2 class="title"> Certifiantes </h2>
      <div class="dishes">
          <div class="dish">
              <img src="{{ asset('images/python.png') }}">
              <h2>test</h2>
              <div class="pop"><span></span>Populaire</div>
              <div class="desc">
                  qwesdasd lfd fdsplki uiui iui qwesdasd lfd fdsplki uiui iuiqwesdasd lfd fdsplki uiui iuiqwesdasd lfd fdsplki uiui iui
              </div>
              <a href="geniusniveau1.Nombre de Formations"> Plus d'infos </a>
          </div>
          <div class="dish">
              <img src="{{ asset('images/css.jpg') }}">
              <p> Nombre de Formations 2</p>
              <h2>test</h2>
              <a href="geniusniveau2.Nombre de Formations"> Plus d'infos </a>
          </div>
          <div class="dish">
              <img src="{{ asset('images/django.jpg') }}">
              <p> Nombre de Formations 3</p>
              <h2>test</h2>
              <a href="geniusniveau3.Nombre de Formations"> Plus d'infos </a>
          </div>

      </div>
  </section>


  @yield('contentformulaire')

  @yield('contentsearch')

  @yield('contentaffichageformation')



{{--  <!-- Section  a propos de nous-->--}}
{{--  <section id="about_us">--}}
{{--      <h4 class="mini_title">A propos de Nous</h4>--}}
{{--      <h2 class="title">Pourquoi nous choisir ?</h2>--}}
{{--      <div class="about">--}}
{{--          <div class="left">--}}
{{--              <img src="{{ asset('images/excellence.png') }}">--}}
{{--          </div>--}}

{{--          <div class="right">--}}
{{--              <h3> Nos Formations</h3>--}}
{{--              <P>--}}
{{--                  Nous proposons une large gamme de formations dans divers domaines, allant des sciences et de la technologie aux arts et aux langues. Que vous soyez étudiant, professionnel en reconversion ou simplement passionné d'apprendre, vous trouverez des cours adaptés à vos besoins et à votre niveau.--}}
{{--              </P>--}}
{{--              <h3>   Des Cours de Qualité </h3>--}}
{{--              <P>--}}
{{--                  Tous nos cours sont soigneusement conçus pour vous offrir une expérience d'apprentissage enrichissante. Nos instructeurs sont des professionnels qualifiés, passionnés par leur métier, qui mettent tout en œuvre pour vous transmettre leur savoir de manière claire et captivante.                </P>--}}
{{--              <button> <a href="/formations"> Decouvre Plus</a></button>--}}
{{--          </div>--}}
{{--      </div>--}}
{{--  </section>--}}

  @include('footer')
  <script>
      var small_menu = document.querySelector('.toggle_menu')
      var menu = document.querySelector('.menu')
      small_menu.onclick=function(){
          small_menu.classList.toggle('active');
          menu.classList.toggle('responsive');
      }
  </script>
</body>
</html>
