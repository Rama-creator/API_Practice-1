<?php
require_once('connection.php');

parse_str(file_get_contents('php://input'), $value);

$id = $value['id'];

//customers ialah nama tabel 
$sql = "DELETE FROM customers WHERE id ='$id'"; //where untuk mendeklarasikan identitas 
$query = mysqli_query($connection, $sql);

if ($query) {
    echo json_encode(array(
        'took' => 0.00026,
        'code' => 200,
        'status' => 'Data has been deleted'
    ));
} else {
    echo json_encode(array(
        'took' => 0.00026,
        'code' => 501,
        'status' => 'error!'
    ));
}
