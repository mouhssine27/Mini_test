<div class="modal fade" id="showModel{{ $modelId }}" tabindex="-1" role="dialog" aria-labelledby="EntrepriseLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">details modele</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
                <div class="modal-body">
                    <li class="list-group-item">nom de modele : {{ $model->name }}</li>
                    <li class="list-group-item">fabricant de modele :     {{ $model->manufacturer }}</li>
                    <li class="list-group-item">description de modele :   {{ $model->description }}</li>
                    <li class="list-group-item">cout de modele:  {{ $model->cost }}</li>   
                   
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>