<div class="modal fade" id="showEmployeur{{ $employeurId }}" tabindex="-1" role="dialog" aria-labelledby="EntrepriseLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">details Employeur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
                <div class="modal-body">
                    <li class="list-group-item">nom de employeur : {{ $employeur->name }}</li>
                    <li class="list-group-item">email de employeur :     {{ $employeur->email }}</li>
                    <li class="list-group-item">position de employeur :  {{ $employeur->position }}</li>
                    <li class="list-group-item">date d'aumbauche d'employeur :  {{ $employeur->hire_date }}</li>   
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>