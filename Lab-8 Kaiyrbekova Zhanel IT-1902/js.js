$("document").ready(function() {
    $(".login_form").click(function () {
        $(".login_form").css("border" , "1px solid #9ec3ff");
        $(".registration_form").css("border" , "1px solid black");

        $("#submitbtn").prop("disabled" , false);
        $("#submitRegister").prop("disabled" , true);

    });


    $(".registration_form").click(function () {
        $(".login_form").css("border", "1px solid black");
        $(".registration_form").css("border", "1px solid green");
        $("#submitRegister").attr("disabled", false);
        $("#submitbtn").attr("disabled", true);

    });

    $("#submitbtn").click(function () {
        event.preventDefault();

        this.disabled = true;
        if ($("#Email1").val() == '' || $("#Password1").val() == '') {
            alert("no empty fields");
            this.disabled = false;
            return;
        }
        $.ajax({
            type: "POST",
            url: "log.php",
            data: {
                "request" : "login",
                "email" : $("#Email1").val(),
                "password": $("#Password1").val()
            },
            success: function (data) {
                let ans = JSON.parse(data);
                if (ans.result == "Logged in") {
                    $("#log_message").text(ans.result).css("color", "green");
                    window.location = "profile.php";
                }
                else $("#log_message").text(ans.result).css("color" , "red");

            }
        });
    });

    $("#submitRegister").click(function () {
        event.preventDefault();

        this.disabled = true;
        if ($("#Email").val() == '' ||
            $("#Password").val() == '' ||
            $("#Name").val() == '' ||
            $("#Surname").val() == '' ||
            $("#Img").val() == '' ||
            $("#birthdate").val() == '') {
            alert("no empty fields");
            this.disabled = false;
            return;
        }
        $.ajax({
            type: "POST",
            url: "register.php",
            data: {
                "email" : $("#Email").val(),
                "password": $("#Password").val(),
                "name": $("#Name").val(),
                "surname": $("#Surname").val(),
                "url": $("#Img").val(),
                "birthdate": $("#Birthday").val()
            },
            success: function (data) {
                let ans = JSON.parse(data);
                $("#reg_message").text(ans.message).css("color" , "red");
                if (ans.message == "Account created"){
                    $("#Email1").val($("#Email").val());
                    $("#Password1").val('');
                    $("#log_message").text("Please re-enter password").css("color" , "green");
                    $("#Email").val('');
                    $("#Password").val('');
                    $("#Name").val('');
                    $("#Surname").val('');
                    $("#Img").val('');
                    $("#Birthday").val('');

                }
            }
        });
    });

    $("#Email").on("input", function() {
        event.preventDefault();
        $("#reg_message").text("loading...").css('color', 'green');
        $.post('log.php', {
                request: "check",
                email: $("#Email").val()
            },
            function(data) {
                let ans = JSON.parse(data);
                if (ans.result == 'Nice choice')
                    $("#reg_message").text(ans.result).css('color' , 'green');
                else $("#reg_message").text(ans.result).css('color' , 'red');

            });
    });

});