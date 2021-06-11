<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
error_reporting(0);
include "configuration/config_etc.php";
include "configuration/config_include.php";
etc();
session();
connect();
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="dist/plugins/print/one.css">
<title>Cetak</title>

<?php
$decimal = "0";
$a_decimal = ",";
$thousand = ".";
?>

<?php
$nota = $_GET["nota"];

$sql1 = "SELECT * FROM data";
$hasil1 = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($hasil1);
$nama = $row['nama'];
$alamat = $row['alamat'];
$notelp = $row['notelp'];
$tagline = $row['tagline'];
$signature = $row['signature'];

$sql1 = "SELECT * FROM bayarecer where nota='$nota'";
$hasil1 = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($hasil1);
$tglbayar = $row['tglbayar'];
$bayar = $row['bayar'];
$total = $row['total'];
$kembali = $row['kembali'];
$kasir = $row['kasir'];
$jenisbyr = $row['jenisbayar'];
$noRek = $row['noRek'];
$namaRek = $row['namaRek'];
$kodecust = $row['kodecust'];

$sql100 = "SELECT * FROM bayarecer, customer WHERE bayarecer.kodecust = customer.kode AND bayarecer.kodecust = $kodecust AND bayarecer.nota = $nota";
$hasil100 = mysqli_query($conn, $sql100);
$rows = mysqli_fetch_assoc($hasil100);
$nmReseller = $rows['nama'];

$sql1 = "SELECT SUM(jumlah) as data FROM transaksimasukeceran where nota='$nota'";
$hasil1 = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($hasil1);
$totalqty = $row['data'];

?>
<table class="table-header">

  <tr>
    <td colspan="6" class="nama" style="font-size:16px; font-weight:bold; width:240px"><?php echo $nama; ?></td>
  </tr>
  <tr>
    <td colspan="6" style="font-style:italic; width:240px;  "><?php echo $tagline; ?></td>
  </tr>
  <tr>
    <td colspan="6" style="width:240px;"><?php echo $alamat; ?></td>
  </tr>
  <tr>
    <td colspan="6" style="width:240px;"><?php echo "Telp. ".$notelp; ?></td>
  </tr>
  <tr>
    <td colspan="6" style="border-bottom:double 4px #000; padding-bottom:5px;width:240px;">Ig. binawidya_glamshinekuningan01</td>
  </tr>

</table>

<table class="table-print">
  <tr class="spa">
    <td width="20%" style="width:48px;">&nbsp;</td>
    <td width="15%" style="width:28.8px;">&nbsp;</td>
    <td width="20%" style="width:43.2px;">&nbsp;</td>
    <td width="18%" style="width:48px;">&nbsp;</td>
    <td width="18%" style="width:60px;">&nbsp;</td>
    <td width="8%" style="width:12px;">&nbsp;</td>
  </tr>
  <tr>
  </tr>

  <tr>
    <td style="width:192px;" colspan="6" align="left">No.Nota - <?php echo $nota; ?></td>
  </tr>
  <tr>
    <td style="width:192px;" colspan="6" align="left"><?php echo $tglbayar; ?></td>
  </tr>
  <tr class="siv solid">
    <td colspan="6" style="width:240px;">
      <div class="solid-border"></div>
    </td>
  </tr>

  <?php

  $query1 = "SELECT * FROM  transaksimasukeceran where nota ='$nota' order by no";
  $hasil = mysqli_query($conn, $query1);
  while ($fill = mysqli_fetch_assoc($hasil)) {
  ?>

    <tr>
      <td colspan="6" style="width:240px;"><?php echo mysqli_real_escape_string($conn, $fill['nama']); ?></td>
    </tr>

    <tr>

      <td colspan="2" style="width:76.8px;">Qty : </td>
      <td style="width:43.2px;"><?php echo mysqli_real_escape_string($conn, $fill['jumlah']); ?></td>
      <td style="width:48px;" align="right">x <?php echo number_format(($fill['harga']), $decimal, $a_decimal, $thousand) . ',-'; ?></td>
      <td style="width:72px;" colspan="2" align="right"><?php echo number_format(($fill['hargaakhir']), $decimal, $a_decimal, $thousand) . ',-'; ?></td>
    </tr>

    <tr class="siv">
      <td colspan="5" style="width:228px;">
        <div class="dotted-border"></div>
      </td>
      <td style="width:12px;">(+) </td>
    </tr>

  <?php
  }

  ?>

  <tr>
    <td colspan="2" style="width:76.8px;">Total Qty</td>
    <td style="width:43.2px;"><?php echo $totalqty; ?></td>
    <td style="width:48px;"><b>Total</b></td>
    <td style="width:72px;" colspan="2" align="right"><b><?php echo number_format($total, $decimal, $a_decimal, $thousand) . ',-'; ?></b></td>
  </tr>

  <tr>
    <td colspan="3" style="width:120px;"></td>
    <td style="width:48px;">Dp</td>
    <td style="width:72px;" colspan="2" align="right"><?php echo number_format($bayar, $decimal, $a_decimal, $thousand) . ',-'; ?></td>
  </tr>

  <tr class="siv">
    <td colspan="5" style="width:228px;">
      <div class="dotted-border"></div>
    </td>
    <td style="width:12px;">(-) </td>
  </tr>

  <tr>
    <td colspan="3" style="width:116px;"></td>
    <td style="width:52px;">Sisa Bayar</td>
    <td style="width:72px;" colspan="2" align="right"><?php echo number_format($kembali, $decimal, $a_decimal, $thousand) . ',-'; ?></td>
  </tr>

  <tr class="siv solid">
    <td colspan="6" style="width:240px;">
      <div class="solid-border"></div>
    </td>
  </tr>
  <tr>
    <td style="width:237px;" colspan="6" align="right">A.N Rek. : <?php echo $namaRek; ?></td>
  </tr>
  <tr>
    <td style="width:237px;" colspan="6" align="right">Nama Customer : <?php echo $nmReseller; ?></td>
  </tr>

  <tr class="siv solid">
    <td colspan="6" style="width:240px;">
      <div class="solid-border"></div>
    </td>
  </tr>

  <tr>
    <td style="width:240px;" colspan="6">
      <pre style="white-space: pre-line;">
<center><?php echo $signature; ?></center>
          <pre></td>
          </tr>
          <tr class="siv solid">
    <td colspan="6" style="width:240px;">
      <div class="solid-border"></div>
    </td>
  </tr>
          <tr>
    <td style="width:237px;" colspan="6" align="right">Hormat Kami</td>
  </tr>
          <tr>
    <td style="width:237px;" colspan="6" align="right"><?php echo $kasir; ?></td>
  </tr>
          <tr class="terakhir">
            <td style="width:240px;" colspan="6"></td>
          </tr>
        </table>


        <script>
          setTimeout(function(){
            window.print()
          }, 2000);
        </script>