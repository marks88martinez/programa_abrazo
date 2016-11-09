
@extends('admin.inicio')
@section('contenido')


    {{--listado--}}
    {{--@foreach( $ninofuente as $nino)--}}
        {{--{!! $nino->educador->datos_persona  !!}--}}
        {{--{!! $nino->educador->datos_persona->nombre!!}--}}
    {{--@endforeach--}}
    <h4 class="heading_a uk-margin-bottom">Listado</h4>
    <div class="uk-grid" >
        <div class="uk-width-medium-1">
            <div class="md-card" data-uk-grid-margin>
                <div class="md-card-content">
                    <ul class="uk-tab" data-uk-tab="{connect:'#tabs_anim1', animation:'scale'}">
                        <li class="uk-active"><a href="#">Fuente calle</a></li>



                    </ul>
                    <ul id="tabs_anim1" class="uk-switcher uk-margin">
                        <li>
                            {{--tabla--}}


                            <div class="md-card-content">
                                <div class="uk-overflow-container">
                                    <table class="uk-table uk-table-hover">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Educador </th>
                                            <th>Centro</th>
                                            <th>Nombre del titular</th>
                                            <th>Domicilio</th>
                                            <th>Visita Numero</th>
                                            <th>Etapa Seguimiento</th>
                                            <th>Dimesiones Trabajadas</th>
                                            <th>Descripcion</th>
                                            <th>Resultado</th>
                                            <th>Acuerdo</th>
                                            <th>Proxima Visita</th>

                                            <th></th>
                                            <th></th>

                                        </tr>
                                        </thead>

                                        <tbody>


                                        @foreach( $apoyo as $apoyos)
                                            <tr>
                                                <td>{{$apoyos->id_apoyo_familiars}}</td>
                                                <td>{{$apoyos->educadores->datos_persona->nombre}}</td>
                                                {{--<td>{{$apoyos->educador->datos_persona->nombre}}</td>--}}
                                                <td>{{$apoyos->centro?'Pdte Franco':'Ciudad del este'}}</td>
                                                <td>{{$apoyos->nombre_titular}}</td>
                                                <td>{{$apoyos->domicilio}}</td>
                                                <td>{{$apoyos->visita_numero}}</td>
                                                <td>{!! $etapa[$apoyos->etapa_seguimiento] !!}</td>
                                                <td>{!! $dimension[$apoyos->dimensiones_t] !!}</td>

                                                <td>{{$apoyos->Descripción}}</td>
                                                <td>{{$apoyos->resultados}}</td>
                                                <td>{{$apoyos->acuerdos}}</td>
                                                <td>{{$apoyos->proxima_visita}}</td>



                                                {{--<td>{{$educador->datos_persona->direccion}}</td>--}}
                                                {{--<td>--}}
                                                    {{--<div class="uk-width-medium-1-6">--}}
                                                        {{--<a class="md-btn md-btn-warning" href="{{URL::to('/horas_trabajo')}}"> h/trabajos</a>--}}

                                                        {{--<a> {!! link_to_route('horas_trabajo.edit', $title = ' H/Trabajos', $parameters = $nino->id_fuente_calle, $attributes = ['class'=>'md-btn md-btn-warning']) !!}</a>--}}

                                                    {{--</div>--}}
                                                {{--</td>--}}
                                                <td>
                                                    <div class="uk-width-medium-1-6">
                                                        <a class="md-btn md-btn-primary" href="#">Editar</a>

                                                {{--<a> {!! link_to_route('listadonino.edit', $title = 'Editar', $parameters = $educador->datos_persona->id_datos_persona, $attributes = ['class'=>'md-btn md-btn-primary']) !!}</a>--}}

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="uk-width-medium-1-6">
                                                        <a class="md-btn md-btn-danger" href="#">Eliminar</a>

                                                        {{--{!!Form::open(['route'=>['listadonino.destroy',$educador->datos_persona->id_datos_persona], 'method'=>'DELETE'])!!}--}}

                                                        {{--{!! Form::submit('Eliminar ',['class'=>'md-btn md-btn-danger']) !!}--}}
                                                        {{--{!!Form::close()!!}--}}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>

                                    </table>

                                    <ul class="uk-pagination uk-margin-medium-top uk-margin-medium-bottom">

                                        {{--{!! with(new App\Page\CustomPagination($educadores))->render() !!}--}}
                                    {{--{{ $educadores->render() }}--}}

                                    </ul>
                                </div>


                                {{--<ul class="uk-pagination uk-margin-medium-top uk-margin-medium-bottom">--}}
                                    {{--<li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>--}}
                                    {{--<li class="uk-active"><span>1</span></li>--}}
                                    {{--<li><a href="#">2</a></li>--}}
                                    {{--<li><a href="#">3</a></li>--}}
                                    {{--<li><a href="#">4</a></li>--}}
                                    {{--<li><span>…</span></li>--}}
                                    {{--<li><a href="#">20</a></li>--}}
                                    {{--<li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>--}}
                                {{--</ul>--}}


                            </div>





                            {{--fin_tabla--}}
                        </li>

                    </ul>
                </div>
            </div>
        </div>



    </div>

    @stop