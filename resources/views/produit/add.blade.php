@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulaire D'enregistrement de Produit</div>

                <div class="card-body">
                    @if (isset($confirmation))

                        @if($confirmation ==1)
                          <div class="alert alert-success">Produit ajouté</div>
                        @else
                           <div class="alert alert-danger">Produit non ajouter </div>
                        @endif

                    @endif
                    <form method="POST" action="{{ route('ajouterproduit') }}">
                        @csrf
                   <div class="form-group">
                    <label for="nomproduit" class="control-label"> Nom Produit :</label>
                    <input type="text" name="nomproduit" id="nomproduit" class="form-control" />
                    </div>

                    <div class="form-group">
                    <label for="referenceproduit" class="control-label"> Reference Produit :</label>
                    <input type="text" name="referenceproduit" id="referenceproduit" class="form-control" />
                    </div>
                   
                    <div class="form-group">
                    <label for="quantiteproduit" class="control-label"> Quantite Produit :</label>
                    <input type="text" name="quantiteproduit" id="quantiteproduit" class="form-control" />
                    </div>
             
                    <div class="form-group">
                    <label for="prixproduit" class="control-label">Prix Produit :</label>
                    <input type="text" name="prixproduit" id="prixproduit" class="form-control" />
                    </div>
             
                    <div class="form-group">
                    <label for="photoproduit" class="control-label"> Photo :</label>
                    <input type="tel" name="photoproduit" id="photoproduit" class="form-control" />
                    </div>
                    
                    <div class="form-group">
                        <label for="id_categorie"> ID-Categorie </label><strong>*</strong>
                    <select name="id_categorie" id="id_categorie">
                      <option value="">Choisir categorie</option>
                      @foreach($les_categorie as $categorie)
                                  <option value="{{$categorie->id}}">
                                      {{$categorie->libelle}}
                                  </option>
                      @endforeach
                          
                    </div><br/>
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
