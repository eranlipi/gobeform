<?php

const MYSQL_HOST = "localhost";

const MYSQL_USER = "root";
const MYSQL_PWD = "";
const MYSQL_DB = "test";

if (isset($_POST['submit'])) {


    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $birthdate = filter_input(INPUT_POST, 'birthdate', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_INT);
    $radio = filter_input(INPUT_POST, 'Radio', FILTER_SANITIZE_STRING);
    $ID = filter_input(INPUT_POST, 'ID', FILTER_SANITIZE_STRING);
    $agree = filter_input(INPUT_POST, 'agree', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
    $agree = json_encode($agree);



// MYSQLI

    $link = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PWD, MYSQL_DB);
    $sql = "INSERT INTO lead VALUES('$ID','$name','$radio','$phone','$birthdate', '$agree')";
    $result = mysqli_query($link, $sql);

    if ($result && mysqli_affected_rows($link) > 0) {

        header('location: index.php?sm=Your details is saved');
        exit;
    }
}
?>