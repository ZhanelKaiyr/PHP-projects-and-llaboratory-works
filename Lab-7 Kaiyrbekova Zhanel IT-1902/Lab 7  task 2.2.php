<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Lab7 task 2.2</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            var objXMLHttpRequest = new XMLHttpRequest();
            $("#ajaxGET").click(function(){
                objXMLHttpRequest.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        document.getElementById("phpResult").innerHTML = this.responseText;
                    }
                };
                objXMLHttpRequest.open('GET', 'Lab 7  task 2.1.php');
                objXMLHttpRequest.send();

            });

            $("#ajaxPOST").click(function(){
                objXMLHttpRequest.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        document.getElementById("phpResult").innerHTML = this.responseText;
                    }
                };
                objXMLHttpRequest.open('POST', 'Lab 7  task 2.1.php');
                objXMLHttpRequest.send();
            });
        });
    </script>
</head>
<body>
<button id="ajaxGET">Through GET</button>
<button id="ajaxPOST">Through POST</button>
<p id="phpResult"></p>
</body>
</html>