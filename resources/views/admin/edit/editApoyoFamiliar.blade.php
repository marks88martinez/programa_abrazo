@extends('admin.inicio')
@section('contenido')

    <div class="md-card">
        <div class="md-card-content">

            {!! Form::model($datos,['route'=>['apoyofamiliar.update',$datos], 'method'=>'PUT']) !!}


            <h3 class="heading_a"><strong>SEGUIMIENTO FAMILIAR </strong></h3>
            <div class="uk-grid" data-uk-grid-margin="">

                {{--FORMULARIO--}}
                <div class="uk-width-medium-1-2">
                    {{--pimera columna--}}
                    <h3 class="heading_a">CENTRO Nº:</h3>

                    {{--fin primera columna--}}


                    <br>




                    {{--pimera columna--}}
                    <div class="uk-form-row">
                        <div class="md-input-wrapper md-input-filled"><label>APOYO FAMILIAR:</label>
                            {{--{!! Form::text('apoyofamiliar',$educadora, ['class'=>'md-input','required']) !!}--}}
                            <span class="md-input-bar"></span></div>
                    </div>
                    {{--fin primera columna--}}


                    {{--pimera columna--}}
                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><label>APOYO FAMILIAR:</label>
                            {!! Form::select('centro', array('1' => 'Pdte Franco', '2' => 'Ciudad del Este'),null,['data-md-selectize'=>'','id'=>'select_demo_1']) !!}

                            <span class="md-input-bar"></span></div>
                    </div>
                    {{--fin primera columna--}}


                    {{--pimera columna--}}
                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><label>Nombre Titular:</label>
                            {!! Form::text('nombre_titular',null, ['class'=>'md-input','required']) !!}
                            <span class="md-input-bar"></span></div>
                    </div>
                    {{--fin primera columna--}}

                    {{--pimera columna--}}
                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><label>Domicilio:</label>
                            {!! Form::text('domicilio',null, ['class'=>'md-input','required']) !!}
                            <span class="md-input-bar"></span></div>
                    </div>
                    {{--fin primera columna--}}

                    {{--pimera columna--}}
                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><label>Visita Numero:</label>
                            {!! Form::number('visita_numero',null, ['class'=>'md-input','required']) !!}
                            <span class="md-input-bar"></span></div>
                    </div>
                    {{--fin primera columna--}}


                    {{--pimera columna--}}
                    <br>

                    <div class="uk-width-row">
                        <h3 class="heading_a">Etapa Seguimineto:</h3>
                        <p>
                            {!! Form::radio('etapa_seguimiento', '1', $datos->etapa_seguimiento == 1,['id'=>'radio_demo_1','data-md-icheck'=>'','checked']) !!}
                            <label for="radio_demo_1" class="inline-label">1ra Etapa</label>
                        </p>
                        <p>
                            {!! Form::radio('etapa_seguimiento', '2', $datos->etapa_seguimiento == 2,['id'=>'radio_demo_2','data-md-icheck'=>'']) !!}
                            <label for="radio_demo_2" class="inline-label">2da Etapa</label>
                        </p>
                        <p>
                            {!! Form::radio('etapa_seguimiento', '3', $datos->etapa_seguimiento == 3,['id'=>'radio_demo_3','data-md-icheck'=>'']) !!}
                            <label for="radio_demo_3" class="inline-label">3ra Etapa</label>
                        </p>

                    </div>
                    {{--fin primera columna--}}



                    {{--pimera columna--}}
                    <br>

                    <div class="uk-width-row">
                        <h3 class="heading_a">Dimensiones Trabajadas:</h3>
                        <p>
                            {!! Form::radio('dimensiones_t', '1', $datos->dimensiones_t == 1,['id'=>'radio_demo_4','data-md-icheck'=>'','checked']) !!}
                            <label for="radio_demo_4" class="inline-label">Identificación</label>
                        </p>
                        <p>
                            {!! Form::radio('dimensiones_t', '2', $datos->dimensiones_t == 2,['id'=>'radio_demo_5','data-md-icheck'=>'']) !!}
                            <label for="radio_demo_5" class="inline-label">Salud</label>
                        </p>
                        <p>
                            {!! Form::radio('dimensiones_t', '3', $datos->dimensiones_t == 3,['id'=>'radio_demo_6','data-md-icheck'=>'']) !!}
                            <label for="radio_demo_6" class="inline-label">Educación</label>
                        </p>
                        <p>
                            {!! Form::radio('dimensiones_t', '4', $datos->dimensiones_t == 4,['id'=>'radio_demo_7','data-md-icheck'=>'']) !!}
                            <label for="radio_demo_7" class="inline-label">Empleo/Ingresos</label>
                        </p>
                        <p>
                            {!! Form::radio('dimensiones_t', '5', $datos->dimensiones_t == 5,['id'=>'radio_demo_8','data-md-icheck'=>'']) !!}
                            <label for="radio_demo_8" class="inline-label">Seguridad AlimentariaSaneamiento Básico </label>
                        </p>
                        <p>
                            {!! Form::radio('dimensiones_t', '6', $datos->dimensiones_t == 6,['id'=>'radio_demo_9','data-md-icheck'=>'']) !!}
                            <label for="radio_demo_9" class="inline-label">Dinámica Familiar</label>
                        </p>
                        <p>
                            {!! Form::radio('dimensiones_t', '7', $datos->dimensiones_t == 7,['id'=>'radio_demo_10','data-md-icheck'=>'']) !!}
                            <label for="radio_demo_10" class="inline-label">Habilitabilidad </label>
                        </p>

                    </div>
                    {{--fin primera columna--}}

                    {{--pimera columna--}}
                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><label>Descripcion :</label>
                            {!! Form::text('Descripción',null, ['class'=>'md-input','required']) !!}
                            <span class="md-input-bar"></span></div>
                    </div>
                    {{--fin primera columna--}}

                    {{--pimera columna--}}
                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><label>Resultados :</label>
                            {!! Form::text('resultados',null, ['class'=>'md-input','required']) !!}
                            <span class="md-input-bar"></span></div>
                    </div>
                    {{--fin primera columna--}}

                    {{--pimera columna--}}
                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><label>Acuerdos :</label>
                            {!! Form::text('acuerdos',null, ['class'=>'md-input','required']) !!}
                            <span class="md-input-bar"></span></div>
                    </div>
                    {{--fin primera columna--}}

                    {{--pimera columna--}}
                    <div class="uk-form-row">
                        <div class="md-input-wrapper md-input-filled"><label>Proxima Visita :</label>
                            {!! Form::date('proxima_visita', null,['class'=>'md-input', 'id'=>'uk-width-medium-1-3', 'data-uk-datepicker'=>'{format:"DD.MM.YYYY"}','required']) !!}
                            <span class="md-input-bar"></span></div>
                    </div>
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

    @stop
{{--@section('js')--}}
    {{--<script>--}}
        {{--var markers = [];--}}
        {{--function mapClickHandler(latLng) {--}}
            {{--$('.latField').val(latLng.lat());--}}
            {{--$('.lngField').val(latLng.lng());--}}
        {{--}--}}

        {{--function setMarker(map, latLng) {--}}
            {{--var marker = new google.maps.Marker({--}}
                {{--position: latLng,--}}
                {{--map: map--}}
            {{--});--}}
            {{--map.setCenter(latLng);--}}
            {{--for(var i= 0; i < markers.length; i++) {--}}
                {{--deleteMarker(markers[i]);--}}
            {{--}--}}
            {{--marker.addListener("rightclick", function() {--}}
                {{--deleteMarker(marker);--}}
                {{--$('.latField').val('');--}}
                {{--$('.lngField').val('');--}}
            {{--});--}}
            {{--markers.push(marker);--}}
        {{--}--}}

        {{--function deleteMarker(marker) {--}}
            {{--marker.setMap(null);--}}
        {{--}--}}
    {{--</script>--}}
{{--@stop--}}

@section('js')
    <script >
        //        $(document).ready(function(){
        $('.uk-width-medium-1-2 input').each(function(){
            if( $(this).val().length != 0 ) {
                $(this).parent().addClass('md-input-filled');

            }

        })




        //        })
    </script>
@stop