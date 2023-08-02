<div class="modal fade" id="showComponent{{ $componentId }}" tabindex="-1" role="dialog" aria-labelledby="EntrepriseLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">details employeur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
         
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item">nom de component :  {{ $component->name }}</li>
                        <li class="list-group-item">description de component :    {{ $component->description }}</li>
                        <li class="list-group-item">cout de component : {{ $component->cost }}</li>
                       
                      </ul>
                      
                   
                 
                    
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>