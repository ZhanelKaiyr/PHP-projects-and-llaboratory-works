<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Example.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function()
        {
            var readerView = false;
            $("#readerViewButton").click(function()
            {
                if(readerView == false)
                {
                    $('.header, .footer, .left, .right').fadeTo(2000, 0);
                    readerView = true;
                }
                else
                {
                    $('.header, .footer, .left, .right').fadeTo(2000, 1);
                    readerView = false;
                }
            });

            $("#stopButton").click(function () {
                $('.header, .footer, .left, .right').stop();
            });
        });
    </script>
    <style>
        .button_1
        {
            position: absolute;
            z−index: 2;
            width : 100px;
        }
        .button_2
        {
            position: absolute;
            z−index: 2;
            left: 10%;
        }
    </style>
    <title>Lab7 task 1.3</title>
</head>
<body>
<div class="full">
    <div class="header">
        <h1>website header</h1>
    </div>
    <div class="left">
        <h1>website left part</h1>
    </div>
    <div class="main">
        <h1>website main part</h1>
    </div>
    <div class="right">
        <h1>website right part</h1>
    </div>
    <div class="footer">
        <h1>website footer</h1>
    </div>
</div>
<div class="button_1">
    <input type="button" value="reader view" id="readerViewButton">
</div>
<div class="button_2">
    <input type="button" value="stop" id="stopButton">
</div>
</body>
</html>
