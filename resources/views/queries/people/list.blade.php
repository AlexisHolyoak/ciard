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
                        <div class="table-responsive">
                            <table class="display" style="width: 100%" id="habitants_table">
                                <thead>
                                <tr>
                                    <th data-priority="1">Nombres</th>
                                    <th data-priority="2">Apellido paterno</th>
                                    <th data-priority="3">Apellido materno</th>
                                    <th>Tipo de documento</th>
                                    <th>Número de documento</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>Sexo</th>
                                    <th>Departamento</th>
                                    <th>Provincia</th>
                                    <th>Distrito</th>
                                    <th>Zona</th>
                                    <th>Espacio urbano</th>
                                    <th>Embarazo (semanas)</th>
                                    <th>Discapacidad</th>
                                    <th>Enfermedad crónica</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($habitants as $habitant)
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
                fixedHeader: true
            } );
        } );
    </script>
@endsection
