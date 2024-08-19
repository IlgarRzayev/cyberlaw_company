<?php
require_once("config.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $message = mysqli_real_escape_string($connection, $_POST['message']);

    $query = "INSERT INTO contact (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    
    if (mysqli_query($connection, $query)) {
        header("Location: communicate.php");
    } else {
        echo "Hata: " . mysqli_error($connection);
    }

    mysqli_close($connection);
}
?>
