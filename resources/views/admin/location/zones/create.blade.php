@extends('admin.location.index')
@section('zone')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Nueva zona para el distrito de {{$district->name}}
            </div>
            <div class="card-body">
                <form action="{{route('admin.location.store.zone',$district)}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="type" class="col-md-4 col-form-label text-md-right">Tipo de zona</label>

                        <div class="col-md-6">
                            <select name="type" class="form-control" id="" required>
                                <option value="BARRIO">BARRIO</option>
                                <option value="SECTOR">SECTOR</option>
                                <option value="URBANIZACIÓN">URBANIZACIÓN</option>
                                <option value="CENTRO POBLADO">CENTRO POBLADO</option>
                                <option value="CASERIO">CASERIO</option>
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
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required >

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                            <a href="{{route('admin.location.show.district',$district)}}" class="btn btn-secondary">Atras</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
