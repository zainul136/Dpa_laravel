
var purpose;
var purpose_wanted;
function populateForPurpose(type, setPurpose) {
    var type = document.getElementById(type);
    var setPurpose = document.getElementById(setPurpose);
    setPurpose.innerHTML = "";
    if (type.value == "wanted") {
        //value|option
        var optionArray = ["|Choose Wanted Type", "buy|Buy", "rent|Rent"];
        $('#wantedfor').show();
    } else {
        $('#wantedfor').hide();
    }
    for (var option in optionArray) {
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        setPurpose.options.add(newOption);

    }
    purpose = document.getElementById('selectType').value;
    if (purpose == "rent") {
        $('#selectTypeForHome option[value=plot]').hide();
    } else {
        $('#selectTypeForHome option[value=plot]').show();
    }


}
$('#selectType').change(function () {
    $('#selectTypeForHome').val("");
    $('#moreType').hide();
    $("#adv_feature_category").hide();


});
$('#wantedfor').change(function () {
    $('#selectTypeForHome').val("");
    $('#moreType').hide();
    $("#adv_feature_category").hide();
});

function populate_wanted(wanted_type) {

    wanted_purpose = document.getElementById(wanted_type).value;
    if (wanted_purpose == "rent") {
        $('#selectTypeForHome option[value=plot]').hide();
    } else {
        $('#selectTypeForHome option[value=plot]').show();
    }
}
function populateForType(type, setType) {

    var fc = document.querySelectorAll(".fc");
    [].forEach.call(fc, function (div)
    {
        div.hidden = true;
    });
    var type = document.getElementById(type);
    var setType = document.getElementById(setType);
    setType.innerHTML = "";
    console.log("populateForType " + type.value);

    if (type.value == "home" ) {
        //value|option
        if (purpose == "sale") {
            var optionArray = ["|Catagories for home", "house|House", "flat|Flat", "farm_house|Farm House", "room|Room", "penthouse|Penthouse"];
            $('#moreType').show();
            $("#adv_feature_category").show();

        } else {
            var optionArray = ["|Catagories for home", "house|House", "flat|Flat", "upper_portion|Upper Portion", "lower_portion|Lower Portion", "farm_house|Farm House", "room|Room", "penthouse|Penthouse"];
            $('#moreType').show();
            $("#adv_feature_category").show();
        }

    } else if (type.value == "plot") {
        var optionArray = ["|Catagories for plot", "residential_plot|Residential Plot", "commercial_plot|Commercial Plot", "agricultural_land|Agricultural Land", "industrial_land|Industrial_Land", "plot_file|Plot File", "plot_form|Plot Form"];
        $('#moreType').show();
        $("#adv_feature_category").hide();
    } else if (type.value == "commercial") {
        var optionArray = ["|Catagories for commercial", "office|Office", "shop|Shop", "warehouse|Warehouse", "factory|Factory", "building|Building"];
        $('#moreType').show();
        $("#adv_feature_category").hide();
    } else {
        $('#moreType').hide();
        $("#adv_feature_category").hide();
    }
    for (var option in optionArray) {
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        console.log("value " + newOption.value);

        newOption.innerHTML = pair[1];
        setType.options.add(newOption);
    }
}


//login & new member form
function withLogin() {
//    document.getElementById('login').style.display = 'inline-block';
//    document.getElementById('signup').style.display = 'none';
    $('#login').show('fast');
    $('#signup').hide();
    document.getElementById("status_heading").innerHTML = "Login";
}
function withoutLogin() {
    document.getElementById("status_heading").innerHTML = "Register";
    $('#signup').show('fast');
    $('#login').hide();
}



(function () {
    optionSelected = -1;
    var select = document.getElementById('moreType');
    select ? select.onchange = function () {
        optionSelected = select.value;
        if (optionSelected != -1)
        {

            onFeatureSelect(optionSelected);
        }
    } :'';

    function onFeatureSelect(optionSelected)
    {
        var fc = document.querySelectorAll(".fc");
        [].forEach.call(fc, function (div)
        {
            div.hidden = true;
        });
        var fc = document.querySelectorAll(".fc");
        [].forEach.call(fc, function (div)
        {

            var data = div.getAttribute("data");
            var split = data.split(",");
            if (data.length > 0) {
                [].forEach.call(split, function (item)
                {

                    if (item == optionSelected)
                    {
                        div.hidden = false;
                    }
                });
            }

        });

    }
})();


$("#files-upload").change(function () {
    var input = document.getElementById('files-upload');
    var files = event.target.files; //FileList object

    for (var i = 0; i < input.files.length; i++) {

        var ext = input.files[i].name.substring(input.files[i].name.lastIndexOf('.') + 1).toLowerCase();
        if ((ext === 'jpg') || (ext === 'png') || (ext === 'jpeg')) {

            var picReader = new FileReader();

            picReader.onload = function (e) {

                var div = document.createElement('div');
                div.className = 'col-xs-6 col-sm-3 box';
                var picFile = event.target;
                div.innerHTML = "<img src='" + picFile.result + "'/>";
                document.getElementById('pic-upload').appendChild(div);

            };
            //Read the image`
            picReader.readAsDataURL(input.files[i]);
        } // end of if
        else {
        } // end of elses
    } // end of for loop
    var price = document.getElementById('price').value;
    var landArea = document.getElementById('land-area').value;
    var type = document.getElementById('selectTypeForHome').value;
    var purpose = document.getElementById('selectType').value;


    if (type != "plot" && purpose != "wanted") {
        var images = document.getElementById('files-upload').files;
        if (price > 0 && landArea > 0 && images.length > 0) {
            $('#submit_button').removeAttr('disabled');
   document.getElementById("image_text").innerHTML = "Your Uploaded Images";

        } else {
            var button = document.getElementById('submit_button');
            button.setAttribute('disabled', 'true');
        }
    }
});


$("#remove-images").click(function () {
    $("#files-upload").val("");
    $("#pic-upload").empty();
     var type = document.getElementById('selectTypeForHome').value;
         var purpose = document.getElementById('selectType').value;
    if (type != "plot" && purpose != "wanted"){
        var button = document.getElementById('submit_button');
            button.setAttribute('disabled', 'true');
   document.getElementById("image_text").innerHTML = "Upload Images. It is Coumpulsary";


    }
    else{
   document.getElementById("image_text").innerHTML = "Upload Images. It is Optional";
    }
});


$("#files-upload").click(function () {
    $("#files-upload").val("");
    $("#pic-upload").empty();
});

$('#toggle_adv_search_down').click(function () {
    $('#adv_form').animate({
        height: 'toggle'
    });
    $('#toggle_adv_search_down').hide();
    $('#toggle_adv_search_up').show();
});
$('#toggle_adv_search_up').click(function () {
    $('#adv_form').animate({
        height: 'toggle'
    });
    $('#toggle_adv_search_down').show();
    $('#toggle_adv_search_up').hide();
});

function like(button, id, check) {

    // e.preventDefault();
    button = $(document.getElementById(button));
    var value = "";

    var property_id = id;
    $.ajax({
        url: "http://localhost/DPA/process/like_property",
        type: "POST",
        async: false,
        dataType: 'text',
        data: {property_id: property_id},
        success: function (response) {

            value = response;
        }
    });
    if ($.trim(value) == 'redirect') {
        window.location.replace("http://localhost/DPA/login_register");
    } else if ($.trim(value) == 'deleted') {
        if (check > 0) {
            window.location.replace("http://localhost/DPA/profile_favouriteProperties");
        }
        button.css("color", "white");
    } else if ($.trim(value) == 'inserted') {
        button.css("color", "blue");
    }

}


