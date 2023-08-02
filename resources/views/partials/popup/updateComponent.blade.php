<div class="modal fade" id="updateComponent{{ $componentId }}" tabindex="-1" role="dialog"
    aria-labelledby="EntrepriseLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier Component</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('updateComponent',$component->id ) }}">
                    @csrf
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" placeholder="Nom de component" name="nomComponent" value="{{ $component->name }}"required>
                    </div>
                   
                    <div class="form-group">
                        <label for="Description">Description</label>
                        <textarea class="form-control" id="Description" rows="3"placeholder="description de component" name="description" >{{ $component->description }}</textarea>
                      </div>
                    <div class="form-group">
                        <label for="cout">Coût</label>
                        <input type="number" class="form-control" placeholder="Coût de component " name="cout" value="{{ $component->cost }}" required>
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