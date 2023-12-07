/********************************************* part 1 ************************************************8*/
$("#property-title, #property-description").keyup(function () {

    var title = document.getElementById('property-title').value;
    var description = document.getElementById('property-description').value;

    if (title.length > 0 && description.length > 0) {
        $('#next-btn-1').removeAttr('disabled');
    } else {
        var button = document.getElementById('next-btn-1');
        button.setAttribute('disabled', 'true');
    }
});


/********************************************* part 2 ************************************************8*/

$("#selectType, #wantedfor, #selectTypeForHome, #moreType").change(function () {
    var purpose = document.getElementById('selectType').value;
    var type = document.getElementById('selectTypeForHome').value;
    var moreType = document.getElementById('moreType').value;

    if (purpose == "wanted") {
        var wanted = document.getElementById('wantedfor').value;
        if (purpose.length > 0 && wanted.length > 0 && type.length > 0 && moreType.length > 0) {
            $('#next-btn-2').removeAttr('disabled');
        } else {
            var button = document.getElementById('next-btn-2');
            button.setAttribute('disabled', 'true');
        }
    } else if (purpose.length > 0 && type.length > 0 && moreType.length > 0) {
        $('#next-btn-2').removeAttr('disabled');
    } else {
        var button = document.getElementById('next-btn-2');
        button.setAttribute('disabled', 'true');
    }

});

$("#location").change(function () {
    var location = document.getElementById('location').value;
    var locationValue = document.getElementById('locationValue').value;
    if (location.length > 0 && locationValue.length > 0) {
        $('#next-btn-4').removeAttr('disabled');
    } else {
        var button = document.getElementById('next-btn-4');
        button.setAttribute('disabled', 'true');
    }
});


$("#price").keyup(function () {

    var price = document.getElementById('price').value;
    if (price <= 0) {
        $("#price_error_box").text("Enter Price Greater than 0")

    } else {
        $("#price_error_box").text("");

    }

    var landArea = document.getElementById('land-area').value;

    var type = document.getElementById('selectTypeForHome').value;
    var purpose = document.getElementById('selectType').value;
    //  alert(purpose);

    if (type != "plot" && purpose != "wanted") {
        var images = document.getElementById('files-upload').files;
        if (price > 0 && landArea > 0 && images.length > 0) {
            $('#submit_button').removeAttr('disabled');

        } else {

            var button = document.getElementById('submit_button');
            button.setAttribute('disabled', 'true');
        }
    } else {
        if (price > 0 && landArea > 0) {
            $('#submit_button').removeAttr('disabled');

        } else {
            var button = document.getElementById('submit_button');
            button.setAttribute('disabled', 'true');
        }
    }


});
$("#land-area").keyup(function () {

    var price = document.getElementById('price').value;

    var landArea = document.getElementById('land-area').value;
    if (landArea <= 0) {
        $("#land_area_Error").text("Enter Land Area Greater than 0")

    } else {
        $("#land_area_Error").text("");

    }

    var type = document.getElementById('selectTypeForHome').value;
    var purpose = document.getElementById('selectType').value;
    // alert(purpose);
    if (type != "plot" && purpose != "wanted") {
        //alert("ye nai chalna chahye");
        var images = document.getElementById('files-upload').files;
        if (price > 0 && landArea > 0 && images.length > 0) {
            $('#submit_button').removeAttr('disabled');

        } else {

            var button = document.getElementById('submit_button');
            button.setAttribute('disabled', 'true');
        }
    } else {
        //alert("aehi chalna chahye");
        if (price > 0 && landArea > 0) {
            $('#submit_button').removeAttr('disabled');

        } else {
            var button = document.getElementById('submit_button');
            button.setAttribute('disabled', 'true');
        }
    }

});



$(document).ready(function () {

    $('#option-1').click(function () {

        $('#newName').val("");
        $('#newEmail').val("");
        $('#phone').val("");
        $('#password').val("");
        $('#confirm_password').val("");
        $("#newEmail_error").text("");
        $("#newConfirmPassword_error_box").text("");
        $('#newEmail').removeAttr('required');
        $('#terms_conditions').removeAttr('checked', false);


        if (document.getElementById('option-agent').checked === true) {
            $('#agency-name').val("");
            $('#agency-website').val("");
            $('#agency-address').val("");
            $('#agency-location').val("");
            $('#agency-city').val("");
            $('#agency-description').val("");
        }

        // $('#option-agent').removeAttr('checked');

        $('#option-private-user').prop('checked', true);

        var button = document.getElementById('submit_button_2');
        button.setAttribute('disabled', 'false');

    });

    $('#option-2').click(function () {

        $('#oldEmail').val("");
        $('#oldPassword').val("");
        $("#login_error_box").text("");
        $('#oldEmail').removeAttr('required');

        document.getElementById('agency-area').style.display = 'none';
        var button = document.getElementById('submit_button_1');
        button.setAttribute('disabled', 'true');

    });

    $('#option-private-user').click(function () {

        $('#agency-name').val("");
        $('#agency-website').val("");
        $('#agency-location').val("");
        $('#agency-address').val("");
        $('#agency-city').val("");
        $('#agency-description').val("");

        document.getElementById('agency-area').style.display = 'none';

        var newName = document.getElementById('newName').value;
        var newEmail = document.getElementById('newEmail').value;
        var phone = document.getElementById('phone').value;
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('confirm_password').value;

        if (newEmail.length > 0 && newName.length > 0 && phone.length > 0 && password.length > 0 && confirmPassword.length > 0 && document.getElementById('terms_conditions').checked) {
            $('#submit_button_1').removeAttr('disabled');
        } else {

            var button = document.getElementById('submit_button_2');
            button.setAttribute('disabled', 'true');
        }

    });
    $('#option-agent').click(function () {

        document.getElementById('agency-area').style.display = 'inline-block';
        var button = document.getElementById('submit_button_2');
        button.setAttribute('disabled', 'true');


    });

    $("#oldEmail, #oldPassword").keyup(function () {


        var oldEmail = document.getElementById('oldEmail').value;
        var oldPassword = document.getElementById('oldPassword').value;
        if (oldEmail.length > 0 && oldPassword.length > 0) {
            $('#submit_button_1').removeAttr('disabled');
        } else {

            var button = document.getElementById('submit_button_1');
            button.setAttribute('disabled', 'true');
        }


    });

    function validate_register() {

        var newName = document.getElementById('newName').value;
        var newEmail = document.getElementById('newEmail').value;
        var phone = document.getElementById('phone').value;
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('confirm_password').value;

        if (document.getElementById('option-agent').checked === true) {

            var agency_name = document.getElementById('agency-name').value;
            var agency_website = document.getElementById('agency-website').value;
            var agency_location = document.getElementById('agency-location').value;
            var agency_address = document.getElementById('agency-address').value;
            var agency_city = document.getElementById('agency-city').value;
            var agency_description = document.getElementById('agency-description').value;

            if (document.getElementById('terms_conditions').checked && newEmail.length > 0 && newName.length > 0 && phone.length === 11 && password.length > 0 && confirmPassword.length > 0
                    && agency_name.length > 0 && agency_website.length > 0 && agency_location.length > 0 && agency_address.length > 0 && agency_city.length > 0 && agency_description.length > 0) {
                $('#submit_button_2').removeAttr('disabled');
            } else {

                var button = document.getElementById('submit_button_2');
                button.setAttribute('disabled', 'true');
            }

        } else if (document.getElementById('terms_conditions').checked && newEmail.length > 0 && newName.length > 0 && phone.length === 11 && password.length > 0 && confirmPassword.length > 0) {
            $('#submit_button_2').removeAttr('disabled');
        } else {

            var button = document.getElementById('submit_button_2');
            button.setAttribute('disabled', 'true');
        }

    }

    $('#terms_conditions').change(function () {
        if ($(this).is(":checked")) {
            validate_register();
        } else {

            var button = document.getElementById('submit_button_2');
            button.setAttribute('disabled', 'true');
        }
    });

    $("#newName, #newEmail,#phone, #password, #confirm_password, #agency-name, #agency-website,#agency-location, #agency-address, #agency-city, #agency-description").keyup(function () {

        validate_register();
    });
});


function validate_Form() {

    var check = "";
    var new_email = document.getElementById('newEmail').value;
    // alert(email);
    //var new_email = email.replace(/\'/g , '');
    // alert(new_email);

    $.ajax({
        url: "process/user_already_exist",
        type: "POST",
        dataType: 'text',
        async: false,
        data: {new_email: new_email},
        success: function (response) {
            check = response;

        }
    });
    var a;
    if ($.trim(check) == 'exist') {
        a = 0;
    }
    if (a == 0) {

        $("#newEmail_error").text("Email Already Exist");
        $("#newEmail").val("");

        var button = document.getElementById('submit_button_2');
        button.setAttribute('disabled', 'true');

        return false;
    } else {
        var phone = document.getElementById('phone').value;
        if (!($.isNumeric(phone))) {

            $("#property_phone_error").text("Enter Correct Contact No");
            $('#phone').val("");

            var button = document.getElementById('submit_button_2');
            button.setAttribute('disabled', 'true');
            return false;

        } else {
            $("#property_phone_error").val("");
            var password = document.getElementById('password').value;

            var confirmPassword = document.getElementById('confirm_password').value;

            if (confirmPassword != password) {

                $("#newConfirmPassword_error_box").text("Password not Matched. Enter Again");
                $("#confirm_password").val("");

                var button = document.getElementById('submit_button_2');
                button.setAttribute('disabled', 'true');

                return false;
            } else {
                $("#newConfirmPassword_error_box").text("");
                return true;
            }
            return true;
        }
    }

}
///////////////// for sell //////////////////


$('#max_price_sell').keyup(function () {


    var min_price = document.getElementById('min_price_sell');
    var max_price = document.getElementById('max_price_sell');
    var button = document.getElementById('sell_btn');


    if ((max_price.value.length === 0) && (min_price.value.length === 0)) {
        $('#sell_btn').removeAttr('disabled');
                $('#sell_price_error_max').hide();

        $('#sell_price_error_min').hide();
    } else if ((max_price.value.length === 0) && (min_price.value.length > 0)) {
        $('#sell_btn').removeAttr('disabled');
                $('#sell_price_error_max').hide();
        $('#sell_price_error_min').hide();
    } else if ((Number(max_price.value) > Number(min_price.value)) || (max_price.value.length > min_price.value.length)) {
        $('#sell_btn').removeAttr('disabled');
                $('#sell_price_error_max').hide();
        $('#sell_price_error_min').hide();
    } else if ((Number(max_price.value) <= Number(min_price.value)) || (max_price.value.length < min_price.value.length)) {
        $('#sell_price_error_min').show();     
        $('#sell_price_error_max').hide();
        button.setAttribute('disabled', 'true');
    }

});
$('#min_price_sell').keyup(function () {

    var min_price = document.getElementById('min_price_sell');
    var max_price = document.getElementById('max_price_sell');
    var button = document.getElementById('sell_btn');

    if ((max_price.value.length === 0) && (min_price.value.length === 0)) {
        $('#sell_btn').removeAttr('disabled');
        $('#sell_price_error_max').hide();
                $('#sell_price_error_min').hide();

    } else if ((max_price.value.length === 0) && (min_price.value.length > 0)) {
        $('#sell_btn').removeAttr('disabled');
        $('#sell_price_error_max').hide();
                $('#sell_price_error_min').hide();

    } else if ((Number(max_price.value) > Number(min_price.value)) || (max_price.value.length > min_price.value.length)) {
        $('#sell_btn').removeAttr('disabled');
        $('#sell_price_error_max').hide();
        $('#sell_price_error_min').hide();
    } else if ((Number(max_price.value) <= Number(min_price.value)) || (max_price.value.length < min_price.value.length)) {
        $('#sell_price_error_max').show();
                $('#sell_price_error_min').hide();
        button.setAttribute('disabled', 'true');
    }
});

///////////////// for rent //////////////////


$('#max_price_rent').keyup(function () {


    var min_price = document.getElementById('min_price_rent');
    var max_price = document.getElementById('max_price_rent');
    var button = document.getElementById('rent_btn');


    if ((max_price.value.length === 0) && (min_price.value.length === 0)) {
        $('#rent_btn').removeAttr('disabled');
                $('#rent_price_error_max').hide();

        $('#rent_price_error_min').hide();
    } else if ((max_price.value.length === 0) && (min_price.value.length > 0)) {
        $('#rent_btn').removeAttr('disabled');
                $('#rent_price_error_max').hide();
        $('#rent_price_error_min').hide();
    } else if ((Number(max_price.value) > Number(min_price.value)) || (max_price.value.length > min_price.value.length)) {
        $('#rent_btn').removeAttr('disabled');
                $('#rent_price_error_max').hide();
        $('#rent_price_error_min').hide();
    } else if ((Number(max_price.value) <= Number(min_price.value)) || (max_price.value.length < min_price.value.length)) {
        $('#rent_price_error_min').show();     
        $('#rent_price_error_max').hide();
        button.setAttribute('disabled', 'true');
    }

});
$('#min_price_rent').keyup(function () {

    var min_price = document.getElementById('min_price_rent');
    var max_price = document.getElementById('max_price_rent');
    var button = document.getElementById('rent_btn');

    if ((max_price.value.length === 0) && (min_price.value.length === 0)) {
        $('#rent_btn').removeAttr('disabled');
        $('#rent_price_error_max').hide();
                $('#rent_price_error_min').hide();

    } else if ((max_price.value.length === 0) && (min_price.value.length > 0)) {
        $('#rent_btn').removeAttr('disabled');
        $('#rent_price_error_max').hide();
                $('#rent_price_error_min').hide();

    } else if ((Number(max_price.value) > Number(min_price.value)) || (max_price.value.length > min_price.value.length)) {
        $('#rent_btn').removeAttr('disabled');
        $('#rent_price_error_max').hide();
        $('#rent_price_error_min').hide();
    } else if ((Number(max_price.value) <= Number(min_price.value)) || (max_price.value.length < min_price.value.length)) {
        $('#rent_price_error_max').show();
                $('#rent_price_error_min').hide();
        button.setAttribute('disabled', 'true');
    }
});




function min_max() {

    document.getElementById("min_price_simple").onkeypress = function (e) {
        if (!((e.keyCode > 95 && e.keyCode < 106) || (e.keyCode > 47 && e.keyCode < 58) || e.keyCode === 8)) {
            return false;
        }
    };
    document.getElementById("max_price_simple").onkeypress = function (e) {
        if (!((e.keyCode > 95 && e.keyCode < 106) || (e.keyCode > 47 && e.keyCode < 58) || e.keyCode === 8)) {
            return false;
        }
    };

}

function advance_Search_min_max() {
    document.getElementById('adv_search_land_area').onkeypress = function (e) {
        if (!((e.keyCode > 95 && e.keyCode < 106) || (e.keyCode > 47 && e.keyCode < 58) || e.keyCode === 8)) {
            return false;
        }
    };

    document.getElementById('adv_search_min_price').onkeypress = function (e) {
        if (!((e.keyCode > 95 && e.keyCode < 106) || (e.keyCode > 47 && e.keyCode < 58) || e.keyCode === 8)) {
            return false;
        }
    };
    document.getElementById('adv_search_max_price').onkeypress = function (e) {
        if (!((e.keyCode > 95 && e.keyCode < 106) || (e.keyCode > 47 && e.keyCode < 58) || e.keyCode === 8)) {
            return false;
        }
    };
}



function check() {
    document.getElementById('built_in_year').onkeypress = function (e) {
        if (!((e.keyCode > 95 && e.keyCode < 106) || (e.keyCode > 47 && e.keyCode < 58) || e.keyCode === 8)) {
            return false;
        }
    };
    document.getElementById('no_of_floors').onkeypress = function (e) {
        if (!((e.keyCode > 95 && e.keyCode < 106) || (e.keyCode > 47 && e.keyCode < 58) || e.keyCode === 8)) {
            return false;
        }
    };
    document.getElementById('no_of_bedrooms').onkeypress = function (e) {
        if (!((e.keyCode > 95 && e.keyCode < 106) || (e.keyCode > 47 && e.keyCode < 58) || e.keyCode === 8)) {
            return false;
        }
    };
    document.getElementById('no_of_bathrooms').onkeypress = function (e) {
        if (!((e.keyCode > 95 && e.keyCode < 106) || (e.keyCode > 47 && e.keyCode < 58) || e.keyCode === 8)) {
            return false;
        }
    };
    document.getElementById('no_of_kitchen').onkeypress = function (e) {
        if (!((e.keyCode > 95 && e.keyCode < 106) || (e.keyCode > 47 && e.keyCode < 58) || e.keyCode === 8)) {
            return false;
        }
    };
    document.getElementById('no_of_storerooms').onkeypress = function (e) {
        if (!((e.keyCode > 95 && e.keyCode < 106) || (e.keyCode > 47 && e.keyCode < 58) || e.keyCode === 8)) {
            return false;
        }
    };


}
;

//function limit(element)
//{
//    var max_chars = 10;
//
//    if(element.value.length > max_chars) {
//        element.value = element.value.substr(0, max_chars);
//    }
//}
$("input[type=number]").on('keydown keyup', function () {
    var $that = $(this),
            maxlength = $that.attr('maxlength')
    if ($.isNumeric(maxlength)) {
        $that.val($that.val().substr(0, maxlength));
    }
    ;
});

$('#phone').keyup(function () {
    $('#property_phone_error').text("Contact no length must be equal to 11");
    var phone = document.getElementById('phone').value;
    if (phone.length > 10) {
        $('#property_phone_error').text("");
    }
});

function validate_password() {

    var uid = document.getElementById('uid').value;

    var password = document.getElementById('new_password_update').value;
    var retype_password = document.getElementById('retype_new_password_update').value;

    if ($.trim(password) != $.trim(retype_password)) {

        $('#message').text("password not match");
        return false;

    } else if ($.trim(password) == $.trim(retype_password)) {
        $('#message').text("");

        $.ajax({
            url: "process/change_password",
            type: "POST",
            dataType: 'text',
            data: {password: password, user_id: uid},
            success: function (response) {
                $('#message').text(response);
            }
        });
    }
    return false;
}
/* property detail page */ function send_message() {

    var pid = document.getElementById('pid').value;
    var sender_id = document.getElementById('sender_id').value;
    var sender_name = document.getElementById('sender_name').value;
    var reciever_id = document.getElementById('reciever_id').value;
    var reciever_name = document.getElementById('reciever_name').value;
    var number = document.getElementById('number').value;
    var msg = document.getElementById('msg').value;

    $.ajax({
        url: "http://localhost/DPA/process/send_message",
        type: "POST",
        dataType: 'text',
        data: {pid: pid, sender_id: sender_id, sender_name: sender_name, reciever_id: reciever_id, reciever_name: reciever_name, contact_no: number, message: msg},
        success: function (response) {
            $('#msg_content').text(response);

        }
    });

    return false;
}
/* message detail page */function send_ajax_message() {
    
    

    var pid = document.getElementById('pid').value;
    var sender_id = document.getElementById('sender_id').value;
    var sender_name = document.getElementById('sender_name').value;
    var reciever_id = document.getElementById('reciever_id').value;
    var reciever_name = document.getElementById('reciever_name').value;
    var number = document.getElementById('number').value;
    var msg = document.getElementById('msg').value;
    document.getElementById('msg').value = "";

    $.ajax({
        url: "http://localhost/DPA/process/send_ajax_message",
        type: "POST",
        dataType: 'text',
        data: {pid: pid, sender_id: sender_id, sender_name: sender_name, reciever_id: reciever_id, reciever_name: reciever_name, contact_no: number, message: msg},
        success: function (response) {
            $('#main_div_message').html('');
            $('#main_div_message').append(response);

            var d = $('#main_div_message');
            d.scrollTop(d.prop("scrollHeight"));

        }
    });

    return false;
}
