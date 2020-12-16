@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulaire D'enregistrement de Client</div>

                <div class="card-body">
                    @if (isset($confirmation))

                        @if($confirmation ==1)
                          <div class="alert alert-success">Compte ajouté</div>
                        @else
                           <div class="alert alert-danger">Compte non ajouter </div>
                        @endif

                    @endif
                    <form method="POST" action="{{ route('updatecategorie') }}">
                        @csrf
                   <div class="form-group">
                    <label for="id" class="control-label"> Identifiant du  categorie :</label>
                    <input type="text"  readonly="true" name="id" id="id" value="{{ $categorie->id }}" class="form-control" />
                    </div>
                   
                    <div class="form-group">
                        <label for="numcompte" class="control-label"> Nom Categorie :</label>
                        <input type="text" name="nomcategorie" id="nomcategorie" 
                        value="{{ $categorie->libelle }}"  class="form-control" />
                        </div>

                    <div class="form-group">
                    <input type="submit" name="envoyer" id="envoyer" value="Enregistrer" class="btn btn-success"/>
                    <a class="btn btn-danger" href="{{ route('getallcategorie') }}">Annuler</a>
                    </div>
                    </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
