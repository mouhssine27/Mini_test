<div class="modal fade" id="updateRobot{{ $robotId }}" tabindex="-1" role="dialog"
    aria-labelledby="EntrepriseLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier Robot</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('updateRobot',$robot->id ) }}">
                    @csrf
                    <div class="form-group">
                        <label for="nomsérie">numéro de série</label>
                        <input type="text" class="form-control" placeholder="numéro de série" name="nomserie"value="{{ $robot->serial_number }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nomModele">nom de modéle</label>
                        <select class="col form-control" id="nomModele" name="nomModele">
                            @foreach ($modeles as $modele )
                            <option value="{{ $modele->id }}" @if($robot->modele_id == $modele->id) selected @endif>{{ $modele->name }}</option>
                            @endforeach
                        </select>
                    </div> 
                    <div class="form-group">
                        <label for="nomemployeur">nom d'employeur</label>
                        <select class="col form-control" id="nomemployeur" name="nomemployeur">
                            @foreach ($employeurs as $employeur )
                            <option value="{{ $employeur->id }}" @if($robot->employee_id == $employeur->id) selected @endif>{{ $employeur->name }}</option>
                            @endforeach
                        </select>
                    </div> 
                   
                    <div class="form-group">
                        <label for="dateProduction">date de production</label>
                        <input type="date" class="form-control" placeholder="date de Production" name="dateProduction" value="{{ $robot->production_date }}" required>
                    </div>
                    <div class="form-group">
                        <label for="status">status</label>
                        <input type="text" class="form-control" placeholder="status" name="status" value="{{ $robot->status }}"required>
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