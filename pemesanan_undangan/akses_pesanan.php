<?php
    $url = "http://localhost/pemesanan_undangan/get_pesanan.php";
    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($client);
    $result = json_decode($response);
    foreach ($result as $r) {
        echo "<p>";
        echo "ID Pemesanan : " . $r->id_pemesanan . "<br />";
        echo "Tanggal Pemesanan : " . $r->tanggal_pemesanan . "<br />";
        echo "Total Bayar : " . $r->total_belanja . "<br />";
        echo "</p>";
}
