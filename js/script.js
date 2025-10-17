
$(document).ready(function () {



    window.message = function (bgclr, data, time) {

        if (bgclr == "") {
            bgclr = "#8B0000";
        }
        if (time == "") {
            time = 5000;
        }
        $("#info_msg").html(data);
        $("#info_msg").css({ "background": bgclr });
        $("#info_msg").show();
        setTimeout(function () {
            $("#info_msg").hide();
        }, time);

    }

    $(".submit").on("click", (e) => {
        e.preventDefault();

        // if($(".input-fld".val()))
        var RC_le = $(".rollcode").val().length;
        var RN_le = $(".rollno").val().length;


        if (RC_le == 0 && RN_le == 0) {
            message("", "!! please enter roll code and roll number !!", "");

        } else {
            if (RC_le < 5) {
                message("", "!! Enter correct roll code !!", "");

            } else if (RN_le < 5) {
                message("", "!! Enter correct roll number !!", "");
            } else if (RC_le == 5 && RN_le == 5) {


                $.ajax({
                    url: "show_result.php",
                    type: "POST",
                    data: { RC: $(".rollcode").val(), RN: $(".rollno").val() },
                    success: function (data) {

                        if (data == 0) {
                            message("", "Result not found", 5000);
                            // alert(data)

                        } else {
                            window.location.href = "result.php";
                            // alert(data);
                        }
                        // message("",data,"");

                    }
                });






            }
        }




    });


    transfer=function(){
        window.location.href="userlogin/index.html";
    }



});
