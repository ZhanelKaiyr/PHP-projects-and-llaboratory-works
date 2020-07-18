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
        font-family: "Arial";
        padding:50px;
        margin :50px;
    }

</style>
<body>

<div >
<form method="post">
    <div>
        <label for="name">Name of Product</label>
        <input name="name" id="name" placeholder="Name of Product">
    </div>
    <div>
        <label for="discription">discription of the product</label>
        <textarea name ="discrip" rows="4" cols="40" id="discrip" placeholder="discription"></textarea>
    </div>

    <div>
        <label for="number">Number of products</label>
        <input type="number" id="number" name="number">
    </div>

    <input type="submit" name="add" value="add">
    <input type="submit" name="edit" value="edit">
    <input type="submit" name="delete" value="delete">
</form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $db_host = "localhost";
    $db_name = "mydatabase";
    $db_user = "zhanel";
    $db_pass = "1234";

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo "Connected successfully.";


        $name = $_POST['name'] ;
        $discrip = $_POST['discrip'];
        $number = $_POST['number'];
        if (empty($name)) {
            echo "Name of the product cannot be empty!";
            return;
        }
    if (isset($_POST['add'])) {

        $sql = "INSERT INTO products (name, discrip, number) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $name, $discrip, $number);
        $results = $stmt->execute();

        if ($results === false){
            echo $stmt->error;
        } else {

            $id = $stmt->insert_id;
            echo "Inserted record with ID: $id";
        }
           $stmt->close();

      }
    else if (isset($_POST['edit'])) {
            $sql = "UPDATE products SET number = '$number'and discrip='$discrip' WHERE name = '$name' ";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi",$name, $discrip,$number);
        $stmt->execute();


        if ($conn->query($sql) === TRUE) {
            echo "<br>Record updated successfully<br>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $stmt->close();
    }
    else if (isset($_POST['delete'])) {
            $stmt = $conn->prepare("DELETE FROM products WHERE name = '$name'");
            $stmt->bind_param("s", $name);
            $stmt->execute();
        if ($conn->query($sql) === TRUE) {
            echo "<br>Record deleted successfully<br>";
        } else {
            echo "Error deleting record: " . $conn->error;
        }

  }
    $stmt->close();
    }

    $sql1 = "SELECT * FROM products";

    $result1 = $conn->query($sql1);

    if ($result1->num_rows > 0) {
        // output data of each row
        while($row = $result1->fetch_assoc()) {
            print "id: " . $row["id"]. "  Name of product: " . $row["name"]. " Content: " . $row["discrip"]. "<br>". "Number of products: " . $row["number"]. "<br>";
        }
    } else {
        echo " 0 results";
    }

    ?>

</div>
</body>
</html>

