
$(document).ready(function () {

    $("#reg_user").click(function () {

        var response = validateForm();

        if (response == 0) {
            return;
        }

        var email = $("#email").val();
        var name = $("#name").val();
        var password = $("#password").val();

        $.ajax({

            url: './process.php',
            type: 'post',
            data: {
                'name': name,
                'email': email,
                'password': password,
                'save': 1
            },
            beforeSend: function () {
                $("#result").html("<p> Παρακαλω περιμενε... </p>");
            },

            success: function (response) {
                window.location.replace("/login.php");
            },
            error: function (e) {
                $("#result").html("ERROR");
            }

        });
    }

    );

    function validateForm() {
        if ($("#name").val() == "") {
            $("#name").after("<br><span style='font-size:12px;color:red;'> Καταχωρήστε το ονοματεπώνυμο σας </span>");
            return 0;
        }
        if ($("#password").val() !== $("#password_2").val()) {
            $("#password_2").after("<br><span style='font-size:12px;color:red;'> ο κωδικός πρόσβασης δεν ταιριάζει</span>");
            return 0;
        }
        return 1;
    }
    $("#email").blur(function () {

        var email = $('#email').val();

        if (email == "") {
            return;
        }

        $.ajax({
            url: 'process.php',
            type: 'post',
            data: {
                'email': email,
                'email_check': 1,
            },

            success: function (response) {
                $("#email").after(response);
            },
            error: function (e) {
                $("#result").html("Error me to email");
            }

        });
    });

    $("#name").keyup(function () {
        $("#error").remove();
    });

    $("#email").keyup(function () {
        $("span").remove();
    });

    $("#password_2").keyup(function () {
        $("#error").remove();
    });

});