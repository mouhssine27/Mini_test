<div class="modal fade" id="addProduit" tabindex="-1" role="dialog" aria-labelledby="EntrepriseLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter employeur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form method="POST" action="{{ route('storeEmployee') }}">
                @csrf
                <div class="modal-body">
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" placeholder="Nom de employeur" name="nomEmployeur"required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" placeholder="Email de employeur" name="EmailEmployeur"required>
                        </div>
                        <div class="form-group">
                            <label for="nom">Position</label>
                            <input type="text" class="form-control" placeholder="Position" name="position"required>
                        </div>
                        <div class="form-group">
                            <label for="nom">Date d'ambauche</label>
                            <input type="date" class="form-control" placeholder="Date d'ambauche" name="hire_date"required>
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