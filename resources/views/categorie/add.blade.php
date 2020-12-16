@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulaire D'enregistrement de Categorie</div>

                <div class="card-body">
                    @if (isset($confirmation))

                        @if($confirmation ==1)
                          <div class="alert alert-success">Categorie ajouté</div>
                        @else
                           <div class="alert alert-danger">Categorie non ajouter </div>
                        @endif

                    @endif
                    <form method="POST" action="{{ route('ajoutercategorie') }}">
                        @csrf
                   <div class="form-group">
                    <label for="nomcategorie" class="control-label"> Nom Categorie :</label>
                    <input type="text" name="nomcategorie" id="nomcategorie" class="form-control" />
                    </div>
                         
                    <div class="form-group">
                    <input type="submit" name="envoyer" id="envoyer" value="Enregistrer" class="btn btn-success"/>
                    <input type="reset" name="annuler" id="annuler" value="annuler" class="btn btn-danger" />
                    </div>
                    </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
