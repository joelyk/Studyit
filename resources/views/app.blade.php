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
                    <span>Study</span> IT
                </p>
             </div>
              @include('navbar')

             <div class="toggle_menu">

             </div>
      </header>
 
      <!-- section accueil home -->
      <section id="home">
        <div class="left">
            <h4>Bienvenue Chez : </h4>
            <h1> StudyIT </h1>
            <p>
              StudyIT est une plateforme d'apprentissage en ligne dédiée à vous offrir les meilleurs cours pour développer vos compétences et atteindre vos objectifs académiques et professionnels. Notre mission est de rendre l'éducation accessible à tous, en fournissant des formations de qualité, dispensées par des experts dans leur domaine.
            </p>
            <button> <a href="{{route('personnes.create')}}">S'inscrire Maintenant</a></button>
        </div>
        <div class="right">
            <img src="{{ asset('images/onlinestudyit.png') }}" alt="studyit"> 
        </div>
      </section>
      
      
      <section id="menu">
       
        <img src="{{ asset('images/genius_Winners.png') }}" alt="studyit"> 
      </section>
      
      @yield('contentformation')
       
      @yield('contentformulaire')

      @yield('contentaffichagepersonne')

      @yield('contentsearch')

      @yield('contentaffichageformation')
<!-- Section  a propos de nous-->
       <section id="about_us">
          <h4 class="mini_title">A propos de Nous</h4>
          <h2 class="title">Pourquoi nous choisir ?</h2>
          <div class="about">
            <div class="left">
                <img src="{{ asset('images/excellence.png') }}">
            </div>

            <div class="right">
                <h3> Nos Formations</h3>
                <P>
                  Nous proposons une large gamme de formations dans divers domaines, allant des sciences et de la technologie aux arts et aux langues. Que vous soyez étudiant, professionnel en reconversion ou simplement passionné d'apprendre, vous trouverez des cours adaptés à vos besoins et à votre niveau.
                </P>
                <h3>   Des Cours de Qualité </h3>
                <P>
                  Tous nos cours sont soigneusement conçus pour vous offrir une expérience d'apprentissage enrichissante. Nos instructeurs sont des professionnels qualifiés, passionnés par leur métier, qui mettent tout en œuvre pour vous transmettre leur savoir de manière claire et captivante.                </P>
                <button> <a href="/formations"> Decouvre Plus</a></button>
            </div>
          </div>
       </section> 
        <!--Footer-->
        <footer>
            <div class="references">
                <div class="reference">
                    <img src="{{ asset('images/computer.png') }}" alt="horloge">
                    <h2>Pandacodeur.com</h2>
                    <p></p> 
                </div>
                <div class="reference">
                    <img src="{{ asset('images/endroit.png') }}" alt="horloge">
                    <h2>Dschang-Cameroun</h2>
                    <p></p> 
                </div>
                <div class="reference">
                    <img src="{{ asset('images/telephone.png') }}" alt="horloge">
                    <h2>+237 658395978</h2>
                    <p></p> 
                </div>
                <hr>
            </div>
            <p class="footer_text">Copyright © 2023 Tous les droits sont réservés. Realise par <span>Joël_yk</span>. </p>
        </footer>
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
