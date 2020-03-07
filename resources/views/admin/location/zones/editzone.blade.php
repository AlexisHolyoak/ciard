<div class="modal fade" id="edit-zone-{{$zone->id}}" tabindex="-1" role="dialog" aria-labelledby="edit-zone-{{$zone->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('admin.location.update.zone',$zone)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar Zona: {{$zone->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="type" class="col-md-4 col-form-label text-md-right">Tipo de zona</label>

                    <div class="col-md-6">
                        <select name="type" class="form-control" id="" required>
                            <option {{($zone->type == 'BARRIO')?'selected':''}} value="BARRIO">BARRIO</option>
                            <option {{($zone->type == 'SECTOR')?'selected':''}} value="SECTOR">SECTOR</option>
                            <option {{($zone->type == 'URBANIZACIÓN')?'selected':''}} value="URBANIZACIÓN">URBANIZACIÓN</option>
                            <option {{($zone->type == 'CENTRO POBLADO')?'selected':''}} value="CENTRO POBLADO">CENTRO POBLADO</option>
                            <option {{($zone->type == 'CASERIO')?'selected':''}} value="CASERIO">CASERIO</option>
                        </select>

                        @error('type')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required value="{{$zone->name}}" >

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
            </form>
        </div>

    </div>
</div>
