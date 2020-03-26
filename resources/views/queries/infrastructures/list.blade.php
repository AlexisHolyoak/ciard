@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Reporte de infraestructuras a nivel {{$scale}}
                    </div>
                    <div class="card-body">
                        Ocultar o mostrar columnas:
                        <div>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="0">Departamento</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="1">Provincia</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="2">Distrito</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="3">Zona</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="4">Espacio urbano</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="5">Número o lote</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="6">Tenencia (propia)</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="7">Condición de uso</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="8">Techo</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="9">Piso</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="10">Paredes</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="11">Número de pisos</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="12">Agua</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="13">Desagüe</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="14">Electricidad</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="15">Gas natural</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="16">Transporte público</button>
                            <button type="button" class="toggle-vis btn btn-outline-primary btn-sm mb-2" data-toggle="button" aria-pressed="false" autocomplete="off" data-column="17">Telecomunicaciones</button>
                        </div>
                        <table class="mb-2">
                            <tbody>
                            <tr>
                                <td>Cantidad de pisos minima:</td>
                                <td><input type="text" id="min" name="min"></td>
                            </tr>
                            <tr>
                                <td>Cantidad de pisos máxima:</td>
                                <td><input type="text" id="max" name="max"></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="table-responsive">
                            <table class="display" style="width: 100%" id="infrastructure_table">
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
                                @foreach($infrastructures as $infrastructure)
                                    <tr>
                                        <td>{{$infrastructure->DEPARTAMENT}}</td>
                                        <td>{{$infrastructure->PROVINCE}}</td>
                                        <td>{{$infrastructure->DISTRICT}}</td>
                                        <td>{{$infrastructure->ZONE}}</td>
                                        <td>{{$infrastructure->URBAN_SPACE}}</td>
                                        <td>{{$infrastructure->NUMBER}}</td>
                                        <td>{{($infrastructure->TENURE==1)?'SI':'NO'}}</td>
                                        <td>{{$infrastructure->USAGE_CONDITION}}</td>
                                        <td>
                                            @switch($infrastructure->ROOF)
                                                @case(1)CONCRETO ARMADO @break
                                                @case(2)MADERA @break
                                                @case(3)TEJAS @break
                                                @case(4)PLANCHA DE CALAMINA @break
                                                @case(5)CAÑA O ESTERA CON TORTA DE BARRO@break
                                                @case(6)ESTERA @break
                                                @case(7)PAJA, HOJAS DE PALMERA @break
                                                @case(8)OTRO MATERIAL @break
                                            @endswitch
                                        </td>
                                        <td>
                                            @switch($infrastructure->FLOOR)
                                                @case(1)PARQUET O MADERA PULIDA @break
                                                @case(2)LÁMINAS ASFÁLTICAS, VINILOS O SIMILARES @break
                                                @case(3)LOSETA, TERRAZOS, CERÁMICOS @break
                                                @case(4)MADERA @break
                                                @case(5)CEMENTO @break
                                                @case(6)TIERRA @break
                                                @case(7)OTRO MATERIAL @break
                                            @endswitch
                                        </td>
                                        <td>
                                            @switch($infrastructure->WALL)
                                                @case(1)LADRILLO O BLOQUE DE CEMENTO @break
                                                @case(2)PIEDRA O SILLAR CON CAL O CEMENTE @break
                                                @case(3)ADOBE O TAPIAL @break
                                                @case(4)QUINCHE (CAÑA CON BARRO) @break
                                                @case(5)PIEDRA CON BARRO (PIRCA) @break
                                                @case(6)MADERA @break
                                                @case(7)ESTERA @break
                                                @case(8)OTRO MATERIAL @break
                                            @endswitch
                                        </td>
                                        <td>{{$infrastructure->FLOORS_NUMBER}}</td>
                                        <td>{{($infrastructure->WATER==1)?'SI':'NO'}}</td>
                                        <td>{{($infrastructure->SEWERAGE==1)?'SI':'NO'}}</td>
                                        <td>{{($infrastructure->LIGHTS==1)?'SI':'NO'}}</td>
                                        <td>{{($infrastructure->NATURAL_GAS==1)?'SI':'NO'}}</td>
                                        <td>{{($infrastructure->PUBLIC_TRANSPORT==1)?'SI':'NO'}}</td>
                                        <td>{{($infrastructure->TELECOMUNICATIONS==1)?'SI':'NO'}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-2 mb-2">
                            <a href="{{route('queries.infrastructures.index')}}" class="btn btn-secondary">Atras</a>
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
                var min = parseInt( $('#min').val(), 10 );
                var max = parseInt( $('#max').val(), 10 );
                var age = parseFloat( data[9] ) || 0; // use data for the age column

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
            $('#infrastructure_table thead tr').clone(true).appendTo( '#infrastructure_table thead' );
            $('#infrastructure_table thead tr:eq(1) th').each( function (i) {
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

            var table = $('#infrastructure_table').DataTable( {
                orderCellsTop: true,
            } );
            $('button.toggle-vis').on( 'click', function (e) {
                //e.preventDefault();

                // Get the column API object
                var column = table.column( $(this).attr('data-column') );

                // Toggle the visibility
                column.visible( ! column.visible() );
            } );
            $('#min, #max').keyup( function() {
                table.draw();
            } );
        } );
    </script>
@endsection
