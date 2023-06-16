<?php
// require_once = memanggil file koneksi database
require_once('koneksi.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //input 
    $varibel = $_POST['key'];
    //proses
    $proses = "";
    //output
    if (mysqli_query($con, $proses)) {
        //true
        $response["success"] = 1;
        $response["pesan"] = "berhasil";
        echo json_encode($response);
    } else {
        //false
        $response["success"] = 0;
        $response["pesan"] = "gagal";
        echo json_encode($response);
    }
} else {
    $response["success"] = 0;
    $response["pesan"] = "tidak ada request";
    echo json_encode($response);
}
