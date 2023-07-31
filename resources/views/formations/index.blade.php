<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tous les articles</h1>

	<p>
		<!-- Lien pour créer un nouvel article : "formations.create" -->
		<a href="{{ route('formations.create') }}" title="Créer un article" >Créer un nouveau formation</a>
	</p>

	<!-- Le tableau pour lister les articles/formations -->
	<table border="1" >
		<thead>
			<tr>
				<th>Titre</th>
				<th colspan="2" >Opérations</th>
			</tr>
		</thead>
		<tbody>
			<!-- On parcourt la collection de formation -->
			@foreach ($formations as $formation)
			<tr>
				<td>
					<!-- Lien pour afficher un formation : "formations.show" -->
					<a href="{{ route('formations.show', $formation) }}" title="Lire l'article" >{{ $formation->title }}</a>
				</td>
				<td>
					<!-- Lien pour modifier un formation : "formations.edit" -->
					<a href="{{ route('formations.edit', $formation) }}" title="Modifier l'article" >Modifier</a>
				</td>
				<td>
					<!-- Formulaire pour supprimer un formation : "formations.destroy" -->
					<form method="formation" action="{{ route('formations.destroy', $formation) }}" >
						<!-- CSRF token -->
						@csrf
						<!-- <input type="hidden" name="_method" value="DELETE"> -->
						@method("DELETE")
						<input type="submit" value="x Supprimer" >
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>