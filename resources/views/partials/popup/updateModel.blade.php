<div class="modal fade" id="updateModele{{ $modelId }}" tabindex="-1" role="dialog"
    aria-labelledby="EntrepriseLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier Modele</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('updateModele',$model->id ) }}">
                    @csrf
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" placeholder="Nom de model" name="nomModel" value="{{ $model->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="fabricant">Fabricant</label>
                        <input type="text" class="form-control" placeholder="fabricant de modele" name="fabricant" value="{{ $model->manufacturer }}" required>
                    </div>
                    <div class="form-group">
                        <label for="Description">Description</label>
                        <textarea class="form-control" id="Description" rows="3"placeholder="descriotion de modele" name="description"  >{{ $model->description }}</textarea>
                      </div>
                    <div class="form-group">
                        <label for="cout">Coût</label>
                        <input type="number" class="form-control" placeholder="Coût de model " name="cout" value="{{ $model->cost }}" required>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>