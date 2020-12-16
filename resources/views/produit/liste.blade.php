@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des Produits</div>

                <div class="card-body">
                    <table class="table">
                       <tr>
                           <th>Identifiant</th>
                           <th>Nom du Produit</th>
                           <th>Quantite  Restant</th>
                           <th>Categorie  Produit</th>
                           <th>Prix du Produit</th>
                           <th>Action</th>
                           <th>Action</th>
                       </tr>
                       @foreach($liste_produit as $produit)
                       <tr>
                           <td>{{ $produit->id }}</td>
                           <td>{{ $produit->nom }}</td>
                           <td>{{ $produit->quantite }}</td>
                           <td>{{ $produit->categorie_id }}</td>
                           <td>{{ $produit->prix }}</td>
                           <td><a class="btn btn-success" href={{ route('editproduit' , ['id' => $produit->id]) }}>Editer</a></td>
                           <td><a class="btn btn-danger" href={{ route('deleteproduit' , ['id' => $produit->id]) }} onclick="return confirm(Voulez-vous supprimer le client?)";>Supprimer</a></td>
                       </tr>
                       @endforeach
                    </table>
                    {{-- {{ $liste_produit->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
