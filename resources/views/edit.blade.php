
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

<body>
   <section id="menu">
    <h1>Modifier un personne :</h1>
    <div class="container" style="width: 60%; margin: 20 auto;">
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
            </fieldset>

            <fieldset style="width: 50%; margin: 0 auto;">
                <legend>Modifier vos coordonnées</legend>
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

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
   </section>


 
</body>
 @include('footer')
</html>
