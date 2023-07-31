<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editer un formation</h1>

	<!-- Si nous avons un formation $formation -->
	@if (isset($formation))

	<!-- Le formulaire est géré par la route "formations.update" -->
	<form method="formation" action="{{ route('formations.update', $formation) }}" enctype="multipart/form-data" >

		<!-- <input type="hidden" name="_method" value="PUT"> -->
		@method('PUT')

	@else

	<!-- Le formulaire est géré par la route "formations.store" -->
	<form method="formation" action="{{ route('formations.store') }}" enctype="multipart/form-data" >

	@endif

		<!-- Le token CSRF -->
		@csrf
		
		<p>
			<label for="title" >Titre</label><br/>

			<!-- S'il y a un $formation->title, on complète la valeur de l'input -->
			<input type="text" name="title" value="{{ isset($formation->title) ? $formation->title : old('title') }}"  id="title" placeholder="Le titre du formation" >

			<!-- Le message d'erreur pour "title" -->
			@error("title")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<!-- S'il y a une image $formation->picture, on l'affiche -->
		@if(isset($formation->picture))
		<p>
			<span>Couverture actuelle</span><br/>
			<img src="{{ asset('storage/images/'.$formation->picture) }}" alt="image de couverture actuelle" style="max-height: 200px;" >
		</p>
		@endif

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

			<!-- S'il y a un $formation->content, on complète la valeur du textarea -->
			<textarea name="content" id="content" lang="fr" rows="10" cols="50" placeholder="Le contenu du formation" >{{ isset($formation->content) ? $formation->content : old('content') }}</textarea>

			<!-- Le message d'erreur pour "content" -->
			@error("content")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<input type="submit" name="valider" value="Valider" >

	</form>

</body>
</html>