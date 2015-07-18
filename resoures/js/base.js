/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function validateEmail() {
    var email = $("#email").val();
    $.ajax({
        url: BASE_URL + 'index.php/Userregistation/validate_user',
        type: 'post',
        data: {'action': 'check_user', 'email': email},
        success: function (rowData) {
            if (rowData == "1") {
                $('#val_email').text("Email is Already Taken!");
            } else {
                $('#val_email').text("");
            }
            $("#preloader").hide();
            $("#hotel_details").empty();
            $("#hotel_details").append(rowData);
            $("#hotel_details").show();
        },
        error: function (xhr, desc, err) {
            console.log(xhr);
            console.log("Details: " + desc + "\nError:" + err);
        }
    });
}
$(function () {
    $("#preloader_pack").hide();

    //$(".no_guest").prop('disabled', true);
    $(".no_guest").change(function () {
        if (!$(".package").is(":checked")) {
            alert("Please Put a Tick to the Checkbox Abow");
        }
    });
    if ($("#session").val() && $("#session_reservation").val() && $("#session_pack_id").val()) {
        $.ajax({
            url: BASE_URL + 'index.php/Booking/get_invoice',
            type: 'post',
            data: {'action': 'get_invoice'},
            success: function (rowData) {
                if (rowData != false) {
                    $("#invoice_output").empty();
                    $("#invoice_output").append(rowData);
                    resetActive(event, 60, 'step-4');
                    $("#invoice").addClass("activestep");
                } else {
                    resetActive(event, 60, 'step-3');
                    $("#invoice").addClass("activestep");
                }
            },
            error: function (xhr, desc, err) {
                console.log(xhr);
                console.log("Details: " + desc + "\nError:" + err);
            }
        });
    } else if ($("#session").val() && $("#session_reservation").val()) {
        resetActive(event, 40, 'step-2');
        $("#pack").addClass("activestep");
    }

    $("#preloader").hide();
    $("#checkin,#checkout").datepicker({
        yearRange: '-120:+120',
        changeMonth: true,
        changeYear: true,
        showAnim: 'slideDown',
        minDate: 0, // 0 days offset = today
        //maxDate: '2070-10-10', 
        onChangeMonthYear: function (y, m, i) {
            var d = i.selectedDay;
            $(this).datepicker('setDate', new Date(y, m - 1, d));
        }
    });


});
function validate(isField) {
    var check_in = $('#checkin').val().split("/");
    var check_out = $('#checkout').val().split("/");
    if (check_out != "") {
        if (check_in > check_out) {
            $("#wrongDate").modal('show');
            isField.value = "";
        }
    }
}
function continue_booking() {
    if ($("#session").val() && $("#session_reservation").val()) {
        location.reload();
    } else {
        alert("Please Select Room and Continue");
    }

}
function cancel() {
    $.ajax({
        url: BASE_URL + 'index.php/Booking/cancel_booking',
        type: 'post',
        data: {'action': 'cancel_booking'},
        success: function (rowData) {
            if (rowData) {
                location.reload();
            }
        },
        error: function (xhr, desc, err) {
            console.log(xhr);
            console.log("Details: " + desc + "\nError:" + err);
        }
    });
}
function book_another_room() {
    $.ajax({
        url: BASE_URL + 'index.php/Room/check_availablilty',
        type: 'post',
        data: {'action': 'check_ava'},
        success: function (rowData) {
            $("#preloader").hide();
            $("#hotel_details").empty();
            $("#hotel_details").append(rowData.split("*")[0]);
            $('#checkin').datepicker("setDate", new Date(rowData.split("*")[1]));
            $('#checkout').datepicker("setDate", new Date(rowData.split("*")[2]));
            resetActive(event, 60, 'step-1');
            $("#div1").addClass("activestep");
            $("#hotel_details").show();
        },
        error: function (xhr, desc, err) {
            console.log(xhr);
            console.log("Details: " + desc + "\nError:" + err);
        }
    });
}
function check_availability() {
    $("#hotel_details").hide();
    $("#preloader").show();
    var check_in = $("#checkin").val();
    var check_out = $("#checkout").val();
    var adult = $("#adult").val();
    var child = $("#child").val();
    $.ajax({
        url: BASE_URL + 'index.php/Room/check_availablilty',
        type: 'post',
        data: {'action': 'check_ava', 'check_in': check_in, 'check_out': check_out, 'adult': adult, 'child': child},
        success: function (rowData) {
            $("#preloader").hide();
            $("#hotel_details").empty();
            $("#hotel_details").append(rowData.split("*")[0]);
            $('#checkin').datepicker("setDate", new Date(rowData.split("*")[1]));
            $('#checkout').datepicker("setDate", new Date(rowData.split("*")[2]));
            $("#hotel_details").show();
        },
        error: function (xhr, desc, err) {
            console.log(xhr);
            console.log("Details: " + desc + "\nError:" + err);
        }
    });
}
function register_user() {
    var title = $('#title').val();
    var f_name = $('#f_name').val();
    var l_name = $('#l_name').val();
    var email = $('#email').val();
    var tel = $('#tel').val();
    var country = $('#country').val();
    var id_type = $('#id_type').val();
    var id_number = $('#id_number').val();
    var username = $('#username').val();
    var password = $('#password').val();
    $.ajax({
        url: BASE_URL + 'index.php/Userregistation/register_user',
        type: 'post',
        data: {'action': 'register_user', 'title': title, 'f_name': f_name, 'l_name': l_name, 'email': email, 'tel': tel, 'country': country, 'id_type': id_type, 'id_number': id_number, 'username': username, 'password': password},
        success: function (rowData) {
            alert(rowData);
            if (rowData) {
                alert("Registerd Successfull, Please Login to Continue Booking Process!");
            }
        },
        error: function (xhr, desc, err) {
            alert("fail")
            console.log(xhr);
            console.log("Details: " + desc + "\nError:" + err);
        }
    });
}

$(document).on('click', 'button.view', function () {
    var id = $(this).attr("id");
    //alert(id);
    //$("#loadgif").show();
    $.ajax({
        url: BASE_URL + 'index.php/Room/room_img_by_id',
        type: 'post',
        data: {'action': 'get', 'id': id},
        success: function (rowData) {
            $("#myCarousel").empty();
            $("#myCarousel").html(rowData.split("*")[0]);
            $("#details").html(rowData.split("*")[1]);
            $("#room_name").html(rowData.split("*")[2]);
        },
        error: function (xhr, desc, err) {
            console.log(xhr);
            console.log("Details: " + desc + "\nError:" + err);
        }
    });
});

$(document).on('click', 'span.del', function () {
    var r = confirm("Are you sure you want to delete this Reservation ?");
    if (r == true) {
        var room_id = $(this).attr("id");
        $.ajax({
            url: BASE_URL + 'index.php/Booking/delete_booking',
            type: 'post',
            data: {'action': 'delete_booking', 'temp_booking_id': room_id},
            success: function (rowData) {
                if (rowData == "FALSE") {
                    resetActive(event, 60, 'step-1');
                    $("#div1").addClass("activestep");
                } else {
                    $("#booked_rooms").empty();
                    $("#booked_rooms").append(rowData);
                }
            },
            error: function (xhr, desc, err) {
                console.log(xhr);
                console.log("Details: " + desc + "\nError:" + err);
            }
        });
    }
});
$(document).on('click', 'button.btn_proceed', function () {
    if ($(this).attr("id") == "proceed_yes") {
        var packagers = [];
        var guest = [];
        $('input[name^="mailId"]').each(function () {
            if ($(this).is(":checked")) {
                packagers.push($(this).val());
            }
        });
        $('input[name^="noId"]').each(function () {
            if ($(this).val()) {
                guest.push($(this).val());
            }
        });

        $.ajax({
            url: BASE_URL + 'index.php/Booking/add_package',
            type: 'post',
            data: {'action': 'add_packge', 'packagers': JSON.stringify(packagers), 'guest': JSON.stringify(guest)},
            success: function (rowData) {
                if (rowData != false) {
                    $("#invoice_output").empty();
                    $("#invoice_output").append(rowData);
                    resetActive(event, 60, 'step-4');
                    $("#invoice").addClass("activestep");
                } else {
                    resetActive(event, 60, 'step-3');
                    $("#invoice").addClass("activestep");
                }
            },
            error: function (xhr, desc, err) {
                alert("fail");
                console.log(xhr);
                console.log("Details: " + desc + "\nError:" + err);
            }
        });
    } else {
        $.ajax({
            url: BASE_URL + 'index.php/Booking/add_package',
            type: 'post',
            data: {'action': 'do_not_add_packge'},
            success: function (rowData) {
                if (rowData != false) {
                    $("#invoice_output").empty();
                    $("#invoice_output").append(rowData.split("*")[0]);
                    $("#billing_details").empty();
                    $("#billing_details").append(rowData.split("*")[1]);
                    resetActive(event, 60, 'step-4');
                    $("#invoice").addClass("activestep");
                } else {
                    resetActive(event, 60, 'step-3');
                    $("#invoice").addClass("activestep");
                }
            },
            error: function (xhr, desc, err) {
                alert("fail");
                console.log(xhr);
                console.log("Details: " + desc + "\nError:" + err);
            }
        });
    }

});
$(document).on('click', 'button.order', function () {
    var room_id = $(this).attr("id");
    var check_in = $("#checkin").val();
    var check_out = $("#checkout").val();
    var audlt = $("#adult").val() * 1;
    var child = $("#child").val() * 1;

    if (child == null) {
        child = 0;
    }
    var guests = audlt + child;
    $.ajax({
        url: BASE_URL + 'index.php/Booking/create_booking',
        type: 'post',
        data: {'action': 'create_session', 'check_in': check_in, 'check_out': check_out, 'room_id': room_id, 'guests': guests, 'adult': audlt, 'child': child},
        success: function (rowData) {
            $("#booked_rooms").empty();
            $("#booked_rooms").append(rowData);
            resetActive(event, 40, 'step-2');
            $("#pack").addClass("activestep");
        },
        error: function (xhr, desc, err) {
            alert("fail");
            console.log(xhr);
            console.log("Details: " + desc + "\nError:" + err);
        }
    });

});
$(document).on('click', 'span.delpack', function () {
    var r = confirm("Are you sure you want to delete this Package ?");
    if (r == true) {
        var pack_id = $(this).attr("id");
        $.ajax({
            url: BASE_URL + 'index.php/Booking/delete_package',
            type: 'post',
            data: {'action': 'delete_booking', 'temp_pack_id': pack_id},
            success: function (rowData) {
                    $("#packgers").empty();
                    $("#packgers").append(rowData);
            },
            error: function (xhr, desc, err) {
                console.log(xhr);
                console.log("Details: " + desc + "\nError:" + err);
            }
        });
    }
});
$(document).on('click', 'button.btnAdd', function () {
    $("#packgers").empty();
    $("#preloader_pack").show();
    var pack_id = $(this).attr("id");
    var guests = $("#p" + $(this).attr("id")).val();
    $.ajax({
        url: BASE_URL + 'index.php/Booking/add_pack',
        type: 'post',
        data: {'action': 'add_package', 'pack_id': pack_id, 'guests': guests},
        success: function (rowData) {
            if (rowData == "FALSE") {
//                            resetActive(event, 40, 'step-1');
//                            $("#div1").addClass("activestep");
            } else {
                $("#preloader_pack").hide();
                $("#packgers").empty();
                $("#packgers").append(rowData);
            }
        },
        error: function (xhr, desc, err) {
            console.log(xhr);
            console.log("Details: " + desc + "\nError:" + err);
        }
    });
});

function resetActive(event, percent, step) {
    $(".progress-bar").css("width", percent + "%").attr("aria-valuenow", percent);
    $(".progress-completed").text(percent + "%");

    $("div").each(function () {
        if ($(this).hasClass("activestep")) {
            $(this).removeClass("activestep");
        }
    });

    if (event.target.className == "col-md-2") {
        $(event.target).addClass("activestep");
    }
    else {
        $(event.target.parentNode).addClass("activestep");
    }

    hideSteps();
    showCurrentStepInfo(step);
}

function hideSteps() {
    $("div").each(function () {
        if ($(this).hasClass("activeStepInfo")) {
            $(this).removeClass("activeStepInfo");
            $(this).addClass("hiddenStepInfo");
        }
    });
}

function showCurrentStepInfo(step) {
    var id = "#" + step;
    $(id).addClass("activeStepInfo");
}