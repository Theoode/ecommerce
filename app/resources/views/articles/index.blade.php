@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Nos Produits</h1>

        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('storage/' . $article->photo) }}" class="card-img-top" alt="{{ $article->nom }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->nom }}</h5>
                            <p class="card-text text-muted">{{ $article->description }}</p>
                            <p><strong>Prix :</strong> {{ number_format($article->prix, 2, ',', ' ') }} €</p>
                            <p><strong>Catégorie :</strong> {{ $article->categorie->nom }}</p>
                            <p><strong>Taille :</strong> {{ $article->taille }} – <strong>Couleur :</strong> {{ $article->couleur }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
