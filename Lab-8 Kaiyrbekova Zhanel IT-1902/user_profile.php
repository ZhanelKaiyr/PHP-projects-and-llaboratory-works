<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
    <script>
        $("document").ready(function () {
            $("#log_out").click(function () {
                <?php session_destroy(); ?>
                window.location = 'main.php';
            });
        });
    </script>
    <style media="screen">
        img {
            height: 150px;
            width: 150px;
        }
    </style>
</head>

<body>
<div class="__profile_main">
    <img src="<?php echo $_SESSION["user"]['img'] ?>">
    <br>
    <p id="fullname">Name : <?php echo $_SESSION["user"]['fullname'] ?>  </p>
    <p id="__birthday">Birthday : <?php echo $_SESSION["user"]['birthday'] ?></p>
    <br>
    <button type="button" name="button" id="log_out">Log Out</button>

</div>
</body>

</html>
