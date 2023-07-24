<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Mes personnes</title>
</head>
<body>
    @include('navbar')
    <!-- Search Widget -->
    <div class="card my-4">
        <h1 class="card-header">Rechercher un personne</h1>
        <form class="card-body" action="/search" method="GET" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Rechercher..." name="q">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="submit">Go!</button>
                </span>
            </div>
        </form>
    </div>

    <div class="container">
        <h2>
            <a href="{{route('personnes.create')}}" class="btn btn-primary">Ajouter un personne</a>
        </h2>

        <h1>Liste des personnes recherchés :</h1>
        <h3 class="my-4">Résultat de recherche pour : <small>{{$key}}</small></h3>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Sexe</th>
                    <th>Niveau d'études</th>
                    <th>Filière</th>
                    <th>Spécialité</th>
                    <th>Adresse</th>
                    <th>Numéro de téléphone</th>
                    <th>Adresse e-mail</th>
                    <th>Âge</th>
                    <th>Domaine intéressé</th>
                    <th>Description du projet professionnel</th>
                    <th>Exigences pour le stage</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($personnes as $personne)
                    <tr>
                        <td>{{$personne->id}}</td>
                        <td>{{ $personne->first_name }}</td>
                        <td>{{ $personne->last_name }}</td>
                        <td>{{ $personne->gender }}</td>
                        <td>{{ $personne->education_level }}</td>
                        <td>{{ $personne->field }}</td>
                        <td>{{ $personne->specialization }}</td>
                        <td>{{ $personne->address }}</td>
                        <td>{{ $personne->phone_number }}</td>
                        <td>{{ $personne->email }}</td>
                        <td>{{ $personne->age }}</td>
                        <td>{{ $personne->interests }}</td>
                        <td>{{ $personne->career_project }}</td>
                        <td>{{ $personne->stage_requirements }}</td>
                        <td> 
                            <a href="{{route('personnes.edit', ['id'=> $personne])}}" class="btn btn-primary">Modifier</a>
                        </td>
                        <td>
                            <form action="{{route('personnes.destroy', ['id'=> $personne])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" value="delete">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="15">Aucun personne trouvé.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-LF8soMnrwF6tc0GLA/VxF4uLx2IBFZXOXtgQxUYv1n3aohVRVlpisJOGGFjnxLCo" crossorigin="anonymous"></script>
</body>
</html>
