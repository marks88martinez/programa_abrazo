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
    function find(latLng) {
        map.setCenter(latLng);
        map.setZoom(20);
        setMarker(map, latLng);
    }
    setLocation = (function() {
        return function(latLng) {
            find(latLng);
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
                        if ($('#places-container')[0] != undefined) {
                            $('#places-container').remove();
                        }
                        find(res[0].geometry.location);
                    } else {
                        var html = '<div id="places-container">';
                        var innerHtml = '';
                        for (var i = 0; i < res.length; i++) {
                            innerHtml += '<p><input type="radio" onchange=\'setLocation(' + JSON.stringify(res[i].geometry.location) + ')\' name="geocoder_places" id="radio_demo_' + res[i].place_id + '" data-md-icheck />' +
                                '<label for="radio_demo_' + res[i].place_id + '" class="inline-label">' + res[i].formatted_address +'</label>' +
                                '</p>';
                        }
                        if ($('#places-container')[0] != undefined) {
                            $('#places-container').html(innerHtml);
                            return;
                        }
                        html += innerHtml;
                        html += '</div>';
                        $(html).insertAfter('#geocoder-searchbar-container');
                    }
                });
        }
    });

    // Revisar si estan completos los campos de longitud y latitud
    // para colocar un marcador en la posicion correspondiente
    if ($('.lngField').val() != '' && $('.latField').val() != '') {
        find({
            lat: Number($('.latField').val()),
            lng: Number($('.lngField').val())
        });
    }
}