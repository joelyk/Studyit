
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
            <p>
                <label for="title" >Titre</label><br/>
                <input type="text" name="title" value="{{ old('title') }}"  id="title" placeholder="Le titre du post" >
    
                <!-- Le message d'erreur pour "title" -->
                @error("title")
                <div>{{ $message }}</div>
                @enderror
            </p>
            <p>
                <label for="picture" >Couverture</label><br/>
                <input type="file" name="picture" id="picture" >
    
                <!-- Le message d'erreur pour "picture" -->
                @error("picture")
                <div>{{ $message }}</div>
                @enderror
            </p>
            <p>
                <label for="content" >Contenu</label><br/>
                <textarea name="content" id="content" lang="fr" rows="10" cols="50" placeholder="Le contenu du post" >{{ old('content') }}</textarea>
    
                <!-- Le message d'erreur pour "content" -->
                @error("content")
                <div>{{ $message }}</div>
                @enderror
            </p>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
   </section>


 
</body>
 @include('footer')
</html>
