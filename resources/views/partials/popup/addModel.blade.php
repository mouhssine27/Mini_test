<div class="modal fade" id="addModel" tabindex="-1" role="dialog" aria-labelledby="EntrepriseLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter modele</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form method="POST" action="{{ route('storeModel') }}">
                @csrf
                <div class="modal-body">
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" placeholder="Nom de model" name="nomModel"required>
                        </div>
                        <div class="form-group">
                            <label for="fabricant">Fabricant</label>
                            <input type="text" class="form-control" placeholder="fabricant de modele" name="fabricant"required>
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <textarea class="form-control" id="Description" rows="3"placeholder="descriotion de modele" name="description" ></textarea>
                          </div>
                        <div class="form-group">
                            <label for="cout">Coût</label>
                            <input type="number" class="form-control" placeholder="Coût de model " name="cout"required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Annuler</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>