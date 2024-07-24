<?php
function connect() {
    $servername = "localhost";
    $username = "root";
    $password = "";

    global $conn;
    $conn = new mysqli($servername, $username, $password);
}

connect();
?>