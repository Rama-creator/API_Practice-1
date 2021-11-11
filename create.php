<?php
require_once('connection.php');

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];


$sql = "INSERT INTO customers(name,phone,email) VALUES ('$name','$phone','$email')";
$query = mysqli_query($connection, $sql);

if ($query) {
    echo json_encode(array(
        'took' => 0.00026,
        'code' => 200,
        'status' => 'Created data has been successfully'
    ));
} else {
    echo json_encode(array(
        'took' => 0.00026,
        'code' => 501,
        'status' => 'error!'
    ));
}
