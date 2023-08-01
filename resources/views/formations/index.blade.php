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
           <span>IT</span> KOLA
       </p>
    </div>
     @include('navbar')
    <div class="toggle_menu">
    </div>
</header>

<!-- Search Widget -->
<section id="menu">
 <div class="card my-4">
    <h5 class="card-header">Rechercher une formation</h5>
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
    <h1 class="text-center" class="title">Liste des formations :</h1>
    <a href="{{ route('formations.create') }}" class="btn btn-primary" >Ajouter une formation</a>
    <div class="table-responsive" >
        <table class="table table-bordered mt-4" >
            <thead >
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Image</th>
                    <th>Contenu</th>
                    <th>Modifier</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($formations as $formation)
                    <tr>
                        <td>{{ $formation->id }}</td>
                        <td>{{ $formation->title }}</td>
                        <td>
                            <img src="{{ asset('storage/images/'.$formation->picture) }}" alt="image de couverture actuelle" style="max-height: 200px;" >
                        </td>
                        <td>{{ $formation->content }}</td>
                        <td> 
                            <a href="{{ route('formations.edit', ['id' => $formation]) }}" class="btn btn-primary">Modifier</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Aucune formation trouvée.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@include('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-LF8soMnrwF6tc0GLA/VxF4uLx2IBFZXOXtgQxUYv1n3aohVRVlpisJOGGFjnxLCo" crossorigin="anonymous"></script>
</body>
</html>
