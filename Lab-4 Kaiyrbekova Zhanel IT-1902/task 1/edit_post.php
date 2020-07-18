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

    <button>Edit</button>
</form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $title = $_POST['title'] ;
        $content = $_POST['content'];
        $published_at = $_POST['published_at'];
        if (empty($title)) {
            echo "Title cannot be empty!";
            return;
        }

        if (isset($_POST['content'])){
            $sql = "UPDATE article SET content = '$content' WHERE title = '$title' ";
        }

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    }


    ?>
</body>
</html>
