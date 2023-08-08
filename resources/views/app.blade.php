<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CapBuild</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ asset('js/parallax.js-1.5.0/parallax.js') }}"></script>
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

      <!-- section accueil home -->
      <div class="article-pan">


        <section id="home" class="article">
            <div class="left">
                <h4>Bienvenue Chez : </h4>
                <h1> Cap<e>Build</e></h1>
                <p>
                    CapBuild est une plateforme d'apprentissage en ligne dédiée à vous offrir les meilleurs cours pour développer vos compétences et atteindre vos objectifs académiques et professionnels. Notre mission est de rendre l'éducation accessible à tous, en fournissant des formations de qualité, dispensées par des experts dans leur domaine.
                </p>
                <button> <a href="{{route('personnes.create')}}">S'inscrire Maintenant</a></button>
            </div>
            <div class="right">
                <img class="img" src="{{ asset('images/onlinestudyit.png') }}" alt="studyit">
            </div>
        </section>

          <section class="back-img" data-parallax="scroll" data-image-src="{{ asset('images/backgrounds/back1.jpg') }}">
              <section class="article" id="art2">

                  <h4>PRINCIPES PÉDAGOGIQUES</h4>
                  <div class="bottom">
                      <p>
                          Les méthodes que nous employons partent de la réalité des métiers, soit à partir du vécu professionnel des participants, soit à partir d’études de cas ou de cas filmés. Elles utilisent au maximum l'enrichissement réciproque par le groupe. Les apports théoriques ou méthodologiques nécessaires sont précédés de réflexions en groupes et sont suivis de mises en situation.
                      </p>
                  </div>
              </section>
          </section>

          <section class="article" id="art3">

              <h4>METHODES PÉDAGOGIQUES UTILISÉES</h4>
              <div class="bottom">
                  <div class="L">
                      <p>
                          Les démarches pédagogiques utilisées couramment par nos animateurs comprennent cinq phases :
                      </p>
                      <ul>
                          <li>sensibilisation ou introduction au sujet et approche concrète des situations vécues.</li>
                          <li>analyse des situations.</li>
                          <li>apports didactiques.</li>
                          <li>début de mise en pratique en face à face pédagogique</li>
                          <li>mise en pratique sur le lieu de travail.</li>
                      </ul>
                  </div>
                  <div class="R">
                      <p>
                          Ces phases sont mises en œuvre chaque fois que les participants doivent percevoir clairement la nature d'une difficulté.
                          Elles peuvent prendre plusieurs formes selon le degré d'implication possible des participants.
                          Elles prennent toute leur efficacité lorsqu’à l’issue de la formation les stagiaires peuvent mettre en œuvre leurs acquis en situation réelle de travail.
                      </p>
                  </div>
              </div>
          </section>

{{--          <section class="back-img">--}}
              <section class="article" id="art4">
                  <div class="bottom">
                      <div class="L">
                        <ul>
                          <li><h4>Exposé introductif </h4>
                              <span class="det" style="display: none">
                                Cette méthode est utilisée pour donner aux séminaristes les éléments leur permettant d’aborder la phase de pédagogie active qui doit suivre.
                              </span>
                          </li>
                          <li><h4>Jeux de rôles</h4>
                              <span class="det" style="display: none">
                                Ces exercices de mise en pratique de situations relationnelles permettent des prises de conscience ou constituent des entraînements aux techniques d'entretien, que ce soit sur le plan commercial, managérial ou sur le plan des simples relations inter-individuelles. Les rôles se partagent entre les "protagonistes" (généralement au nombre de deux) et les observateurs (généralement le reste du groupe). Les observateurs ont un rôle extrêmement actif car l'animateur leur confie des tâches précises d'observation les exerçant à l'analyse des situations vécues. Des permutations permettent à chacun de bénéficier de l'ensemble des acquisitions.
                                Ces exercices peuvent être filmés en vidéo et exploités immédiatement après si les circonstances et le temps le permettent.
                              </span>
                          </li>
                          <li><h4>Questionnaire formatif</h4>
                              <span class="det" style="display: none">
                                Cette méthode consiste à questionner le groupe, de façon +/- ludique, de manière à provoquer une réflexion des participants à partir de leur expérience professionnelle et de les aider à créer leur propre système de représentation de la réalité.
                              </span>
                          </li>
                          <li><h4>Autodiagnostic</h4>
                              <span class="det" style="display: none">
                                Par cette méthode, l’animateur amène chaque participant à s’interroger sur ses propres pratiques et introduit une distanciation par rapport aux thèmes étudiés.
                              </span>
                          </li>
                          <li><h4>Réflexions et échanges d’expériences</h4>
                              <span class="det" style="display: none">
                                  Ils donnent lieu à des travaux en sous-groupes de trois à quatre personnes. Ce type de travail favorise les échanges d'expériences entre les membres du groupe.
                              </span>
                          </li>
                          <li><h4>Jeux pédagogiques, simulations</h4>
                              <span class="det" style="display: none">
                                  C'est sans doute dans ce domaine que notre expérience est la plus originale : alliant les avantages du "jeu d'entreprise" classique et du "jeu de rôles", les "jeux d'entreprise" permettent une compréhension et une assimilation en profondeur de concepts complexes et interdépendants, fréquents dans les domaines de la gestion et de la stratégie d'entreprises. Ils sont essentiellement utilisés lors de stages intra-entreprises.
                              </span>
                          </li>
                          <li><h4>Utilisation de films pédagogiques</h4>
                              <span class="det" style="display: none">
                                Cette méthode est utilisée pour permettre un travail d’analyse libre et riche d’un sujet complexe en sous-groupes. La vision du film donne toujours lieu à un travail d'analyse par le groupe.
                                Les films ont été soigneusement sélectionnés pour leur richesse de fond et leurs qualités pédagogiques.

                              </span>
                          </li>
                          <li><h4>Jeux de rôles avec intervention d’un comédien professionnel</h4>
                              <span class="det" style="display: none">
                                Dans certaines circonstances où les jeux de rôles peuvent être spécialement délicats et impliquant, le rôle du vis-à-vis de celui tenu professionnellement par le séminariste peut être tenu par un comédien. Disposant d'une série de thèmes "d'improvisation guidée"  et soigneusement gradués, ces derniers donnent une réplique particulièrement réaliste aux séminaristes, qui jouent simplement leur propre rôle et n'ont pas à entrer dans une composition dont ils seraient éloignés ou qui les impliquerait trop.
                                Les résultats de cette méthode ''IT-KOLA'' sont particulièrement spectaculaires.
                              </span>
                          </li>
                          <li><h4>Études de cas pratiques</h4>
                              <span class="det" style="display: none">
                                L'étude d'un cas permet d'analyser ou de mettre en pratique les notions abordées en les resituant dans la complexité de leur utilisation pratique. Cette étude donne toujours lieu à un travail d'analyse en sous-groupes. Les cas sont généralement construits par nos soins afin d'aboutir à une parfaite adéquation avec les objectifs pédagogiques.

                              </span>
                          </li>
                      </ul>

                      </div>
                      <div class="R">
                          <span class="inf">
                              <p>
                                  Cette méthode est utilisée pour donner aux séminaristes les éléments leur permettant d’aborder la phase de pédagogie active qui doit suivre.
                              </p>
                          </span>
                      </div>
                  </div>
              </section>
{{--          </section>--}}

      </div>

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

       @include('footer')
        <script>
            var small_menu = document.querySelector('.toggle_menu')
            var menu = document.querySelector('.menu')
               small_menu.onclick=function(){
                small_menu.classList.toggle('active');
                menu.classList.toggle('responsive');
               }

        </script>
        <script>
            ScrollReveal({
                reset:true,
                distance:'60px',
                duration: 2000,
                delay: 400
            });
            ScrollReveal().reveal('.article h4', { delay: 500,origin: 'left' });
            ScrollReveal().reveal('.article .bottom', { delay: 600,origin: 'right' });
            ScrollReveal().reveal('.img', { delay: 1200,origin: 'right' });

        </script>
</body>
</html>
