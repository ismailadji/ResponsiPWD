<?php
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
    $pdf = new FPDF('l','mm','A5');
// membuat halaman baru
    $pdf->AddPage();
// setting jenis font yang akan digunakan
    $pdf->SetFont('Arial','B',16);
// mencetak string 
    $pdf->Cell(190,7,'DATA PESANAN PELANGGAN',0,1,'C');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,7,'DAFTAR DATA PESANAN UNDANGAN PERNIKAHAN ',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(30,6,'ID Pemesanan',1,0);
    $pdf->Cell(50,6,'Tanggal Pesan',1,0);
    $pdf->Cell(25,6,'Total Bayar',1,1);
    $pdf->SetFont('Arial','',10);
include 'koneksi.php';
$pemesanan = mysqli_query($koneksi, "select * from pemesanan");
    while ($row = mysqli_fetch_array($pemesanan)){
        $pdf->Cell(30,6,$row['id_pemesanan'],1,0);
        $pdf->Cell(50,6,$row['tanggal_pemesanan'],1,0);
        $pdf->Cell(25,6,$row['total_belanja'],1,1);
    }
    $pdf->Output();
?>