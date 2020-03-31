Welcome <?php echo $_POST["inputName"]; ?><br>
<h1>Ordered placed succefully</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["inputName"]);
    $mobile = test_input($_POST["mobile"]);
    $wardNo = test_input($_POST["inputWard"]);
    $address = test_input($_POST["inputAddress"]);
        echo "$name+$mobile+$wardNo+$address";

        //save to db
        
$servername =localhost;
$username = root;
$password ='';
$dbname = onlinesaharsa;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO `customer` (`name`, `mobile`, `wardno`, `address`, `city`, `state`, `order_request`) VALUES ($name,$mobile,$wardNo,$address,'SAHARSA','BIHAR','NOTHING YET')";
// $result = $conn->query($sql);
if ($conn->query($sql) === true) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
// echo "connection closed";

}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// function saveCustomer()
// {
 
// }

?>
