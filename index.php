<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        Tour Website
    </header>
    <a href="/add.php">Add New Place</a>
    <h3>Places</h3>
    <?php
        include 'db_config.php';

        $sql = "SELECT * FROM places";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>{$row['name']} - {$row['description']}</li>";
            }
        } else {
            echo "No places found.";
        }

        $conn->close();
        ?>
</body>
</html>