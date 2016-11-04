@extends('admin.inicio')
@section('contenido')


    <div class="md-card">
        <div class="md-card-content">
            {!! Form::open(['route'=>'fuenteCalle.store', 'method'=>'POST']) !!}


            <h3 class="heading_a"><strong>REGISTRO DIARIO DE  CALLE -  NIÑOS/AS  BENEFICIARIOS DEL PROGRAMA  DE 6 A 13 AÑOS</strong></h3>
            <div class="uk-grid" data-uk-grid-margin="">

                {{--FORMULARIO--}}
                <div class="uk-width-medium-1">
                    {{--pimera columna--}}
                    <h3 class="heading_a">CENTRO Nº:</h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-row">
                            {!! Form::select('centro', array('1' => 'Pdte Franco', '2' => 'Ciudad del Este'),null,['data-md-selectize'=>'','id'=>'select_demo_1']) !!}

                        </div>

                    </div>
                    {{--fin primera columna--}}


                    <br>


                    {{--pimera columna--}}
                    <div class="uk-form-row">
                        <div class="md-input-wrapper md-input-filled"><label>Educador/ra:</label>
                            {!!Form::text('educador',$educadora,['class'=>'md-input'])  !!}
                            <span class="md-input-bar"></span></div>
                    </div>
                    {{--fin primera columna--}}

                    {{--pimera columna--}}
                    {{--<div class="uk-form-row">--}}
                        {{--<div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1" data-uk-grid-margin>--}}
                            {{--<div>--}}
                                {{--<label for="settings_time_format" class="uk-form-label">Responsable:</label>--}}
                                {{--{!! Form::select('responsable', $resp ,null,['data-md-selectize'=>'','id'=>'settings_time_format_1','required']) !!}--}}
                            {{--</div>--}}
                            {{--<div>--}}
                            {{--<label for="settings_date_format" class="uk-form-label">CI:</label>--}}
                            {{--{!!Form::text('nombre',null,['class'=>'md-input','required'])  !!}--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--fin primera columna--}}





                    {{--pimera columna--}}
                    {{--<div class="uk-form-row">--}}
                        {{--<div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1" data-uk-grid-margin>--}}
                            {{--<div>--}}
                                {{--<label for="settings_time_format" class="uk-form-label">Resp. Verificacion: </label>--}}
                                {{--<select id="settings_time_format" name="settings_time_format" data-md-selectize>--}}
                                    {{--<option value="">Select</option>--}}
                                    {{--<option value="m">Marcos</option>--}}
                                    {{--<option value="H:i">08:25</option>--}}
                                    {{--<option value="H:i:s">08:25:16</option>--}}
                                    {{--<option value="g:i a">08:25 am</option>--}}
                                    {{--<option value="g:i A">08:25 AM</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                    {{--fin primera columna--}}


                    {{--pimera columna--}}
                    <div class="uk-form-row">
                        <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1" data-uk-grid-margin>
                            <div>
                                <label for="settings_time_format" class="uk-form-label">Nombre y Apellido  del niño/a</label>
                                {!! Form::select('iddato_nino', $datos ,null,['data-md-selectize'=>'','id'=>'settings_time_format','required']) !!}
                            </div>
                            {{--<div>--}}
                                {{--<label for="settings_date_format" class="uk-form-label">CI:</label>--}}
                                {{--{!!Form::text('nombre',null,['class'=>'md-input','required'])  !!}--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    {{--fin primera columna--}}



                    {{--pimera columna--}}
                    <div class="uk-form-row">
                        <div class="md-input-wrapper md-input-filled"><label>Actividad:</label>
                            {!!Form::text('actividad',null,['class'=>'md-input ','id'=>'actividad','disabled'])  !!}
                            <span class="md-input-bar"></span></div>
                    </div>
                    {{--fin primera columna--}}

                    {{--pimera columna--}}
                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><label>Foco:</label>
                            {!!Form::text('foco',null,['class'=>'md-input','required'])  !!}
                            <span class="md-input-bar"></span></div>
                    </div>
                    {{--fin primera columna--}}

                    {{--pimera columna--}}
                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><label>Procedencia:</label>
                            {!!Form::text('procedencia',null,['class'=>'md-input','required'])  !!}
                            <span class="md-input-bar"></span></div>
                    </div>
                    {{--fin primera columna--}}

                    {{--pimera columna--}}
                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><label>Observación:</label>
                            {!!Form::textarea('observacion',null,['class'=>'md-input','required'])  !!}
                            <span class="md-input-bar"></span></div>
                    </div>
                    {{--fin primera columna--}}

                    {{--pimera columna--}}
                    {{--<div class="uk-form-row">--}}
                        {{--<div class="md-input-wrapper"><label>Calendario:</label>--}}
                            {{--<div id="calendar"></div>--}}
                            {{--<span class="md-input-bar"></span></div>--}}
                    {{--</div>--}}
                    {{--fin primera columna--}}




                </div>
                {{--FIN FORMULARIO--}}


                {{--/////////////////////////////////////--}}











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