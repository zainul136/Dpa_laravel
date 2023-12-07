
function initAutocomplete() {
    var input = document.getElementById('location');

    var options = {
        componentRestrictions: {country: "pk"}
    };

    var search = new google.maps.places.Autocomplete(input, options);


    google.maps.event.addListener(search, 'place_changed', function () {
        var place = search.getPlace();
        var city = "";
        var location = place.name;
        for (var i = 0; i < place.address_components.length; i++) {

            var addressObj = place.address_components[i];
            for (var j = 0; j < addressObj.types.length; j += 1) {
                if (addressObj.types[j] === 'locality') {

                    city = addressObj.long_name;
                    // console.log(addressObj.types[j]); //  'city'
                    //console.log(addressObj.long_name); // city name
                }
            }
        }

        $('#city').val(city);
        $('#sellLocationValue').val(location);

    });

    var input2 = document.getElementById('location2');

    var search2 = new google.maps.places.Autocomplete(input2, options);


    google.maps.event.addListener(search2, 'place_changed', function () {
        var place = search2.getPlace();
        var city = "";
        var location = place.name;
        for (var i = 0; i < place.address_components.length; i++) {

            var addressObj = place.address_components[i];
            for (var j = 0; j < addressObj.types.length; j += 1) {
                if (addressObj.types[j] === 'locality') {

                    city = addressObj.long_name;
                    // console.log(addressObj.types[j]); //  'city'
                    //console.log(addressObj.long_name); // city name
                }
            }
        }
        $('#city2').val(city);
        $('#sellLocationValue2').val(location);


    });

    var input3 = document.getElementById('location3');

    var search3 = new google.maps.places.Autocomplete(input3, options);


    google.maps.event.addListener(search3, 'place_changed', function () {
          var place = search3.getPlace();
        var city = "";
        var location = place.name;
        for (var i = 0; i < place.address_components.length; i++) {

            var addressObj = place.address_components[i];
            for (var j = 0; j < addressObj.types.length; j += 1) {
                if (addressObj.types[j] === 'locality') {

                    city = addressObj.long_name;
                    // console.log(addressObj.types[j]); //  'city'
                    //console.log(addressObj.long_name); // city name
                }
            }
        }
        $('#city3').val(city);
        $('#sellLocationValue3').val(location);

    });

}