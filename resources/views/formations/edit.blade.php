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
    <h1>Modifier une formation :</h1>
    <div class="container" style="width: 60%; margin: 20 auto;">
        <form action="{{ route('formations.update', ['id' => $formation]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <fieldset style="width: 50%; margin: 0 auto;">
                <legend>Modifier les informations de la formation</legend>
                <div class="form-group">
                    <label for="title">Titre :</label>
                    <input type="text" id="title" name="title" value="{{ $formation->title }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="picture">Image :</label>
                    <input type="file" id="picture" name="picture" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">Contenu :</label>
                    <textarea id="content" name="content" class="form-control" required>{{ $formation->content }}</textarea>
                </div>
            </fieldset>

            <!-- You can include other fields related to formations here -->

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
   </section>

</body>
@include('footer')
</html>
