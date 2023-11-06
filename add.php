<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Place</title>
</head>
<body>
    
    <?php
    // Include the database connection configuration
    include 'db_config.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $description = $_POST['description'];

        // Insert the place into the database
        $sql = "INSERT INTO places (name, description) VALUES ('$name', '$description')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Place added successfully:</p>";
            echo "<p>Name: $name</p>";
            echo "<p>Description: $description</p>";
        } else {
            echo 'Error: ' . $conn->error;
        }
    }
    ?>

    <form action="add.php" method="post">
        <label for="name">Place Name:</label>
        <input type="text" name="name" required><br>

        <label for="description">Description:</label>
        <textarea name="description"></textarea><br>

        <input type="submit" value="Add Place">
    </form>

    <a href="index.php">View All Places</a>

    <?php
    $conn->close();
    ?>
</body>
</html>