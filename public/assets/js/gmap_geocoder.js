var geocoder = function(address, success, error) {
    var base = 'https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyA9z_akDP3uw-0P32z9sBCZmrCbfiS3knc&address=';
    $.ajax({
        url: base + address,
        success: success ? success : onGeocoderSuccess,
        error: error ? error : onGeocoderError
    });

    function onGeocoderSuccess(res) {
        console.log(res);
    }

    function onGeocoderError(err) {
        console.log(err);
    }
};