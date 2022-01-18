<?php
    include "koneksi.php";
    // untuk mengambil data dari tabel produk kemudian di tampilkan secara urut berdasarkan id_produk
    $sql="select * from produk order by id_produk";
    $tampil = mysqli_query($koneksi,$sql);// buat query
    if (mysqli_num_rows($tampil) > 0) { // menampilkan data
        $no=1;// mengurutkan dari no 1
        $response = array();// membuat response menjadi array agar dapat di export menjadi array
        $response["data"] = array();// mengambil data dan di jadikan menjadi array 
        while ($r = mysqli_fetch_array($tampil)) {
            // menampilkan semua atribut 
            $h['id_produk'] = $r['id_produk'];// membuat tabel id_produk dan memanggil data id_produk dari tabel id_produk
            $h['nama_produk'] = $r['nama_produk'];// membuat tabel nama_produk dan memanggil data nama_produk dari tabel nama_produk
            $h['jenis_produk'] = $r['jenis_produk'];// membuat tabel jenis_produk dan memanggil data jenis_produk dari tabel jenis_produk
            $h['stok'] = $r['stok'];// membuat tabel stok dan memanggil data stok dari tabel stok
            $h['harga'] = $r['harga'];// membuat tabel harga dan memanggil data harga dari tabel harga
            $h['gambar'] = $r['gambar'];// membuat tabel gambar dan memanggil data gambar dari tabel gambar
            // menyimpan data array ke dalam "data" supaya bisa di proses response
            array_push($response["data"], $h);// simpan data array tersebut kedalam "data" agar dipanggil di proses response
        }
        echo json_encode($response);// menakhiri proses json
    }
    else {
        $response["message"]="tidak ada data";// menampilkan pesan tidak ada data
        echo json_encode($response);// menakhiri proses json
    }
?>