@extends('admin.inicio')
@section('contenido')
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <div class="md-card">
                    <div class="md-card-toolbar">
                        <div class="md-card-toolbar-actions">
                            <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                            {{--<i class="md-icon material-icons">&#xE5D5;</i>--}}
                            <div class="md-card-dropdown" data-uk-dropdown>
                                {{--<i class="md-icon material-icons">&#xE5D4;</i>--}}
                                <div class="uk-dropdown uk-dropdown-flip uk-dropdown-small">
                                    {{--<ul class="uk-nav">--}}
                                    {{--<li><a href="#">Action 1</a></li>--}}
                                    {{--<li><a href="#">Action 2</a></li>--}}
                                    {{--</ul>--}}
                                </div>
                            </div>
                        </div>

                        <h3 class="md-card-toolbar-heading-text">
                            Localización de niños
                        </h3>
                        <br>

                    </div>

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
@stop
@section('js')
    <script type="text/javascript">
        var loaded = false;
        function initGeocoderSearchbar(map) {
            if (loaded) {
                return false;
            }
            loaded = !loaded;
            var locations = [
                    @foreach($fuenteCalles as $fuenteCalle)
                {
                    nombre: '{{ $fuenteCalle->dato_nino->datos_persona->nombre . $fuenteCalle->dato_nino->datos_persona->apellido }}',
                    position: {
                        lat: Number({{ $fuenteCalle->dato_nino->datos_persona->latitud }}),
                        lng: Number({{ $fuenteCalle->dato_nino->datos_persona->longitud }})
                    }
                },
                    @endforeach
            ];

            for (var i = 0; i < locations.length; i++) {
                var marker = new google.maps.Marker({
                    position: locations[i].position,
                    map: map
                });
                var infoWindow = new google.maps.InfoWindow({
                    content : locations[i].nombre,
                    position: locations[i].position
                });
                infoWindow.open(map, marker);
            }
        }
    </script>
@stop