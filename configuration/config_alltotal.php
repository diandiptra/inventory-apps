<?php
include 'config_connect.php';
date_default_timezone_set("Asia/Jakarta");
$harisekarang = date('d');
$bulansekarang = date('m');
$tahunsekarang = date('Y');

// Total Data1

$sqlx2 = "SELECT COUNT(userna_me) as data FROM user";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$datax1 = $row['data'];

// Total Data2

$sqlx2 = "SELECT COUNT(kode) as data FROM supplier";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$datax2 = $row['data'];

// Total Data3

$sqlx2 = "SELECT COUNT(kode) as data FROM kategori";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$datax3 = $row['data'];

// Total Data4

$sqlx2 = "SELECT COUNT(kode) as data FROM barang";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$datax4 = $row['data'];


// Total Data1 ------------------------------------------------------------------

$sqlx2 = "SELECT COUNT(nota) as data FROM bayar WHERE nota NOT IN (SELECT nota FROM transaksimasuk)";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data1 = $row['data'];

$sqlx2 = "SELECT COUNT(nota) as data FROM bayarecer WHERE nota NOT IN (SELECT nota FROM transaksimasukeceran)";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data100 = $row['data'];

// Total Data2

$sqlx2 = "SELECT COUNT(nota) as data FROM bayar WHERE nota IN (SELECT nota FROM transaksimasuk)";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data2 = $row['data'];

$sqlx2 = "SELECT COUNT(nota) as data FROM bayarecer WHERE nota IN (SELECT nota FROM transaksimasukeceran)";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data200 = $row['data'];

// Total Data3

$sqlx2 = "SELECT COUNT(nota) as data FROM bayar WHERE nota IN (SELECT nota FROM transaksimasuk) AND tglbayar LIKE '$tahunsekarang-$bulansekarang-%'";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data3 = $row['data'];

$sqlx2 = "SELECT COUNT(nota) as data FROM bayarecer WHERE nota IN (SELECT nota FROM transaksimasukeceran) AND tglbayar LIKE '$tahunsekarang-$bulansekarang-%'";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data300 = $row['data'];

// Total Data4

$sqlx2 = "SELECT COUNT(nota) as data FROM bayar WHERE nota IN (SELECT nota FROM transaksimasuk) AND tglbayar LIKE '$tahunsekarang-$bulansekarang-$harisekarang'";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data4 = $row['data'];

$sqlx2 = "SELECT COUNT(nota) as data FROM bayarecer WHERE nota IN (SELECT nota FROM transaksimasukeceran) AND tglbayar LIKE '$tahunsekarang-$bulansekarang-$harisekarang'";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data400 = $row['data'];

// Total Data1-------------------------------------------------------------------

$sqlx2 = "SELECT COUNT(nota) as data FROM beli WHERE nota NOT IN (SELECT nota FROM transaksibeli)";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data11 = $row['data'];

// Total Data2

$sqlx2 = "SELECT COUNT(nota) as data FROM beli WHERE nota IN (SELECT nota FROM transaksibeli)";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data21 = $row['data'];

// Total Data3

$sqlx2 = "SELECT COUNT(nota) as data FROM beli WHERE nota IN (SELECT nota FROM transaksibeli) AND tglbeli LIKE '$tahunsekarang-$bulansekarang-%'";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data31 = $row['data'];

// Total Data4

$sqlx2 = "SELECT COUNT(nota) as data FROM beli WHERE nota IN (SELECT nota FROM transaksibeli) AND tglbeli LIKE '$tahunsekarang-$bulansekarang-$harisekarang'";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data41 = $row['data'];


// Total Data1-------------------------------------------------------------------

$sqlx2 = "SELECT SUM(total) AS data FROM bayar WHERE nota IN (SELECT nota FROM transaksimasuk)";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data12 = $row['data'];

$sqlx2 = "SELECT SUM(total) AS data FROM bayarecer WHERE nota IN (SELECT nota FROM transaksimasukeceran)";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data120 = $row['data'];

// Total Data2

$sqlx2 = "SELECT SUM(total) AS data FROM bayar WHERE nota IN (SELECT nota FROM transaksimasuk) AND tglbayar LIKE '$tahunsekarang-%'";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data22 = $row['data'];

$sqlx2 = "SELECT SUM(total) AS data FROM bayarecer WHERE nota IN (SELECT nota FROM transaksimasukeceran) AND tglbayar LIKE '$tahunsekarang-%'";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data220 = $row['data'];

// Total Data3

$sqlx2 = "SELECT SUM(total) AS data FROM bayar WHERE nota IN (SELECT nota FROM transaksimasuk) AND tglbayar LIKE '$tahunsekarang-$bulansekarang-%'";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data32 = $row['data'];

$sqlx2 = "SELECT SUM(total) AS data FROM bayarecer WHERE nota IN (SELECT nota FROM transaksimasukeceran) AND tglbayar LIKE '$tahunsekarang-$bulansekarang-%'";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data320 = $row['data'];

// Total Data4

$sqlx2 = "SELECT SUM(total) AS data FROM bayar WHERE nota IN (SELECT nota FROM transaksimasuk) AND tglbayar LIKE '$tahunsekarang-$bulansekarang-$harisekarang'";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data42 = $row['data'];

$sqlx2 = "SELECT SUM(total) AS data FROM bayarecer WHERE nota IN (SELECT nota FROM transaksimasukeceran) AND tglbayar LIKE '$tahunsekarang-$bulansekarang-$harisekarang'";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data420 = $row['data'];


// Total Data1-------------------------------------------------------------------

$sqlx2 = "SELECT (SUM(total)-SUM(keluar)) AS data FROM bayar WHERE nota IN (SELECT nota FROM transaksimasuk)";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data13 = $row['data'];

$sqlx2 = "SELECT (SUM(total)-SUM(keluar)) AS data FROM bayarecer WHERE nota IN (SELECT nota FROM transaksimasukeceran)";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data130 = $row['data'];

// Total Data2

$sqlx2 = "SELECT (SUM(total)-SUM(keluar)) AS data FROM bayar WHERE nota IN (SELECT nota FROM transaksimasuk) AND tglbayar LIKE '$tahunsekarang-%'";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data23 = $row['data'];

$sqlx2 = "SELECT (SUM(total)-SUM(keluar)) AS data FROM bayarecer WHERE nota IN (SELECT nota FROM transaksimasukeceran) AND tglbayar LIKE '$tahunsekarang-%'";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data230 = $row['data'];

// Total Data3

$sqlx2 = "SELECT (SUM(total)-SUM(keluar)) AS data FROM bayar WHERE nota IN (SELECT nota FROM transaksimasuk) AND tglbayar LIKE '$tahunsekarang-$bulansekarang-%'";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data33 = $row['data'];

$sqlx2 = "SELECT (SUM(total)-SUM(keluar)) AS data FROM bayarecer WHERE nota IN (SELECT nota FROM transaksimasukeceran) AND tglbayar LIKE '$tahunsekarang-$bulansekarang-%'";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data330 = $row['data'];

// Total Data4

$sqlx2 = "SELECT (SUM(total)-SUM(keluar)) AS data FROM bayar WHERE nota IN (SELECT nota FROM transaksimasuk) AND tglbayar LIKE '$tahunsekarang-$bulansekarang-$harisekarang'";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data43 = $row['data'];

$sqlx2 = "SELECT (SUM(total)-SUM(keluar)) AS data FROM bayarecer WHERE nota IN (SELECT nota FROM transaksimasukeceran) AND tglbayar LIKE '$tahunsekarang-$bulansekarang-$harisekarang'";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data430 = $row['data'];


// Total Data1-------------------------------------------------------------------

$sqlx2 = "SELECT SUM(biaya) AS data FROM operasional";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data14 = $row['data'];

// Total Data2

$sqlx2 = "SELECT SUM(biaya) AS data FROM operasional WHERE tanggal LIKE '$tahunsekarang-%'";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data24 = $row['data'];

// Total Data3

$sqlx2 = "SELECT SUM(biaya) AS data FROM operasional WHERE tanggal LIKE '$tahunsekarang-$bulansekarang-%'";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data34 = $row['data'];

// Total Data4

$sqlx2 = "SELECT SUM(biaya) AS data FROM operasional WHERE tanggal LIKE '$tahunsekarang-$bulansekarang-$harisekarang'";
$hasilx2 = mysqli_query($conn, $sqlx2);
$row = mysqli_fetch_assoc($hasilx2);
$data44 = $row['data'];
