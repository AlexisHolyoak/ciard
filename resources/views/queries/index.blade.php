@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Bienvenido al modulo de consultas especializadas
                    </div>
                    <div class="card-body">
                        Aqui podras encontrar una manera simplificada de visualizar el detalle de los desastres.
                        <div class="row">
                            <div class="col-md-6">
                                <br>
                                <a href="">Consultar desastres por distrito</a>
                                <br>
                                <a href="">Consultar afectados por desastre</a>
                                <br>
                                <a href="">Consultar servicios perdidos en un desastre</a>
                                <br>
                                <a href="">Consultar infraestructuras por desastre</a>
                            </div>
                            <div class="col-md-6">
                                <br>
                                <a href="">Consultar situación de una persona en un desastre</a>
                                <br>
                                <a href="">Consultar situación de una infraestructura en un desastre</a>
                                <br>
                                <a href="">Consultar fallecidos, desaparecidos, lesionados en un desastre</a>
                                <br>
                                <a href="">Consultar infraestructuras por tipo de construcción</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
