var marker_url = isHighDensity() ? "assets/img/md-images/ic_place_black_48dp.png" : "assets/img/md-images/ic_place_black_24dp.png",
    marker_url_beenhere = isHighDensity() ? "assets/img/md-images/ic_beenhere_black_48dp" : "assets/img/md-images/ic_beenhere_black_24dp",
    marker_url_history = isHighDensity() ? "assets/img/md-images/ic_location_history_black_48dp.png" : "assets/img/md-images/ic_location_history_black_24dp.png",
    marker_url_dining = isHighDensity() ? "assets/img/md-images/ic_local_dining_black_48dp.png" : "assets/img/md-images/ic_local_dining_black_24dp.png",
    marker_size = isHighDensity() ? new google.maps.Size(48, 48) : new google.maps.Size(24, 24),
    marker_scaled_size = new google.maps.Size(24, 24),
    marker_zoom = 12,
    LocsA = [{
      lat: -25.493327518374674,
      lon: -54.74171018612007,
        title: "ciudad del Este",
        html: ['<div class="gmap-info-window"><h3 class="uk-text-nowrap">Heading A</h3><p>Lorem ipsum dolor sit&hellip;</p></div>'].join(),
        icon: {
            url: marker_url_beenhere,
            size: marker_size,
            scaledSize: marker_scaled_size
        }
    }
    ,
    {
        lat: -25.53333,
        lon: -54.61667,
        title: "Precidente Franco",
        html: ['<div class="gmap-info-window"><h3 class="uk-text-nowrap">Heading B</h3><p>Lorem ipsum dolor sit&hellip;</p></div>'].join(""),
        icon: {
            url: marker_url_history,
            size: marker_size,
            scaledSize: marker_scaled_size
        }
    }
    // , {
    //     lat: 51.5,
    //     lon: -1.1,
    //     title: "Title C",
    //     icon: {
    //         url: marker_url,
    //         size: marker_size,
    //         scaledSize: marker_scaled_size
    //     },
    //     html: ['<div class="gmap-info-window"><h3 class="uk-text-nowrap">Heading C</h3>', "<p>Lorem ipsum dolor sit&hellip;</p></div>"].join("")
    // }
  ],
    LocsB = [{
        lat: 45.4654,
        lon: 9.1866,
        title: "Milan, Italy",
        html: ['<div class="gmap-info-window"><h3 class="uk-text-nowrap">Milan, Italy</h3>', "<p>Lorem ipsum dolor sit&hellip;</p></div>"].join("")
    }, {
        lat: 47.36854,
        lon: 8.5391,
        title: "Zurich, Switzerland",
        html: ['<div class="gmap-info-window"><h3 class="uk-text-nowrap">Zurich, Switzerland</h3>', "<p>Lorem ipsum dolor sit&hellip;</p></div>"].join("")
    }, {
        lat: 48.892,
        lon: 2.359,
        title: "Paris, France",
        html: ['<div class="gmap-info-window"><h3 class="uk-text-nowrap">Paris, France</h3>', "<p>Lorem ipsum dolor sit&hellip;</p></div>"].join("")
    }, {
        lat: 48.13654,
        lon: 11.57706,
        title: "Munich, Germany",
        html: ['<div class="gmap-info-window"><h3 class="uk-text-nowrap">Munich, Germany</h3>', "<p>Lorem ipsum dolor sit&hellip;</p></div>"].join("")
    }
  ],
    map_style_a = {
        "Neutral Blue": [{
            featureType: "water",
            elementType: "geometry",
            stylers: [{
                color: "#193341"
            }]
        }, {
            featureType: "landscape",
            elementType: "geometry",
            stylers: [{
                color: "#2c5a71"
            }]
        }, {
            featureType: "road",
            elementType: "geometry",
            stylers: [{
                color: "#29768a"
            }, {
                lightness: -37
            }]
        }, {
            featureType: "poi",
            elementType: "geometry",
            stylers: [{
                color: "#406d80"
            }]
        }, {
            featureType: "transit",
            elementType: "geometry",
            stylers: [{
                color: "#406d80"
            }]
        }, {
            elementType: "labels.text.stroke",
            stylers: [{
                visibility: "on"
            }, {
                color: "#3e606f"
            }, {
                weight: 2
            }, {
                gamma: .84
            }]
        }, {
            elementType: "labels.text.fill",
            stylers: [{
                color: "#ffffff"
            }]
        }, {
            featureType: "administrative",
            elementType: "geometry",
            stylers: [{
                weight: .6
            }, {
                color: "#1a3541"
            }]
        }, {
            elementType: "labels.icon",
            stylers: [{
                visibility: "off"
            }]
        }, {
            featureType: "poi.park",
            elementType: "geometry",
            stylers: [{
                color: "#2c5a71"
            }]
        }]
    },
    map_style_b = {
        "Subtle Greyscale": [{
            featureType: "landscape",
            stylers: [{
                saturation: -100
            }, {
                lightness: 65
            }, {
                visibility: "on"
            }]
        }, {
            featureType: "poi",
            stylers: [{
                saturation: -100
            }, {
                lightness: 51
            }, {
                visibility: "simplified"
            }]
        }, {
            featureType: "road.highway",
            stylers: [{
                saturation: -100
            }, {
                visibility: "simplified"
            }]
        }, {
            featureType: "road.arterial",
            stylers: [{
                saturation: -100
            }, {
                lightness: 30
            }, {
                visibility: "on"
            }]
        }, {
            featureType: "road.local",
            stylers: [{
                saturation: -100
            }, {
                lightness: 40
            }, {
                visibility: "on"
            }]
        }, {
            featureType: "transit",
            stylers: [{
                saturation: -100
            }, {
                visibility: "simplified"
            }]
        }, {
            featureType: "administrative.province",
            stylers: [{
                visibility: "off"
            }]
        }, {
            featureType: "water",
            elementType: "labels",
            stylers: [{
                visibility: "on"
            }, {
                lightness: -25
            }, {
                saturation: -100
            }]
        }, {
            featureType: "water",
            elementType: "geometry",
            stylers: [{
                hue: "#ffff00"
            }, {
                lightness: -25
            }, {
                saturation: -97
            }]
        }]
    };
$(function() {

  //, altair_gmaps.gm_route()
    altair_gmaps.gm_markers(), altair_gmaps.style_a(), altair_gmaps.style_b()
}), altair_gmaps = {
    gm_markers: function() {
        new Maplace({
            locations: LocsA,
            map_div: "#gmap_markers",
            controls_title: "Localizacion:",
            listeners: {
                idle: function() {
                    var e = $("#gmap_markers").find(".dropdown.gmap_controls").find("select");
                    e && !e.hasClass("data-md-selectize") && (e.addClass("data-md-selectize"), altair_forms.select_elements())
                },
                click: function(m, e) {
                    if(initGeocoderSearchbar) {
                        initGeocoderSearchbar(m);
                    }
                    if(!mapClickHandler || !setMarker) {
                        throw new Error('mapClickHandler y/o setMarker no implementados');
                    }
                    mapClickHandler(e.latLng);
                    setMarker(m, e.latLng);
                }
            }
        }).Load()
    },
    gm_route: function() {
        new Maplace({
            locations: LocsB,
            map_div: "#gmap_route",
            generate_controls: !1,
            show_markers: !1,
            type: "directions",
            draggable: !0,
            directions_panel: "#route_directions",
            afterRoute: function(e) {
                $(".route_km").text("(" + e / 1e3 + "km)")
            }
        }).Load()
    },
    style_a: function() {
        new Maplace({
            map_div: "#gmap_style_a",
            map_options: {
                set_center: [37.390267, -122.076417],
                zoom: 12,
                streetViewControl: !1
            },
            styles: map_style_a,
            controls_on_map: !1
        }).Load()
    },
    style_b: function() {
        new Maplace({
            map_div: "#gmap_style_b",
            map_options: {
                set_center: [37.390267, -122.076417],
                zoom: 12,
                streetViewControl: !1
            },
            draggable: !0,
            styles: map_style_b
        }).Load()
    }
};
