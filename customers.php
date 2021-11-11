<?php
//koneksi database
require_once('connection.php');

//method GET & GET by id menggunakan kondisi if else
if (empty($_GET)) {
    $sql = "SELECT * FROM customers";
    $query = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_array($query)) {


        //tampung dalam data array 
        $item[] = array(
            'name' => $row["name"],
            'phone' => $row["phone"],
            'email' => $row["email"],
            'id' => $row["id"],
            '_Links' => [
                "product : http://localhost/learnapi/product.php"
            ]

        );
    }
    $response = array(
        'took' => 0.0026,
        'status' => 201,
        'data' => $item,

    );
    //membuat bentuk reponse dalam bentuk format json 
    echo json_encode($response);
} else {
    $sql = "SELECT * FROM customers WHERE id=" . $_GET["id"];
    $query = mysqli_query($connection, $sql);
    //mengambil baris hasil sebagai array asosiatif (case -sensitive)
    while ($row = $query->fetch_assoc()) {


        //tampung dalam data array 
        $item[] = array(
            'name' => $row["name"],
            'phone' => $row["phone"],
            'email' => $row["email"],
            'id' => $row["id"],
            '_Links' => [
                "product : http://localhost/learnapi/product.php"
            ]
        );
    }
    $result = array(
        'took' => 0.0026,
        'status' => 200,
        'data' => $item

    );
    echo json_encode($result);
}
