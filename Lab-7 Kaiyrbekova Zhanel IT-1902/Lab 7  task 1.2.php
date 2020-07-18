<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Example.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function()
        {
            var readerView = false;
            $("#readerViewButton").click(function()
            {
                if(readerView == false)
                {
                    $('.header, .footer, .left, .right').slideToggle();
                    $('.main').height("100%");
                    $('.main').width("100%");
                    readerView = true;
                }
                else
                {
                    $('.header, .footer, .left, .right').slideToggle();
                    $('.main').width("60%");
                    $('.main, .left, .right').height("70%");
                    readerView = false;
                }
            });
        });
    </script>
    <title>Lab7 task 1.2</title>
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
        <input type="button" value="reader view" id="readerViewButton">
    </div>
    <div class="right">
        <h1>website right part</h1>
    </div>
    <div class="footer">
        <h1>website footer</h1>
    </div>
</div>
</body>
</html>
