@extends('admin.inicio')
@section('contenido')


    <div class="md-card">
        <div class="md-card-content">
            {!! Form::open(['route'=>'horas_trabajo.store', 'method'=>'POST']) !!}


            <h3 class="heading_a"><strong>HORAS TRABAJADAS</strong></h3>

            <div class="uk-grid" data-uk-grid-margin="">

                {{--FORMULARIO--}}
                <div class="uk-width-medium-1-3">





                    {{--pimera columna--}}
                    <div class="uk-form-row">
                        <div class="md-input-wrapper md-input-filled"><label>Horas Trabajadas:</label>
                            {!!Form::number('Horas',null,['class'=>'md-input ','id'=>'actividad'])  !!}
                            <span class="md-input-bar"></span></div>
                    </div>
                    {{--fin primera columna--}}


                    <div class="uk-form-row">
                        {{--<div class="uk-width-medium-1-3">--}}
                            {{--<span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>--}}
                            <label for="uk_dp_1">fecha de Trabajo:</label>
                            {!! Form::text('fechaTrabajo', null,['class'=>'md-input', 'id'=>'uk-width-medium-1-3', 'data-uk-datepicker'=>'{format:"DD.MM.YYYY"}','required']) !!}
                            {{--<input class="md-input" type="text" id="uk_dp_1" data-uk-datepicker="{format:'DD.MM.YYYY'}">--}}



                        {{--</div>--}}
                    </div>









                </div>
                {{--FIN FORMULARIO--}}













            </div>

            <style>
                .material-icons2{
                    background: transparent;
                    border: 0;
                    margin: 0 auto;
                    padding: 0;
                    margin-top: 3px;

                    font-family: 'Material Icons';
                    font-weight: 400;
                    font-style: normal;
                    font-size: 50px;
                    display: inline-block;
                    /* width: 1em; */
                    /* height: 1em; */
                    line-height: 1;
                    text-transform: none;
                    letter-spacing: normal;
                    -webkit-font-smoothing: antialiased;
                    text-rendering: optimizeLegibility;
                    -moz-osx-font-smoothing: grayscale;
                    -webkit-font-feature-settings: 'liga';
                    font-feature-settings: 'liga';
                    vertical-align: -1px;
                    color: white;
                    cursor: pointer;
                    /*color: rgba(0,0,0,.54)*/
                }
            </style>



            <div class="md-fab-wrapper">
                <a class="md-fab md-fab-primary" href="#" id="product_edit_submit">
                    {{ Form::button('<i class="material-icons2"></i>', ['type' => 'submit', 'class' => 'material-icons2'] )  }}
                    {{--{!! Form::submit('Registrar',['class'=>'material-icons']) !!}--}}
                    {{--<i class="material-icons"></i>--}}
                </a>
            </div>

            <div class="uk-grid" data-uk-grid-margin="">

                <div class="uk-width-medium-1-6">

                    {{--{!! Form::submit('Registrar',['class'=>'md-btn md-btn-success']) !!}--}}

                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>


    {{--////////////////lista/////////////////--}}









    {{--/////////////////////////////////////--}}


    <div class="uk-grid" >
        {{--<h4 class="heading_a uk-margin-bottom">Listado</h4>--}}
        <div class="uk-width-medium-1">
            <div class="md-card" data-uk-grid-margin>
                <div class="md-card-content">

                    <h3 class="heading_a"><strong>LISTADO </strong></h3>
                    <ul class="uk-tab" data-uk-tab="{connect:'#tabs_anim1', animation:'scale'}">
                        <li class="uk-active"><a href="#">Niño</a></li>



                    </ul>
                    <ul id="tabs_anim1" class="uk-switcher uk-margin">
                        <li>
                            {{--tabla--}}


                            <div class="md-card-content">
                                <div class="uk-overflow-container">
                                    <table class="uk-table uk-table-hover">
                                        <thead>
                                        <tr>
                                            <th>Nombre </th>
                                            <th>Horas</th>
                                            <th>fecha</th>
                                            <th></th>
                                            <th></th>

                                        </tr>
                                        </thead>

                                        <tbody>
                                        {{--@foreach( $nino as $educador)--}}
                                        {{--<tr>--}}
                                        {{--<td>{{$educador->datos_persona->nombre}}</td>--}}
                                        {{--<td>{{$educador->datos_persona->apellido}}</td>--}}
                                        {{--<td>{{$educador->datos_persona->fechanacimiento}}</td>--}}
                                        {{--<td>{{$educador->actividad}}</td>--}}
                                        {{--<td>{{$educador->responsable}}</td>--}}
                                        {{--<td>{{$educador->datos_persona->telefono}}td>--}}

                                        {{--<td>{{$educador->datos_persona->direccion}}</td>--}}
                                        {{--<td>--}}
                                        {{--<div class="uk-width-medium-1-6">--}}
                                        {{--<a class="md-btn md-btn-primary" href="#">Editar</a>--}}
                                        {{--aca--}}
                                        {{--<a> {!! link_to_route('listadonino.edit', $title = 'Editar', $parameters = $educador->datos_persona->id_datos_persona, $attributes = ['class'=>'md-btn md-btn-primary']) !!}</a>--}}
                                        {{--aca--}}

                                        {{--</div>--}}
                                        {{--</td>--}}
                                        {{--<td>--}}
                                        {{--<div class="uk-width-medium-1-6">--}}
                                        {{--<a class="md-btn md-btn-danger" href="#">Eliminar</a>--}}

                                        {{--{!!Form::open(['route'=>['listadonino.destroy',$educador->datos_persona->id_datos_persona], 'method'=>'DELETE'])!!}--}}

                                        {{--{!! Form::submit('Eliminar ',['class'=>'md-btn md-btn-danger']) !!}--}}
                                        {{--{!!Form::close()!!}--}}
                                        {{--</div>--}}
                                        {{--</td>--}}
                                        {{--</tr>--}}
                                        {{--@endforeach--}}

                                        </tbody>

                                    </table>

                                    <ul class="uk-pagination uk-margin-medium-top uk-margin-medium-bottom">

                                        {{--{!! with(new App\Page\CustomPagination($educadores))->render() !!}--}}
                                        {{--{{ $educadores->render() }}--}}

                                    </ul>
                                </div>



                            </div>





                            {{--fin_tabla--}}
                        </li>


                    </ul>
                </div>
            </div>
        </div>

    </div>
    {{--////////////////////////////////////--}}






@stop
@section('js2')



    <script>

            $("#calendar").kendoCalendar();

            $('#settings_time_format').on('change', function () {
                $.ajax({
                    type:'get',
                    url:'{{URL::to('/')}}/actividad/'+$(this).val(),
                    success:function(res){
                        $('#actividad').val(res);
                    }
                });
            });

    </script>


@stop