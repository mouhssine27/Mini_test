<div class="modal fade" id="updateEmployeur{{ $employeurId }}" tabindex="-1" role="dialog"
    aria-labelledby="EntrepriseLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier Employeur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('updateEmployeur',$employeur->id ) }}">
                    @csrf
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" placeholder="Nom de employeur" name="nomEmployeur"
                            value="{{ $employeur->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" placeholder="Email de employeur" name="EmailEmployeur"
                        value="{{ $employeur->email }}"  required>
                    </div>
                    <div class="form-group">
                        <label for="nom">Position</label>
                        <input type="text" class="form-control" placeholder="Position" name="position" value="{{$employeur->position }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nom">Date d'ambauche</label>
                        <input type="date" class="form-control" placeholder="Date d'ambauche" name="hire_date"value="{{$employeur->hire_date }}" required>
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
