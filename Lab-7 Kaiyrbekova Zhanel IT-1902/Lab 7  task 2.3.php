<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function post(){
            var country = $("#input").val();
            $.post("1.php",
                {
                    country: country
                },
                function(data, status){
                    $('#output').html(data);
                });
        }
    </script>
    <title>Lab7 task 2.3</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <input type="text" id="input" placeholder="Enter country name...">
    <input type="button" value="Submit" onclick="post()">
</form>
<p id="output"></p>
</body>
</html>