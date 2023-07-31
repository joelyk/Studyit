<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <h1>{{ $formation->title }}</h1>

	<img src="{{ asset('storage/'.$formation->picture) }}" alt="Image de couverture" style="max-width: 300px;">

	<div>{{ $formation->content }}</div>

	<p><a href="{{ route('formations.index') }}" title="Retourner aux articles" >Retourner aux formations</a></p>

</body>
</html>