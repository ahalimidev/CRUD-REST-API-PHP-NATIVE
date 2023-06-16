<?php
// require_once = memanggil file koneksi database
require_once('koneksi.php');
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //input 
    $varibel = $_GET['key'];
    //proses
    $proses = mysqli_query($con, "");
    if (mysqli_num_rows($proses) > 0) {
        //jika ada data
        $response["success"] = 1;
        $row = mysqli_fetch_array($proses);
        $hasil = array();
        $hasil['key'] = $row['value'];
        echo json_encode($response);
    } else {
        //tidak ada data
        $response["success"] = 0;
        $response["pesan"] = "tidak ada data";
        echo json_encode($response);
    }
} else {
    $response["success"] = 0;
    $response["pesan"] = "tidak ada request";
    echo json_encode($response);
}
