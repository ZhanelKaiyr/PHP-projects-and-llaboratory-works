<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 3 task 2 </title>
</head>
<style>
    h1{
        text-align: center;
    }
    body{
        background-color: darkkhaki;
        color:darkolivegreen;
        font-family: "Times New Roman";
        font-size: medium;

    }
    .class {
        display: grid;
        grid-template-columns: auto auto;
        padding: 15px;
        margin: 15px;

    }
    </style>
<body>
<?php
$db_host = "localhost";
$db_name = "onlineshop";
$db_user = "zhanel";
$db_pass = "1234";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<h1>online shop </h1>
<div class="class">
    <div>
        <h4>For users</h4>
        <?php
        $sql = "SELECT * FROM products ORDER BY number";

        $results = $conn->query($sql);

        if ($results === false) {
            echo $conn->connect_error;
        } else {
            $articles = $results->fetch_assoc();

            var_dump($articles);
        }


        $sql = "SELECT * FROM products";

        $result = $conn->query($sql);

        echo "<br>";

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo $row["id"] . "  " . $row["name"]. " " . $row["describtion"]. " " .$row["number"]. "<br>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </div>

    <div>
        <form method="post" action="user.php">
            <div>
                <label for="user">Username:</label>
                <input name="user" id="user" placeholder="User name">
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
                <button >Enter</button>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $username=$_POST['user'] ;
                $password= $_POST['password'];
                if (empty($username)) {
                    echo "Username cannot be empty!";
                    return;
                }
                if (empty($password)) {
                    echo "Username cannot be empty!";
                    return;
                }
                if ($username=="zhanel" && $password=="1234"){
                   return;

                }
            }
            ?>
        </form>


    </div>

</div>
</body>
</html>

