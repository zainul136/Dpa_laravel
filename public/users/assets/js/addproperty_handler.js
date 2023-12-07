/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$('#next-btn-1').click(function () {
    $('#addproperty_part_1').hide('slow');
    $('#addproperty_part_2').show('fast');


});

$('#next-btn-2').click(function () {
    if (document.getElementById('moreType').value === "room"
            || document.getElementById('moreType').value === "penthouse"
            || document.getElementById('moreType').value === "industrial_land"
            || document.getElementById('moreType').value === "plot_file"
            || document.getElementById('moreType').value === "plot_form") {
        $('#addproperty_part_2').hide('slow');
        $("#addproperty_part_4").show('fast');
    } else {
        $('#addproperty_part_2').hide('slow');
        $('#addproperty_part_3').show('fast');
    }

});




$('#next-btn-4').click(function () {
    $('#addproperty_part_4').hide('slow');
    $('#addproperty_part_5').show('fast');

    var type = document.getElementById('selectTypeForHome').value;
    var purpose = document.getElementById('selectType').value;
    var images = document.getElementById('files-upload').files;

    if (purpose != "wanted" && type != "plot") {
        if (images.length > 0) {
            document.getElementById("image_text").innerHTML = "Your Uploaded Images";
        } else {
            document.getElementById("image_text").innerHTML = "Upload Images. It is Coumpulsary";
            var button = document.getElementById('submit_button');
            button.setAttribute('disabled', 'true');
        }
    } else {
            $("#files-upload").val("");
            $("#pic-upload").empty()
            document.getElementById("image_text").innerHTML = "Upload Images.  It is Optional";
    }
    
});


/* previous buttons click events */

$('#previous-btn-2').click(function () {
    $('#addproperty_part_2').hide('slow');
    $('#addproperty_part_1').show('fast');
});

$('#previous-btn-3').click(function () {
    $('#addproperty_part_3').hide('slow');
    $('#addproperty_part_2').show('fast');
});

$('#previous-btn-4').click(function () {
    if (document.getElementById('moreType').value === "room"
            || document.getElementById('moreType').value === "penthouse"
            || document.getElementById('moreType').value === "industrial_land"
            || document.getElementById('moreType').value === "plot_file"
            || document.getElementById('moreType').value === "plot_form") {

        $('#addproperty_part_2').show('fast');
        $("#addproperty_part_4").hide('slow');
    } else {
        $("#addproperty_part_4").hide('slow');
        $('#addproperty_part_3').show('fast');
    }
});

$('#previous-btn-5').click(function () {
    $('#addproperty_part_5').hide('slow');
    $('#addproperty_part_4').show('fast');
});
