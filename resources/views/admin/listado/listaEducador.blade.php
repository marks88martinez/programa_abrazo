
@extends('admin.inicio')
@section('contenido')


    <h4 class="heading_a uk-margin-bottom">Listado de Educador</h4>
<div class="md-card uk-margin-medium-bottom">
    <div class="md-card-content">
        <div class="uk-overflow-container">
            <table class="uk-table uk-table-hover">
                <thead>
                <tr>
                    <th>Nombre </th>
                    <th>Apellido</th>
                    <th>fecha de nacimiento</th>
                    <th>cargo</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Direccion</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach( $educadores as $educador)
                <tr>
                    <td>{{$educador->datos_persona->nombre}}</td>
                    <td>{{$educador->datos_persona->apellido}}</td>
                    <td>{{$educador->datos_persona->fechanacimiento}}</td>
                    <td>{{$educador->datos_persona->tipo_cargo?'Educador':'sin cargo'}}</td>
                    <td>{{$educador->datos_persona->telefono}}</td>
                    <td>{{$educador->datos_persona->email}}</td>
                    <td>{{$educador->datos_persona->direccion}}</td>
                    <td>
                        <div class="uk-width-medium-1-6">
                            <a class="md-btn md-btn-primary" href="#">Editar</a>
                        </div>
                    </td>
                    <td>
                        <div class="uk-width-medium-1-6">
                            <a class="md-btn md-btn-danger" href="#">Eliminar</a>
                        </div>
                    </td>
                </tr>
                    @endforeach

                </tbody>






            </table>
        </div>
    </div>
</div>









    <h4 class="heading_a uk-margin-bottom">Listado de Responsable</h4>
    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content">
            <div class="uk-overflow-container">
                <table class="uk-table uk-table-hover">
                    <thead>
                    <tr>
                        <th>Nombre </th>
                        <th>Apellido</th>
                        <th>fecha de nacimiento</th>
                        <th>cargo</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Direccion</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach( $responsable as $educador)
                        <tr>
                            <td>{{$educador->datos_persona->nombre}}</td>
                            <td>{{$educador->datos_persona->apellido}}</td>
                            <td>{{$educador->datos_persona->fechanacimiento}}</td>
                            <td>{{$educador->datos_persona->tipo_cargo?'Responsable':'sin cargo'}}</td>
                            <td>{{$educador->datos_persona->telefono}}</td>
                            <td>{{$educador->datos_persona->email}}</td>
                            <td>{{$educador->datos_persona->direccion}}</td>
                            <td>
                                <div class="uk-width-medium-1-6">
                                    <a class="md-btn md-btn-primary" href="#">Editar</a>
                                </div>
                            </td>
                            <td>
                                <div class="uk-width-medium-1-6">
                                    <a class="md-btn md-btn-danger" href="#">Eliminar</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>






                </table>
            </div>
        </div>
    </div>
    @stop