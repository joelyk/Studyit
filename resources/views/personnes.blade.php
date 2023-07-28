<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyIT</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

 <!-- Search Widget -->
 <section>
 <div class="card my-4">
    <h5 class="card-header">Rechercher un personne</h5>
    <form class="card-body" action="/search" method="GET" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Rechercher..." name="q">
            <button class="btn btn-secondary" type="submit">Go!</button>
        </div>
    </form>
</div>
 </section>

<div class="container">
    <h1 class="text-center" class="title">Liste des personnes d'inscrites :</h1>
    <a href="{{route('personnes.create')}}" class="btn btn-primary" >Ajouter un personne</a>
    <div class="table-responsive" >
        <table class="table table-bordered mt-4" >
            <thead >
                <tr>
                    <th>ID</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Sexe</th>
                    <th>Adresse</th>
                    <th>Numéro de téléphone</th>
                    <th>Adresse e-mail</th>
                    <th>Âge</th>
                    <th>Modifier</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($personnes as $personne)
                    <tr>
                        <td>{{$personne->id}}</td>
                        <td>{{ $personne->first_name }}</td>
                        <td>{{ $personne->last_name }}</td>
                        <td>{{ $personne->gender }}</td>
                        <td>{{ $personne->address }}</td>
                        <td>{{ $personne->phone_number }}</td>
                        <td>{{ $personne->email }}</td>
                        <td>{{ $personne->age }}</td>
                        <td>
                            <a href="{{route('personnes.edit', ['id'=> $personne])}}" class="btn btn-primary">Modifier</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="15">Aucune personne trouvé.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
  @include('footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-LF8soMnrwF6tc0GLA/VxF4uLx2IBFZXOXtgQxUYv1n3aohVRVlpisJOGGFjnxLCo" crossorigin="anonymous"></script>
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
