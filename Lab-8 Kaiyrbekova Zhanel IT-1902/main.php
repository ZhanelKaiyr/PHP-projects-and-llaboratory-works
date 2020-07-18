<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 8</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <script src="js.js"></script>
</head>
<body>
<main>
    <div class="login_form">
        <p>Authorization</p>
        <span id="log_message"></span>
        <form>
            <span class="error text-danger" id="errormsg" style="display: none"></span>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp" placeholder="Enter email">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="Password1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary" id="submitbtn">Submit</button>
        </form>
    </div>


    <div class="registration_form">
        <p>Registration</p>
        <span id="reg_message"></span>
        <form>
            <span class="error text-danger" id="errormsg" style="display: none"></span>

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" id="Name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="exampleInputSurname">Surname</label>
                <input type="text" class="form-control" id="Surname" placeholder="Surname">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <input type="password" class="form-control" id="Password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputImg">Image</label>
                <input type="text" class="form-control" id="Img" placeholder="Image">
            </div>
            <div class="form-group">
                <label for="exampleInputBirthday">Dirthday</label>
                <input type="text" class="form-control" id="Birthday" placeholder="Birthday">
            </div>
            <button type="submit" class="btn btn-primary" id="submitRegister">Submit</button>
        </form>
    </div>

</main>

</body>
</html>