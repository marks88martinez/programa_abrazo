@extends('admin.inicio')
@section('contenido')


    <div class="md-card">
        <div class="md-card-content">
            {!! Form::open(['route'=>'educador.store', 'method'=>'POST']) !!}


            <h3 class="heading_a">Educador</h3>
            <div class="uk-grid" data-uk-grid-margin="">
                <div class="uk-width-row">
                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><label>Nombre:</label>
                            {!!Form::text('nombre',null,['class'=>'md-input','required'])  !!}


                            <span class="md-input-bar"></span></div>

                    </div>
                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><label>Apellido:</label>
                            {!! Form::text('apellido',null, ['class'=>'md-input','required']) !!}

                            <span class="md-input-bar"></span></div>

                    </div>

                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><label>CI:</label>
                            {!! Form::text('ci',null, ['class'=>'md-input','required']) !!}

                            <span class="md-input-bar"></span></div>

                    </div>


                    {{--<h3 class="heading_a">Datepicker</h3>--}}

                        <div class="uk-form-row">
                            <div class="uk-width-medium-1-3">
                                {{--<span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>--}}
                                <label for="uk_dp_1">fecha de nacimiento:</label>
                                {!! Form::text('fechanacimiento', null,['class'=>'md-input', 'id'=>'uk-width-medium-1-3', 'data-uk-datepicker'=>'{format:"DD.MM.YYYY"}','required']) !!}
                                {{--<input class="md-input" type="text" id="uk_dp_1" data-uk-datepicker="{format:'DD.MM.YYYY'}">--}}



                            </div>
                        </div>

                    <div class="uk-form-row">

                        <div class="md-input-wrapper"><label>Telefono:</label>
                            {!! Form::text('telefono',null, ['class'=>'md-input']) !!}
                            {{--<input type="text" class="md-input">--}}
                            <span class="md-input-bar"></span></div>

                    </div>







                    <div class="uk-form-row">
                      {{-- ACA SELEC--}}


                        <h3 class="heading_a">Cargo</h3>
                        <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-row">
                                {!! Form::select('tipo_cargo', array('1' => 'Responsable', '2' => 'Educador'),null,['data-md-selectize'=>'','id'=>'select_demo_1']) !!}


                                {{--<select id="select_demo_1" data-md-selectize>--}}
                                    {{--<option value="">Educador</option>--}}
                                    {{--<optgroup label="Group 1">--}}
                                    {{--<optgroup>--}}
                                        {{--<option value="a">Responsable</option>--}}
                                        {{--<option value="b">Educador</option>--}}

                                    {{--</optgroup>--}}
                                    {{--<optgroup label="Group 2">--}}
                                        {{--<option value="a">Item A</option>--}}
                                        {{--<option value="b">Item B</option>--}}
                                        {{--<option value="c">Item C</option>--}}
                                        {{--<option value="d">Item D</option>--}}
                                    {{--</optgroup>--}}
                                {{--</select>--}}

                                {{--<span class="uk-form-help-block">Default</span>--}}
                            </div>

                        </div>

                    </div>

                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><label>Email:</label>
                            {!! Form::email('email',null, ['class'=>'md-input','required']) !!}

                            <span class="md-input-bar"></span></div>

                    </div>

                    <div class="uk-form-row">
                        <div class="md-input-wrapper"><label>Passsword:</label>
                            {!! Form::password('password', ['class'=>'md-input','required']) !!}
                            <span class="md-input-bar"></span></div>

                    </div>

                                <div class="uk-form-row" data-uk-grid-margin>
                                    <h3 class="heading_a">Sexo</h3>
                                    <div class="uk-width-medium-2-5">
                                        <p>

                                                {!! Form::radio('sexo', 'H', null,['id'=>'radio_demo_1','data-md-icheck'=>'']) !!}
                                            {{--<input type="radio" name="radio_demo" id="radio_demo_1" data-md-icheck />--}}
                                            <label for="radio_demo_1" class="inline-label">Hombre</label>
                                        </p>

                                        <p>

                                            {!! Form::radio('sexo', 'M', null,['id'=>'radio_demo_2','data-md-icheck'=>'']) !!}
                                            {{--<input type="radio" name="radio_demo" id="radio_demo_1" data-md-icheck />--}}
                                            <label for="radio_demo_1" class="inline-label">Mujer</label>
                                        </p>


                                    </div>


                                    <div class="uk-form-row">
                                        <div class="md-input-wrapper"><label>Direccion:</label>
                                            {!! Form::text('direccion',null, ['class'=>'md-input']) !!}

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
                                                {{--<div class="uk-width-large-1">--}}
                                                    {{--<div class="md-card">--}}
                                                        {{--<div class="md-card-toolbar">--}}
                                                            {{--<h3 class="md-card-toolbar-heading-text">--}}
                                                                {{--Mapa--}}
                                                            {{--</h3>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="md-card-content">--}}
                                                            {{--<div class="uk-grid" data-uk-grid-margin>--}}
                                                                {{--<div class="uk-width-1-1">--}}
                                                                    {{--<div id="gmap_markers" class="gmap" style="width:100%;height:400px;"></div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            </div>



                                                     {{--fin Google map--}}



                                </div>
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
                {!! Form::close() !!}
            </div>






    </div>
    </div>





    @stop