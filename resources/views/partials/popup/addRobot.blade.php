<div class="modal fade" id="addRobot" tabindex="-1" role="dialog" aria-labelledby="EntrepriseLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter robot</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form method="POST" action="{{ route('storeRobot') }}">
                @csrf
                <div class="modal-body">
                        <div class="form-group">
                            <label for="nomsérie">numéro de série</label>
                            <input type="text" class="form-control" placeholder="numéro de série" name="nomserie"required>
                        </div>
                        <div class="form-group">
                            <label for="nomModele">nom de modéle</label>
                            <select class="col form-control" id="nomModele" name="nomModele">
                                @foreach ($modeles as $modele )
                                <option value="{{ $modele->id }}">{{ $modele->name }}</option>
                                @endforeach
                            </select>
                        </div> 
                        <div class="form-group">
                            <label for="nomemployeur">nom d'employeur</label>
                            <select class="col form-control" id="nomemployeur" name="nomemployeur">
                                @foreach ($employeurs as $employeur )
                                <option value="{{ $employeur->id }}">{{ $employeur->name }}</option>
                                @endforeach
                            </select>
                        </div> 
                       
                        <div class="form-group">
                            <label for="dateProduction">date de production</label>
                            <input type="date" class="form-control" placeholder="Date d'ambauche" name="dateProduction"required>
                        </div>
                        <div class="form-group">
                            <label for="status">status</label>
                            <input type="text" class="form-control" placeholder="status" name="status"required>
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