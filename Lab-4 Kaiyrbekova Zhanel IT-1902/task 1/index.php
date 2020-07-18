<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 3 task 1 </title>
</head>
<body>
<?php
$db_host = "localhost";
$db_name = "mydatabase";
$db_user = "zhanel";
$db_pass = "1234";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully.";
?>

<h2>New article</h2>
<form method="post">
    <div>
        <label for="title">Title</label>
        <input name="title" id="title" placeholder="Article title">
    </div>

    <div>
        <label for="content">Content</label>
        <textarea name="content" rows="4" cols="40" id="content" placeholder="Article content"></textarea>
    </div>

    <div>
        <label for="published_at">Publication date and time</label>
        <input type="datetime-local" id="published_at" name="published_at">
    </div>

    <button>Add</button>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $title = $_POST['title'] ;
        $content = $_POST['content'];
        $published_at = $_POST['published_at'];
        if (empty($title)) {
            echo "Title cannot be empty!";
            return;
        }

        $sql = "INSERT INTO article (title, content, published_at) VALUES (?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $title, $content, $published_at);
        $results = $stmt->execute();

        if ($results === false){
            echo $stmt->error;
        } else {

            $id = $stmt->insert_id;
            echo "Inserted record with ID: $id";
        }

        $stmt->close();
    }

    $sql1 = "SELECT * FROM article";

    $result1 = $conn->query($sql1);

    if ($result1->num_rows > 0) {
        // output data of each row
        while($row = $result1->fetch_assoc()) {
            print "id: " . $row["id"]. "  Title: " . $row["title"]. " Content: " . $row["content"]. "<br>". "Date of publishing: " . $row["published_at"]. "<br>";
        }
    } else {
        echo " 0 results";
    }
    ?>
</form>
</body>
</html>


