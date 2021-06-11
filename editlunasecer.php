<?php
include "configuration/config_etc.php";
include "configuration/config_include.php";
include "configuration/config_alltotal.php";
etc();encryption();session();connect();head();body();timing();
pagination();

$tabeldatabase = "bayarecer"; // tabel database
$forward = mysqli_real_escape_string($conn, $tabeldatabase); // tabel database

$no_nota 		= $_GET['no_nota'];
$total_bayar	= $_GET['total_bayar'];
$jumlah_bayar	= $_GET['jumlah_bayar'];
$update_bayar	= $jumlah_bayar+$total_bayar;
$sisa_bayar		= $_GET['sisa_bayar'];
$update_sisa	= $sisa_bayar-$total_bayar;

//query update
$query = "UPDATE $forward SET bayar='$update_bayar' , kembali='$update_sisa' WHERE nota='$no_nota' ";

if (mysqli_query($conn, $query)) {
 ?>
 <script type="text/javascript">
    window.onload = function() {
    	var win = window.open('print_two.php?nota=<?php echo $no_nota; ?>', 'Cetak', ' menubar=0, resizable=0,dependent=0,status=0,width=260,height=400,left=10,top=10', '_blank');
    	if (win) {
    		alert('Berhasil, Data telah disimpan!');
        	win.focus();
        	window.location = 'add_jual_lunasecer';
    	} else {
    		alert('Silakan Allow Pop Up bila ingin mencetak!');
    	}
    }
 </script>
 <?php
 // echo ("
 // 	<script LANGUAGE='JavaScript'>
 //    	window.alert('Berhasil, Trx Pelunasan Berhasil Di Update');
 //    	window.location.href='add_jual_lunas';
 //    </script>");
}
else {
 echo "ERROR, data gagal diupdate". mysqli_error($query);
}
?>