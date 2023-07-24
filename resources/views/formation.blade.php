
@extends('app')

@section('contentaffichageformation')
    <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header">Rechercher une Formation</h5>
        <form class="card-body" action="/search" method="GET" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Rechercher..." name="q">
                <button class="btn btn-secondary" type="submit">Go!</button>
            </div>
        </form>
    </div>

    <div class="container">
        <h1 class="text-center">Liste de nos Formations :</h1>
        <div class="table-responsive">
            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Contenue</th>
                        <th>Inscrits</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($formations as $fromation)
                        <tr>
                            <td>{{$personne->id}}</td>
                            <td>{{ $formation->title }}</td>
                            <td>{{ $formation->content }}</td>
                          
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
@endsection