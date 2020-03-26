@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Reporte de personas a nivel {{$scale}}
                    </div>
                    <div class="card-body">
                        Ocultar o mostrar columnas:
                        <div>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="0">Nombres</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="1">Apellido paterno</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="2">Apellido matern</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="3">Tipo de documento</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="4">Número de documento</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="5">Fecha de nacimiento</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="6">Sexo</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="7">Departamento</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="8">Provincia</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="9">Distrito</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="10">Zona</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="11">Espacio urbano</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="12">Embarazo (semanas)</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="13">Discapacidad</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="14">Enfermedad crónica</button>
                        </div>
                        <table class="mb-2">
                            <tbody>
                            <tr>
                                <td>Edad minima:</td>
                                <td><input type="text" id="min_age" name="min_age"></td>
                            </tr>
                            <tr>
                                <td>Edad máxima:</td>
                                <td><input type="text" id="max_age" name="max_age"></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="table-responsive">
                            <table class="display" style="width: 100%" id="habitants_table">
                                <thead>
                                <tr>
                                    <th data-priority="1">Departamento</th>
                                    <th data-priority="2">Provincia</th>
                                    <th data-priority="3">Distrito</th>
                                    <th>Zona</th>
                                    <th>Espacio urbano</th>
                                    <th>Número o lote</th>
                                    <th>Tenencia (propia)</th>
                                    <th>Condición de uso</th>
                                    <th>Techo</th>
                                    <th>Piso</th>
                                    <th>Paredes</th>
                                    <th>Número de pisos</th>
                                    <th>Agua</th>
                                    <th>Desagüe</th>
                                    <th>Electricidad</th>
                                    <th>Gas natural</th>
                                    <th>Transporte público</th>
                                    <th>Telecomunicaciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($habitants  as $habitant)
                                    <tr>
                                        <td>{{$habitant->NAME}}</td>
                                        <td>{{$habitant->FIRST_SURNAME}}</td>
                                        <td>{{$habitant->SECOND_SURNAME}}</td>
                                        <td>@switch($habitant->DOCUMENT_TYPE)
                                                @case(1)D.N.I. @break
                                                @case(2)Pasaporte @break
                                                @case(3)Carnet de extranjeria @break
                                                @case(4)Otro documento @break
                                            @endswitch</td>
                                        <td>{{$habitant->DOCUMENT_NUMBER}}</td>
                                        <td>{{$habitant->BIRTHDAY}}</td>
                                        <td>{{\Carbon\Carbon::parse($habitant->BIRTHDAY)->diff(\Carbon\Carbon::now())->format('%y')}}</td>
                                        <td>{{$habitant->SEX}}</td>
                                        <td>{{$habitant->DEPARTAMENT}}</td>
                                        <td>{{$habitant->PROVINCE}}</td>
                                        <td>{{$habitant->DISTRICT}}</td>
                                        <td>{{$habitant->ZONE}}</td>
                                        <td>{{$habitant->URBAN_SPACE}}</td>
                                        <td>{{($habitant->PREGNANT!=null)? $habitant->PREGNANT : 'NO APLICA'}}</td>
                                        <td>
                                            @switch($habitant->DISABILITY)
                                                @case(0)NO POSEE @break
                                                @case(1)MOVERSE O CAMINAR @break
                                                @case(2)VER @break
                                                @case(3)OÍR @break
                                                @case(4)HABLAR @break
                                                @case(5)MENTAL @break
                                                @case(6)OTRO TIPO DE DISCAPACIDAD @break
                                            @endswitch</td>
                                        <td>@switch($habitant->CHRONIC_DISEASE)
                                                @case(0)NO POSEE @break
                                                @case(1)ANEMIA @break
                                                @case(2)ARRITMIAS CARDIACAS @break
                                                @case(3)ASMA BRONQUIAL @break
                                                @case(4)DESNUTRICIÓN @break
                                                @case(5)DIABETES @break
                                                @case(6)DISLIPMIAS @break
                                                @case(7)ARTRITIS, ARTROSIS, LUPS @break
                                                @case(8)ENFERMEDAD PSIQUIATRICA GRAVE @break
                                                @case(9)EPILEPSIA @break
                                                @case(10)ESQUIZOFRENIA @break
                                                @case(11)GLAUCOMA @break
                                                @case(12)HEPATITIS @break
                                                @case(13)HIPERTENSION ARTERIAL @break
                                                @case(14)HIPERTIROIDISMO - HIPOTIROIDISMO @break
                                                @case(15)HIPERTROFIA PROSTÁTICA BENIGNA @break
                                                @case(16)HIPERUCIREMIA GOT @break
                                                @case(17)INSUFICIENCIA CARDIACA @break
                                                @case(18)INSUFICIENCIA CORONARI @break
                                                @case(19)INSUFICIENCIA RENAL CRÓNICA @break
                                                @case(20)NEUROPATIAS DESMIELIZANTES @break
                                                @case(21)OSTEOPOROSIS Y DESCALSIFICACIÓN GENERAL @break
                                                @case(22)PARKINSON @break
                                                @case(23)TUBERCULOSIS @break
                                                @case(24)VIH @break
                                                @case(25)OTRAS @break
                                            @endswitch</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-2 mb-2">
                            <a href="{{route('queries.people.index')}}" class="btn btn-secondary">Atras</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('style')
    <link href="{{asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.dataTables.min.css">

    <style>
        thead input {
            width: 100%;
        }
    </style>
@endsection
@section('script')
    <script src="{{asset('js/jquery.dataTables.min.js') }}" ></script>

    <script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>
    <script>
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var min = parseInt( $('#min_age').val(), 10 );
                var max = parseInt( $('#max_age').val(), 10 );
                var age = parseFloat( data[6] ) || 0; // use data for the age column

                if ( ( isNaN( min ) && isNaN( max ) ) ||
                    ( isNaN( min ) && age <= max ) ||
                    ( min <= age   && isNaN( max ) ) ||
                    ( min <= age   && age <= max ) )
                {
                    return true;
                }
                return false;
            }
        );
        $(document).ready(function() {
            $('#habitants_table thead tr').clone(true).appendTo( '#habitants_table thead' );
            $('#habitants_table thead tr:eq(1) th').each( function (i) {
                var title = $(this).text();
                $(this).html( '<input type="text" placeholder="Buscar '+title+'" />' );

                $( 'input', this ).on( 'keyup change', function () {
                    if ( table.column(i).search() !== this.value ) {
                        table
                            .column(i)
                            .search( this.value )
                            .draw();
                    }
                } );
            } );

            var table = $('#habitants_table').DataTable( {
                orderCellsTop: true,
            } );
            $('button.toggle-vis').on( 'click', function (e) {
                //e.preventDefault();

                // Get the column API object
                var column = table.column( $(this).attr('data-column') );

                // Toggle the visibility
                column.visible( ! column.visible() );
            } );
            $('#min_age, #max_age').keyup( function() {
                table.draw();
            } );
        } );
    </script>
@endsection
