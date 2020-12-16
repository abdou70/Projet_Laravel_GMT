@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des Categorie</div>

                <div class="card-body">
                    <table class="table">
                       <tr>
                           <th>Identifiant</th>
                           <th>libelle Categorie</th>
                           <th>Action</th>
                           <th>Action</th>
                       </tr>
                       @foreach($liste_categorie as $categorie)
                       <tr>
                           <td>{{ $categorie->id }}</td>
                           <td>{{ $categorie->libelle }}</td>
                           <td><a class="btn btn-success" href={{ route('editcategorie' , ['id' => $categorie->id]) }}>Editer</a></td>
                           <td><a class="btn btn-danger" href={{ route('deletecategorie' , ['id' => $categorie->id]) }} onclick="return confirm(Voulez-vous supprimer le client?)";>Supprimer</a></td>
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
