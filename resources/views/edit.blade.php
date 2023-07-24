
@extends('app')

@section('contentaffichagepersonne')
<body>
    <h1>Modifier un personne :</h1>
    <div class="container" style="width: 50%; margin: 0 auto;">
        <form action="{{route('personnes.update', ['id'=> $personne])}}" method="POST">
            @csrf
            @method('put')
            <fieldset style="width: 50%; margin: 0 auto;">
                <legend>Modifier vos informations personnelles</legend>
                <div class="form-group">
                    <label for="first_name">Prénom :</label>
                    <input type="text" id="first_name" name="first_name" value="{{$personne->first_name}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Nom :</label>
                    <input type="text" id="last_name" name="last_name" value="{{$personne->last_name}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="gender">Sexe :</label>
                    <input type="text" id="gender" name="gender" value="{{$personne->gender}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="education_level">Niveau d'études :</label>
                    <input type="text" id="education_level" name="education_level" value="{{$personne->education_level}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="field">Filière :</label>
                    <input type="text" id="field" name="field" value="{{$personne->field}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="specialization">Spécialité :</label>
                    <input type="text" id="specialization" name="specialization" value="{{$personne->specialization}}" class="form-control">
                </div>
            </fieldset>

            <fieldset style="width: 50%; margin: 0 auto;">
                <legend>Modifier vos coordonnées</legend>
                <div class="form-group">
                    <label for="address">Adresse :</label>
                    <input type="text" id="address" name="address" value="{{$personne->address}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone_number">Numéro de téléphone :</label>
                    <input type="text" id="phone_number" name="phone_number" value="{{$personne->phone_number}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Adresse e-mail :</label>
                    <input type="email" id="email" name="email" value="{{$personne->email}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="age">Âge :</label>
                    <input type="text" id="age" name="age" value="{{$personne->age}}" class="form-control">
                </div>
            </fieldset>

            <fieldset style="width: 50%; margin: 0 auto;">
                <legend>Modifier les informations sur le stage</legend>
                <div class="form-group">
                    <label for="interests">Domaine intéressé par le stage :</label>
                    <input type="text" id="interests" name="interests" value="{{$personne->interests}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="career_project">Description du projet professionnel :</label>
                    <textarea id="career_project" name="career_project" class="form-control" rows="5" required>{{$personne->career_project}}</textarea>
                </div>
                <div class="form-group">
                    <label for="stage_requirements">Ce qu'il vous faut pour mener à bien votre stage :</label>
                    <select id="stage_requirements" name="stage_requirements" class="form-control">
                        <option value="Fonctionnement plateforme Upwork" {{$personne->stage_requirements == 'Fonctionnement plateforme Upwork' ? 'selected' : ''}}>Fonctionnement plateforme Upwork</option>
                        <option value="Autre" {{$personne->stage_requirements == 'Autre' ? 'selected' : ''}}>Autre</option>
                    </select>
                </div>
            </fieldset>

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</body>
@endsection