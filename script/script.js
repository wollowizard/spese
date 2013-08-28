$(document).ready(function() {
    $('#newline').dataTable({"bPaginate": false,
        "bLengthChange": false,
        "bFilter": false,
        "bSort": false,
        "bInfo": false,
        "bAutoWidth": false});
});
$(document).ready(function() {
    $('.datatableclass').dataTable({"bPaginate": false, "bInfo": false, "bFilter": false, 
    });
});
$(document).ready(function() {
    $('.datatableclassfull').dataTable({"bPaginate": true, "bInfo": true, "bFilter": true
    });
});
function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {

            $('#imgspan').html("<img id='imgupload' height='150px' src='" + e.target.result + "' alt='your image' />");
            //$('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$(document).ready(function() {
    $('#selectall').click(function() {
        var a = $('.check_list');
        var index;
        if (a.length > 0) {
            var isChecked = a[0].checked;
            for (index = 0; index < a.length; ++index) {
                a[index].checked = !isChecked;
            }
        }
        return false;
    });
});
$(document).ready(function() {
    $("#imgUploadInput").change(function() {
        readURL(this);
    });
});


$(document).ready(function() {
    $("#imgUploadInput").click(function() {
        readURL(this);
    });
});


$(document).ready(function() {
    $("#newsubmit").click(function() {
        if (($('#imgUploadInput').val() === "") && ($('#nopicturetextarea').val() === "")) {
            alert("Add a picture of the receipt or say why you don't have the picture available!");
        }
        else {
            $("#formnew").submit();
        }
    });
});
function allerta(imagepath) {
    $("#dialogbox").append("<div id='dialog'> <img width='350px' id='imgdialog' src = '' /></div>");
    $("#imgdialog").attr('src', imagepath);
    $("#dialog").dialog({
        width: 400,
        hide: 'slide',
        position: 'top',
        show: 'slide',
        close: function(event, ui) {
            $("#dialogbox").html("");
        }
    });

}


$(document).ready(function() {
    $("#nopicturetextspan").hide();

    $("#nopicturespan").click(function() {
        $("#imgUploadInput").hide();
        $("#nopicturespan").hide();
        $("#nopicturetextspan").show();

    });


});

$(document).ready(function() {
    $("input:file").change(function() {
        var fileName = $(this).val();
        $("#nopicturespan").hide();
    });
});