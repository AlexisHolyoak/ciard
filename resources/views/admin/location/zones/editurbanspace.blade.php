<div class="modal fade" id="edit-urbanspace-{{$urbanspace->id}}" tabindex="-1" role="dialog" aria-labelledby="edit-urbanspace-{{$urbanspace->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('admin.location.update.urbanspace',$urbanspace)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar espacio urbano: {{$urbanspace->name}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="type" class="col-md-4 col-form-label text-md-right">Tipo de espacio urbano</label>

                        <div class="col-md-6">
                            <select name="type" class="form-control" id="" required>
                                <option {{($urbanspace->type == 'CALLE')?'selected':''}} value="CALLE">CALLE</option>
                                <option {{($urbanspace->type == 'MANZANA')?'selected':''}} value="MANZANA">MANZANA</option>
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
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required value="{{$urbanspace->name}}" >

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
