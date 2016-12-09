@extends('admin.inicio')
@section('contenido')


    <div class="md-card">
        <div class="md-card-content">
            {!! Form::model($datos,['route'=>['listado.update', $datos], 'method'=>'PUT']) !!}


            <h3 class="heading_a">Educador</h3>
            <div class="uk-grid" data-uk-grid-margin="">
                <div class="uk-width-row">
                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><label>Nombre:</label>
                            {!!Form::text('nombre',$datos->nombre,['class'=>'md-input','required'])  !!}


                            <span class="md-input-bar"></span></div>

                    </div>
                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><label>Apellido:</label>
                            {!! Form::text('apellido',$datos->apellido, ['class'=>'md-input','required']) !!}

                            <span class="md-input-bar"></span></div>

                    </div>

                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><label>CI:</label>
                            {!! Form::text('ci',$datos->ci, ['class'=>'md-input','required']) !!}

                            <span class="md-input-bar"></span></div>

                    </div>


                    {{--<h3 class="heading_a">Datepicker</h3>--}}

                        <div class="uk-form-row">
                            <div class="uk-width-medium-1-3">
                                {{--<span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>--}}
                                <label for="uk_dp_1">fecha de nacimiento:</label>
                                {!! Form::date('fechanacimiento',$dat,['class'=>'md-input', 'id'=>'uk-width-medium-1-3', 'data-uk-datepicker'=>'{format:"DD.MM.YYYY"}','required']) !!}
                                {{--<input class="md-input" type="text" id="uk_dp_1" data-uk-datepicker="{format:'DD.MM.YYYY'}">--}}



                            </div>
                        </div>

                    <div class="uk-form-row">

                        <div class="md-input-wrapper"><label>Telefono:</label>
                            {!! Form::text('telefono',$datos->telefono, ['class'=>'md-input']) !!}
                            {{--<input type="text" class="md-input">--}}
                            <span class="md-input-bar"></span></div>

                    </div>




                    {{--pimera columna--}}
                    <div class="uk-form-row">
                        <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1" data-uk-grid-margin>
                            <div>
                                <label for="settings_time_format" class="uk-form-label">Responsable</label>
                                {!! Form::select('id_responsable', $resp ,$educadores->id_responsable,['data-md-selectize'=>'','id'=>'settings_time_format','required']) !!}
                            </div>
                            {{--<div>--}}
                            {{--<label for="settings_date_format" class="uk-form-label">CI:</label>--}}
                            {{--{!!Form::text('nombre',null,['class'=>'md-input','required'])  !!}--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    {{--fin primera columna--}}


                    {{--<div class="uk-form-row">--}}
                      {{-- ACA SELEC--}}


                        {{--<h3 class="heading_a">Cargo</h3>--}}
                        {{--<div class="uk-grid" data-uk-grid-margin>--}}
                            {{--<div class="uk-width-row">--}}
                                {{--{!! Form::select('tipo_cargo', array('1' => 'Responsable', '2' => 'Educador'),null,['data-md-selectize'=>'','id'=>'select_demo_1']) !!}--}}

                            {{--</div>--}}

                        {{--</div>--}}

                    {{--</div>--}}

                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><label>Email:</label>
                            {!! Form::email('email',$datos->email, ['class'=>'md-input','required']) !!}

                            <span class="md-input-bar"></span></div>

                    </div>

                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><label>Passsword:</label>
                            {!! Form::password('password', ['class'=>'md-input']) !!}
                            <span class="md-input-bar"></span></div>

                    </div>

                                <div class="uk-form-row" data-uk-grid-margin>
                                    <h3 class="heading_a">Sexo</h3
                                    <div class="uk-width-medium-2-5">
                                        <p>

                                                {!! Form::radio('sexo', 'H', $datos->sexo == 'H',['id'=>'radio_demo_1','data-md-icheck'=>'','checked']) !!}
                                            {{--<input type="radio" name="radio_demo" id="radio_demo_1" data-md-icheck />--}}
                                            <label for="radio_demo_1" class="inline-label">Hombre</label>
                                        </p>

                                        <p>

                                            {!! Form::radio('sexo', 'M', $datos->sexo == 'M',['id'=>'radio_demo_2','data-md-icheck'=>'']) !!}
                                            {{--<input type="radio" name="radio_demo" id="radio_demo_1" data-md-icheck />--}}
                                            <label for="radio_demo_1" class="inline-label">Mujer</label>
                                        </p>


                                    </div>


                                    <div class="uk-form-row">
                                        <div class="md-input-wrapper"><label>Direccion:</label>
                                            {!! Form::text('direccion',$datos->direccion, ['class'=>'md-input']) !!}

                                            <span class="md-input-bar"></span></div>

                                    </div>


                                    {{--Google map--}}


                                            {{--<h3 class="heading_b uk-margin-bottom">Google Maps</h3>--}}

                                            <div class="uk-grid" data-uk-grid-margin>
                                                {{--<div class="uk-width-large-1-2">--}}
                                                    {{--<div class="md-card">--}}
                                                        {{--<div class="md-card-toolbar">--}}
                                                            {{--<div class="md-card-toolbar-actions">--}}
                                                                {{--<i class="md-icon material-icons" data-uk-modal="{target:'#gmap_route_modal'}">&#xE52E;</i>--}}
                                                            {{--</div>--}}
                                                            {{--<h3 class="md-card-toolbar-heading-text">--}}
                                                                {{--Milan, Italy - Munich, Germany <span class="route_km"></span>--}}
                                                            {{--</h3>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="md-card-content">--}}
                                                            {{--<div id="gmap_route" class="gmap" style="width:100%;height:400px;"></div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="uk-modal" id="gmap_route_modal">--}}
                                                        {{--<div class="uk-modal-dialog">--}}
                                                            {{--<button type="button" class="uk-modal-close uk-close"></button>--}}
                                                            {{--<div class="uk-modal-header">--}}
                                                                {{--<h3 class="uk-modal-title">Milan, Italy - Munich, Germany<span class="route_km"></span></h3>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="uk-overflow-container">--}}
                                                                {{--<div id="route_directions"></div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<script>--}}
                                                    {{--var LocsA = [--}}
                                                            {{--@foreach($centros as $centro )--}}
                                                        {{--{--}}
                                                            {{--lat: {{$centro->logitud}},--}}
                                                            {{--lon: {{$centro->logitud}},--}}
                                                            {{--title: "ciudad del este",--}}
                                                            {{--html: ['<div class="gmap-info-window"><h3 class="uk-text-nowrap">Heading A</h3><p>Lorem ipsum dolor sit&hellip;</p></div>'].join(),--}}
                                                            {{--icon: {--}}
                                                                {{--url: marker_url_beenhere,--}}
                                                                {{--size: marker_size,--}}
                                                                {{--scaledSize: marker_scaled_size--}}
                                                            {{--}--}}
                                                        {{--},--}}
                                                            {{--@endforeach--}}
                                                    {{--]--}}

                                                {{--</script>--}}

                                                {{--mapa a utilizar--}}
                                                <div class="uk-width-large-1">
                                                    <div class="md-card">
                                                        <div class="md-card-toolbar">
                                                            <h3 class="md-card-toolbar-heading-text">
                                                                Mapa
                                                            </h3>
                                                        </div>
                                                        <br>
                                                        <div class="md-input-wrapper" id="geocoder-searchbar-container" style="display: none;"><label>Buscar Direccion:</label>
                                                            {!! Form::text(null, null, ['class'=>'md-input', 'id'=> 'geocoder-searchbar']) !!}
                                                            <span class="md-input-bar"></span>
                                                        </div>
                                                        <div class="md-card-content">
                                                            <div class="uk-grid" data-uk-grid-margin>
                                                                <div class="uk-width-1-1">
                                                                    <div id="gmap_markers" class="gmap" style="width:100%;height:400px;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                                     {{--fin Google map--}}



                                </div>

            </div>
                <br>
                <div class="uk-form-row">

                    <div class="md-input-wrapper md-input-filled"><label>Latitud:</label>
                        {!! Form::text('latitud',$datos->latitud, ['class'=>'md-input latField', 'readonly' => '']) !!}
                        {{--<input type="text" class="md-input">--}}
                        <span class="md-input-bar"></span></div>

                </div>

                <div class="uk-form-row">

                    <div class="md-input-wrapper md-input-filled"><label>Longitud:</label>
                        {!! Form::text('longitud',$datos->longitud, ['class'=>'md-input lngField', 'readonly' => '']) !!}
                        {{--<input type="text" class="md-input">--}}
                        <span class="md-input-bar"></span></div>

                </div>

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
@section('js')

    <script src="{{ url('assets/js/gmap_geocoder.js') }}"></script>
    <script>
        /***
         * Funciones encargadas de la busqueda por geocode (direccion)
         * Copiar la variable setLocation y la funcion initGeocoderSearchbar completa.
         * Incluir el script gmap_geocoder.js como esta arriba.
         * IMPORTANTE COPIAR EN EL MISMO ORDEN
         *
         * Copiar tambien el div con id "geocoder-searchbar-container"
         * respetando la posicion dentro del contenedor md-card padre.
         * La lista de resultados se genera por JavaScript de manera dinamica.
         */
        var setLocation;
        function initGeocoderSearchbar(map) {
            setLocation = (function() {
                return function(latLng) {
                    map.setCenter(latLng);
                    $('#places-container').remove();
                }
            })();
            $('#geocoder-searchbar-container').show('fast');
            $('#geocoder-searchbar').off('keypress').on('keypress', function (e) {
                var keyCode = e.keyCode;
                if (keyCode == 13) {
                    e.preventDefault();
                    geocoder($('#geocoder-searchbar').val(),
                            function (res) {
                                res = res.results;
                                if (res.length == 1) {
                                    map.setCenter(res[0].geometry.location);
                                } else {
                                    var html = '<div id="places-container">';
                                    for (var i = 0; i < res.length; i++) {
                                        html += '<p><input type="radio" onchange=\'setLocation(' + JSON.stringify(res[i].geometry.location) + ')\' name="geocoder_places" id="radio_demo_' + res[i].place_id + '" data-md-icheck />' +
                                                '<label for="radio_demo_' + res[i].place_id + '" class="inline-label">' + res[i].formatted_address +'</label>' +
                                                '</p>';
                                    }
                                    html += '</div>';
                                    $(html).insertAfter('#geocoder-searchbar-container');
                                }
                            });
                }
            });
        }
        var markers = [];
        function mapClickHandler(latLng) {
            $('.latField').val(latLng.lat());
            $('.lngField').val(latLng.lng());
        }

        function setMarker(map, latLng) {
            var marker = new google.maps.Marker({
                position: latLng,
                map: map
            });
            map.setCenter(latLng);
            for(var i= 0; i < markers.length; i++) {
                deleteMarker(markers[i]);
            }
            marker.addListener("rightclick", function() {
                deleteMarker(marker);
                $('.latField').val('');
                $('.lngField').val('');
            });
            markers.push(marker);
        }

        function deleteMarker(marker) {
            marker.setMap(null);
        }
    </script>
@stop

@section('js2')
    <script >
        //        $(document).ready(function(){
        $('.uk-form-row input').each(function(){
            if( $(this).val().length != 0 ) {
                $(this).parent().addClass('md-input-filled');

            }

        })




        //        })
    </script>
@stop