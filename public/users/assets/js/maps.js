


/* global google */
var map;
function propertyLocation() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 31.5546, lng: 74.3572},
        zoom: 15

    });
    var image = {
        url: '/DPA/assets/images/marker.png',
        scaledSize: new google.maps.Size(48, 55),
    };
    var marker = new google.maps.Marker({
        position: {
            lat: 74.27579568862915,
            lng: 85.36,
        },
        draggable: false,
        map: map,
        icon: image
    });
    var infoWindow = new google.maps.InfoWindow({maxWidth: 200});

    var input = document.getElementById('location');

    var options = {
        componentRestrictions: {country: "pk"}
    };

    var search = new google.maps.places.Autocomplete(input, options);


    google.maps.event.addListener(search, 'place_changed', function () {

        var place = search.getPlace();

        var location = place.name;

        var bounds = new google.maps.LatLngBounds();

        bounds.extend(place.geometry.location);

        marker.setPosition(place.geometry.location);
        marker.setTitle("click it");
//
        var latitude = place.geometry.location.lat();
        var longitude = place.geometry.location.lng();

        document.getElementById("latitude").value = latitude;
        document.getElementById("longitude").value = longitude;


        map.fitBounds(bounds);
        map.setZoom(16);
        $('#next-btn-4').removeAttr('disabled');

        var country, city = "";
        infoWindow.setContent("This is the default location of <b>" + place.name + "</b><br><br> Please click on map to choose a new location");
        infoWindow.open(map, marker);

        for (var i = 0; i < place.address_components.length; i++) {

            var addressObj = place.address_components[i];
            for (var j = 0; j < addressObj.types.length; j += 1) {

                if (addressObj.types[j] === 'country') {

                    country = addressObj.long_name;
                    //console.log(addressObj.types[j]); // 'country'
                    // console.log(addressObj.long_name); // country name
                } else if (addressObj.types[j] === 'locality') {

                    city = addressObj.long_name;
                    // console.log(addressObj.types[j]); //  'city'
                    //console.log(addressObj.long_name); // city name
                }
            }
        }

        if (city == "") {
            city = "none";
        }

        if (location != city) {

            $('#locationValue').val(location);
            $('#city').val(city);

        } else if (location == city) {
            document.getElementById("locationValue").value = "none";
            document.getElementById("city").value = city;
        } else if (location == country) {

            document.getElementById("locationValue").value = "none";
            document.getElementById("city").value = "none";
        }



        marker.addListener('click', function () {
            infoWindow.setContent("This is the default location of <b>" + place.name + "</b><br><br> Please click on map to choose a new location");
            infoWindow.open(map, marker);
        });

        map.addListener('click', function (e) {
            var pos = {
                lat: e.latLng.lat(),
                lng: e.latLng.lng()
            };
            marker.setPosition(pos);
            infoWindow.setContent("This is the selected location of <b>" + place.name);
            infoWindow.open(map, marker);

            document.getElementById("latitude").value = pos.lat;
            document.getElementById("longitude").value = pos.lng;
        });

    });
}

function getData() {


    var id = document.getElementById('pid').value;

    var property_data = [];
    $.ajaxSetup({async: false});
    // $.post("../process/get_property_data", {id: id}, function (success) {
    //
    //     property_data.push(success.title);
    //     property_data.push(success.location);
    //     property_data.push(success.city);
    //     property_data.push(Number(success.latitude));
    //     property_data.push(Number(success.longitude));
    //     $.ajaxSetup({async: true});
    //
    // });
    var pos = {lat: property_data[3], lng: property_data[4]};

    var image = {
        url: '/DPA/assets/images/marker.png',
        scaledSize: new google.maps.Size(48, 55),
    };

    var map = new google.maps.Map(document.getElementById('detail_page_map'), {
        center: pos,
        zoom: 17

    });
    var contentString = "<div style = 'font-family: Century Gothic, sans-serif;'> " + property_data[1] + ", " + property_data[2] + " </div>";
    var infowindow = new google.maps.InfoWindow({
        maxWidth: 250,
        maxHeight: 200,
        content: contentString
    });
    var marker = new google.maps.Marker({
        position: pos,
        map: map,
        title: property_data[0],
        icon: image
    });

    infowindow.open(map, marker);

    marker.setAnimation(google.maps.Animation.BOUNCE);
    marker.addListener('click', function () {
        infowindow.open(map, marker);
    });


} // end of get data function

function getProperties() {
    var mapp = new google.maps.Map(document.getElementById('nearby_map'), {
        center: {lat: 31.5546, lng: 74.3572},
        zoom: 15

    });



    var marker = new google.maps.Marker({
        position: {
            lat: 74.27579568862915,
            lng: 85.36,
        },
        draggable: false,
        map: mapp
    });


    var input = document.getElementById('nearby_location');

    var options = {
        componentRestrictions: {country: "pk"}
    };

    var search = new google.maps.places.Autocomplete(input, options);
    google.maps.event.addListener(search, 'place_changed', function () {

        var place = search.getPlace();

        var bounds = new google.maps.LatLngBounds();

        bounds.extend(place.geometry.location);
//
//        var latitude = place.geometry.location.lat();
//        var longitude = place.geometry.location.lng();

        mapp.fitBounds(bounds);
        mapp.setZoom(14);
        var city = "";

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

        /* ******************************* next ****************** */


        var location = place.name;
        var category = document.getElementById('nearby_category_search').value;
        var purpose = document.getElementById('nearby_purpose_search').value;
        var wanted = document.getElementById('wantedfor').value;

        var property_data = [];
        $.ajaxSetup({async: false});
        $.post("process/get_nearby_search_properties", {location: location, city: city, category: category, purpose: purpose, wanted_type: wanted}, function (success) {

            for (var i = 0; i < success.length; i++) {
                property_data.push(success[i]);
                console.log("title value:  " + property_data[i].property_id);
                console.log("title value:  " + property_data[i].title);
                console.log("longitude value:  " + property_data[i].longitude);
                console.log("latitude value:  " + property_data[i].latitude);
            }

        }); // end of $.Post request
        $.ajaxSetup({async: false});

        var anotherinfowindow = new google.maps.InfoWindow({
            maxWidth: 200
        });
        var extramarkers = new Array();

        if (property_data.length <= 0) {
                           document.getElementById("errormsg").textContent="No Properties Found";

        } else {
               document.getElementById("errormsg").textContent="";

            for (var j = 0; j < property_data.length; j++) {

                var extramarker = new google.maps.Marker({
                    position: new google.maps.LatLng(property_data[j].latitude, property_data[j].longitude),
                    map: mapp,
                    title: "click",
                    animation: google.maps.Animation.DROP

                });
                window.setTimeout(function () {
                    extramarkers.push(extramarker);
                }, i * 300);

                extramarkers.push(extramarker);
                google.maps.event.addListener(extramarker, 'click', (function (extramarker, j) {
                    return function () {
                        anotherinfowindow.setContent("<div style='color: #FF851B'>\n\
                <a href='http://localhost/DPA/detail_page/" + property_data[j].property_id + "' target='_blank'> " + property_data[j].title + "</a></div>");
                        anotherinfowindow.open(mapp, extramarker);
                    }
                })(extramarker, j));
            }

        }


    }); // end of place change event


}

/////////// add property handler part for Google maps //////////////
$('#next-btn-3').click(function () {
    $('#addproperty_part_3').hide('slow');
    $("#addproperty_part_4").show();
    google.maps.event.trigger(map, "resize");

});
$('#next-btn-2').click(function () {
    if (document.getElementById('moreType').value === "room"
            || document.getElementById('moreType').value === "penthouse"
            || document.getElementById('moreType').value === "industrial_land"
            || document.getElementById('moreType').value === "plot_file"
            || document.getElementById('moreType').value === "plot_form") {
        $('#addproperty_part_2').hide('slow');
        $("#addproperty_part_4").show();
        google.maps.event.trigger(map, "resize");
    } else {
        $('#addproperty_part_2').hide('slow');
        $('#addproperty_part_3').show();
    }

});
