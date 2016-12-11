<?php
$title = $_POST['title'];
$text = $_POST['text'];
$add = $_POST['add'];

if(isset($add)){
    if(empty($title) || empty($text)){
        echo "Заповнені не всі поля";
    }else{
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "softgroup";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO article (title, text) VALUES ('$title', '$text')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Test from Soft Group</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<form action="" method="post" id="form">
    <label>Заголовок</label><input type="text" name="title">
    <label>Текст статті</label>
    <textarea name="text">

    </textarea>
    <input type="submit" name="add" value="Добавити">
</form>
<a href="article.php">Переглянути новини</a>
</body>
</html>