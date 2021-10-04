<?php
$mysqli = mew mysqli('localhost', 'admin1', 'admin1', 'cleo') or die(mysqli_error($mysqli));

if (isset($_POST['save'])){
    $name = $_POST['name'];
    $type = $_POST['type']
    $price = $_POST['price']
    
    $mysqli->query("INSERT INTO store (name, type, price) VALUES('$name', '$type', '$price')") or 
             die($mysqli->error);
}