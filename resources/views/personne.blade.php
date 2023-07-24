<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Mes personnes</title>
    <style>
        .table-bordered {
            border: 2px solid #dee2e6;
        }
    </style>
</head>
<body>
    @include('navbar')
    <!-- Search Widget -->
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

    <div class="container">
        <h1 class="text-center">Liste des personnes :</h1>
        <a href="{{route('personnes.create')}}" class="btn btn-primary">Ajouter un personne</a>
        <div class="table-responsive">
            <table class="table table-bordered mt-4">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-LF8soMnrwF6tc0GLA/VxF4uLx2IBFZXOXtgQxUYv1n3aohVRVlpisJOGGFjnxLCo" crossorigin="anonymous"></script>
</body>
</html>
