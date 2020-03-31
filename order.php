<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlinesaharsa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["inputName"]);
    $mobile = test_input($_POST["mobile"]);
    $wardNo = test_input($_POST["inputWard"]);
    $address = test_input($_POST["inputAddress"]);
    $orders = $_POST["orders"];

$sql = "INSERT INTO customer (name, mobile, wardno, address, city, state, order_request) VALUES ('$name','$mobile',$wardNo,'$address','SAHARSA','BIHAR','$orders')";


if ($conn->query($sql) === true) {
    echo "<h1>You have successfully placed your order<h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
