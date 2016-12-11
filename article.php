
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "softgroup";
$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}

$query = "SELECT title, text FROM article";
$result = $mysqli->query($query);
$count = $result->num_rows;
for ($i=0;$i<$count;$i++){
    $row = $result->fetch_array(MYSQLI_BOTH);
    echo $row['title'];
    echo "<br />";
    echo $row['text'];
    echo "<br />";
}

$result->free();

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Article</title>
</head>
<body>
Всього новин <?php echo $count?>
<a href="index.php">Додати новину</a>
</body>
</html>
