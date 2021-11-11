<?php
require_once('connection.php');
//php tidak menyediakan fitur PUT jadi pakai parse
parse_str(file_get_contents('php://input'), $value);


$id = $value['id'];
$name = $value['name'];
$email = $value['email'];
$phone = $value['phone'];



//customers ialah nama tabel 
$sql = "UPDATE customers SET name='$name', email='$email', phone='$phone' WHERE id ='$id'"; //where untuk mendeklarasikan identitas 
$query = mysqli_query($connection, $sql);

if ($query) {
    echo json_encode(array(
        'took' => 0.00026,
        'code' => 200,
        'status' => 'Updated data has been successfully'
    ));
} else {
    echo json_encode(array(
        'took' => 0.00026,x
        'code' => 501,
        'status' => 'error!'
    ));
}
