<?php
    include "koneksi1.php";
    header('Content-Type: text/xml');
    $query = "SELECT * FROM produk";
    $hasil = mysqli_query($con, $query);
    $jumField = mysqli_num_fields($hasil);
    echo "<?xml version = '1.0'?>";
    echo "<data>";
    while ($data = mysqli_fetch_array($hasil)){   
        echo "<produk>";
        echo"<idproduk>",$data['id_produk'],"</idproduk>";
        echo"<namaproduk>",$data['nama_produk'],"</namaproduk>";
        echo"<jenisproduk>",$data['jenis_produk'],"</jenisproduk>";
        echo"<stox>",$data['stok'],"</stox>";
        echo"<har>",$data['harga'],"</har>";
        echo"<gamb>",$data['gambar'],"</gamb>";
        echo "</produk>";
    }
    echo "</data>";