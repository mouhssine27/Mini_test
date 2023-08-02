<div class="modal fade" id="showRobot{{ $robotId }}" tabindex="-1" role="dialog" aria-labelledby="EntrepriseLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">details Robot</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
                <div class="modal-body">
                    <li class="list-group-item">nom de serie robot :{{ $robot->serial_number}}</li>
                    <li class="list-group-item">nom de employeur : {{ $robot->employee->name }}</li>
                    <li class="list-group-item">email de employeur :  {{ $robot->employee->email }}</li>
                    <li class="list-group-item">position de employeur:  {{ $robot->employee->position }}</li>  
                    <li class="list-group-item">nom de modele:   {{ $robot->modele->name }}</li>    
                    <li class="list-group-item">fabricant de modele:    {{ $robot->modele->manufacturer }}</li> 
                    <li class="list-group-item">description de modele:      {{$robot->modele->cost }}</li>  
                    <li class="list-group-item">cout de modele:      {{ $robot->modele->description }}</li> 
                    <li class="list-group-item">status de robot:     {{ $robot->status}}</li>  
                    <li class="list-group-item">date de production de robot:    {{ $robot->production_date}}</li>  
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>