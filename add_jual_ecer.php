<!DOCTYPE html>
<html>
<?php
include "configuration/config_etc.php";
include "configuration/config_include.php";
etc();
encryption();
session();
connect();
head();
body();
timing();
//alltotal();
pagination();
?>

<?php
if (!login_check()) {
?>
  <meta http-equiv="refresh" content="0; url=logout" />
<?php
  exit(0);
}
?>
<div class="wrapper">
  <?php
  theader();
  menu();
  ?>
  <div class="content-wrapper">
    <section class="content-header">
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12">
          <!-- ./col -->

          <!-- SETTING START-->

          <?php
          error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
          include "configuration/config_chmod.php";
          $halaman = "jual_ecer"; // halaman
          $dataapa = "Penjualan Eceran"; // data
          $tabeldatabase = "transaksimasukeceran"; // tabel database
          $chmod = $chmenu6; // Hak akses Menu
          $forward = mysqli_real_escape_string($conn, $tabeldatabase); // tabel database
          $forwardpage = mysqli_real_escape_string($conn, $halaman); // halaman
          $search = $_POST['search'];
          $insert = $_POST['insert'];

          function autoNumber()
          {

            global $conn;
            global $forward;
            $query = "SELECT MAX(RIGHT(nota, 4)) as max_id FROM bayarecer ORDER BY nota";
            $result = mysqli_query($conn, $query);
            $data = mysqli_fetch_array($result);
            $id_max = $data['max_id'];
            $sort_num = (int) substr($id_max, 1, 4);
            $sort_num++;
            $new_code = sprintf("%04s", $sort_num);
            return $new_code;
          }
          ?>

          <?php
          $decimal = "0";
          $a_decimal = ",";
          $thousand = ".";
          ?>


          <!-- SETTING STOP -->

          <script>
            function SubmitForm() {
              var kode = $("#kode").val();
              var kodecust = $("#kodecust").val();
              var barang = $("#barang").val();
              var nama = $("#nama").val();
              var hargajual = $("#hargajual").val();
              var hargabeli = $("#hargabeli").val();
              var jumlah = $("#jumlah").val();
              var hargaakhir = $("#hargaakhir").val();
              var datatotal = $("#datatotal").val();

              //alert("Produk : "+nama+"\nTelah berhasil ditambahkan!");

              $.post("add_jual_ecer.php", {
                kode: kode,
                barang: barang,
                nama: nama,
                kodecust: kodecust,
                hargajual: hargajual,
                hargabeli: hargabeli,
                jumlah: jumlah,
                hargaakhir: hargaakhir,
                datatotal: datatotal
              }, function(data) {

              });


            }
          </script>

          <!-- BOX INSERT BERHASIL -->

          <script>
            window.setTimeout(function() {
              $("#myAlert").fadeTo(500, 0).slideUp(1000, function() {
                $(this).remove();
              });
            }, 5000);
          </script>
          <?php
          if ($insert == "10") {
          ?>
            <div id="myAlert" class="alert alert-success alert-dismissible fade in" role="alert">
              <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong> Berhasil!</strong> <?php echo $dataapa; ?> telah berhasil <b>ditambahkan</b> ke Data <?php echo $dataapa; ?>.
            </div>

          <?php
          }
          if ($insert == "3") {
          ?>
            <div id="myAlert" class="alert alert-success alert-dismissible fade in" role="alert">
              <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong> Berhasil!</strong> <?php echo $dataapa; ?> telah <b>terupdate</b>.
            </div>

            <!-- BOX UPDATE GAGAL -->
          <?php
          }
          ?>

          <!-- BOX INFORMASI -->
          <?php
          if ($chmod >= 2 || $_SESSION['jabatan'] == 'admin') {
          ?>


            <!-- KONTEN BODY AWAL -->
            <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title">Data <?php echo $dataapa; ?></h3>
              </div>
              <!-- /.box-header -->

              <div class="box-body">
                <div class="table-responsive">
                  <!----------------KONTEN------------------->
                  <?php
                  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

                  $kode = $nama = $hargajual = $hargabeli = $jumlah = $hargaakhir = $tglnota = $kodecust = $bayar = $kembalian = "";
                  $no = $_GET["no"];
                  $kode = $_POST['kode'];
                  $hargaakhir = $_POST['hargaakhir'];
                  $tglnota = $_POST['tglnota'];
                  $datatotal = $_POST['datatotal'];
                  $insert = '1';



                  if (($no != null || $no != "") && ($chmod >= 3 || $_SESSION['jabatan'] == 'admin')) {

                    $sql = "select * from $tabeldatabase where kode='$kode'";
                    $hasil2 = mysqli_query($conn, $sql);


                    while ($fill = mysqli_fetch_assoc($hasil2)) {


                      $kode = $fill["kode"];
                      $nama = $fill["nama"];
                      $insert = '3';
                    }
                  }
                  ?>
                  <?php

                  if ($kode == null || $kode == "") {

                    $sqle = "SELECT SUM(hargaakhir) as data FROM transaksimasukeceran WHERE nota=" . autoNumber() . "";
                    $hasile = mysqli_query($conn, $sqle);
                    $row = mysqli_fetch_assoc($hasile);
                    $datatotal = $row['data'];

                    $sqle = "SELECT SUM(hargabeliakhir) as data FROM transaksimasukeceran WHERE nota=" . autoNumber() . "";
                    $hasile = mysqli_query($conn, $sqle);
                    $row = mysqli_fetch_assoc($hasile);
                    $databelitotal = $row['data'];
                  } else {

                    $sqle = "SELECT SUM(hargaakhir) as data FROM transaksimasukeceran WHERE nota='$kode'";
                    $hasile = mysqli_query($conn, $sqle);
                    $row = mysqli_fetch_assoc($hasile);
                    $datatotal = $row['data'];

                    $sqle = "SELECT SUM(hargabeliakhir) as data FROM transaksimasukeceran WHERE nota='$kode'";
                    $hasile = mysqli_query($conn, $sqle);
                    $row = mysqli_fetch_assoc($hasile);
                    $databelitotal = $row['data'];
                  }


                  if (isset($_POST["tambah"])) {
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                      $kode = mysqli_real_escape_string($conn, $_POST["kode"]);
                      $nama = mysqli_real_escape_string($conn, rtrim(preg_replace("/[^a-zA-Z]/", " ", $_POST["nama"]), " Banyaknya "));
                      $barang = mysqli_real_escape_string($conn, $_POST["barang"]);
                      $hargajual = mysqli_real_escape_string($conn, $_POST["hargajual"]);
                      $hargabeli = mysqli_real_escape_string($conn, $_POST["hargabeli"]);
                      $jumlah = mysqli_real_escape_string($conn, $_POST["jumlah"]);
                      $kodecust = mysqli_real_escape_string($conn, $_POST["kodecust"]);
                      $hargaakhir = mysqli_real_escape_string($conn, $_POST["hargaakhir"]);
                      $hargabeliakhir = mysqli_real_escape_string($conn, $_POST["hargabeli"] * $_POST["jumlah"]);
                      $stok = mysqli_real_escape_string($conn, $_POST["stok"]);
                      $insert = ($_POST["insert"]);


                      $sql = "select * from $tabeldatabase where nota='$kode' and kode='$barang'";
                      $result = mysqli_query($conn, $sql);

                      if (mysqli_num_rows($result) > 0) {

                        echo "<script type='text/javascript'>  alert('Barang sudah ada, silakan hapus dahulu untuk merubah!');</script>";
                      } else if (($chmod >= 2 || $_SESSION['jabatan'] == 'admin') && ($jumlah <= $stok && $jumlah >= '1')) {

                        $sqle3 = "SELECT * FROM barang where kode='$barang'";
                        $hasile3 = mysqli_query($conn, $sqle3);
                        $row = mysqli_fetch_assoc($hasile3);
                        $terjualawal = $row['terjual'];
                        $terbeliawal = $row['terbeli'];

                        $terjualakhir = $terjualawal + $jumlah;
                        $sisaakhir = $stok - $jumlah;
                        //var_dump($kodecust);exit;
                        if ($sisaakhir >= '0') {
                          $sql2 = "insert into $tabeldatabase values( '$kode','$barang','$nama','$hargajual',$hargabeli,'$jumlah','$hargaakhir','$hargabeliakhir','')";
                          $insertan = mysqli_query($conn, $sql2);

                          $sql3 = "UPDATE barang SET terjual='$terjualakhir', sisa='$sisaakhir' where nama LIKE '$nama%'";
                          $updatestok = mysqli_query($conn, $sql3);

                          echo "<script type='text/javascript'>  alert('Berhasil, Produk telah berhasil ditambahkan!');</script>";
                        } else {
                          echo "<script type='text/javascript'>  alert('Gagal, Stok Kurang !');</script>";
                        }
                      } else {
                        echo "<script type='text/javascript'>  alert('Gagal, Stok Kurang / Jumlah tidak boleh kosong!');</script>";
                      }
                    }
                  }




                  if (isset($_POST["simpan"])) {
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                      $kode = mysqli_real_escape_string($conn, $_POST["kode"]);
                      $tglnota = mysqli_real_escape_string($conn, $_POST["tglnota"]);
                      $bayar = mysqli_real_escape_string($conn, $_POST["bayar"]);
                      $kembalian = mysqli_real_escape_string($conn, $_POST["kembalian"]);
                      $kodecust = mysqli_real_escape_string($conn, $_POST["kodecust"]);
                      $jenisbyr = mysqli_real_escape_string($conn, $_POST["jenisbyr"]);
                      $noRek = mysqli_real_escape_string($conn, $_POST["noRek"]);
                      $namaRek = mysqli_real_escape_string($conn, $_POST["namaRek"]);
                      $kasir = $_SESSION["username"];
                      $insert = ($_POST["insert"]);


                      $sql = "select * from bayarecer where nota='$kode'";
                      $result = mysqli_query($conn, $sql);

                      $usersql = "select * from user where userna_me = '$kasir'";
                      $userres = mysqli_query($conn, $usersql);
                      $userrow = mysqli_fetch_assoc($userres);
                      $namaKasir = $userrow['nama'];


                      if (mysqli_num_rows($result) > 0) {

                        echo "<script type='text/javascript'>  alert('Data tidak bisa diubah!');</script>";
                      } else if (($chmod >= 2 || $_SESSION['jabatan'] == 'admin') && ($bayar <= $datatotal && $bayar != null)) {

                        $sql2 = "insert into bayarecer values('$kode','$tglnota','$bayar','$datatotal','$kembalian','$databelitotal','$namaKasir','','$kodecust','$jenisbyr','$noRek','$namaRek')";
                        $insertan = mysqli_query($conn, $sql2);

                  ?>
                        <script type="text/javascript">
                          window.onload = function() {
                            var win = window.open('print_two.php?nota=<?php echo $kode; ?>', 'Cetak', ' menubar=0, resizable=0,dependent=0,status=0,width=260,height=400,left=10,top=10', '_blank');
                            if (win) {
                              alert('Berhasil, Data telah disimpan!');
                              win.focus();
                              window.location = 'add_jual_ecer';
                            } else {
                              alert('Silakan Allow Pop Up bila ingin mencetak!');
                            }
                          }
                        </script>
                  <?php

                        //         echo "<script type='text/javascript'>  alert('Berhasil, Data telah disimpan!'); </script>";
                        //echo "<script type='text/javascript'>window.location = 'add_jual';</script>";
                      } else {
                        echo "<script type='text/javascript'>  alert('Gagal, Data gagal disimpan! Pastikan pembayaran benar');</script>";
                      }
                    }
                  }



                  if ($kode == null || $kode == "") {

                    $sqle = "SELECT SUM(hargaakhir) as data FROM transaksimasukeceran WHERE nota=" . autoNumber() . "";
                    $hasile = mysqli_query($conn, $sqle);
                    $row = mysqli_fetch_assoc($hasile);
                    $datatotal = $row['data'];
                  } else {

                    $sqle = "SELECT SUM(hargaakhir) as data FROM transaksimasukeceran WHERE nota='$kode'";
                    $hasile = mysqli_query($conn, $sqle);
                    $row = mysqli_fetch_assoc($hasile);
                    $datatotal = $row['data'];
                  }


                  ?>




                  <div id="main">
                    <div class="container-fluid">

                      <form class="form-horizontal" method="post" action="add_<?php echo $halaman; ?>" id="Myform" class="form-user">
                        <div class="box-body">

                          <div class="row">

                            <div class="col-md-6">
                              <div class="box box-success">
                                <div class="box-body">


                                  <div class="form-group col-md-6 col-xs-12">
                                    <label for="kode" class="col-sm-4 control-label">No. Nota:</label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control" id="kode" name="kode" value="<?php echo autoNumber(); ?>" maxlength="50" required>
                                    </div>
                                  </div>
                                  <div class="form-group col-md-6 col-xs-12">
                                    <label for="tglnota" class="col-sm-4 control-label">Tgl Nota:</label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control pull-right" id="datepicker2" name="tglnota" placeholder="Masukan Tanggal Nota" value="<?php echo $tglnota; ?>">
                                    </div>
                                  </div>



                                  <div class="row">
                                    <div class="form-group col-md-12 col-xs-12">
                                      <label for="barang" class="col-sm-2 control-label">Kode:</label>
                                      <div class="col-sm-10">
                                        <select class="form-control select2" style="width: 100%;" name="barang" id="barang">
                                          <option></option>
                                          <?php
                                          $sql = mysqli_query($conn, "select * from barang");
                                          while ($row = mysqli_fetch_assoc($sql)) {
                                            if ($barang == $row['kode'])
                                              echo "<option value='" . $row['kode'] . "' nama='" . $row['nama'] . "' hargajual='" . $row['hargajual'] . "' sisa='" . $row['sisa'] . "' hargabeli='" . $row['hargabeli'] . "' selected='selected'>" . $row['kode'] . " | " . $row['nama'] . "</option>";
                                            else
                                              echo "<option value='" . $row['kode'] . "' nama='" . $row['nama'] . "' hargajual='" . $row['hargajual'] . "'  sisa='" . $row['sisa'] . "' hargabeli='" . $row['hargabeli'] . "' >" . $row['kode'] . " | " . $row['nama'] . "</option>";
                                          }
                                          ?>
                                        </select>
                                      </div>
                                    </div>


                                  </div>


                                </div>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="box box-danger">
                                <div class="box-body">

                                  <div class="row">
                                    <div class="form-group col-md-12 col-xs-12">
                                      <div class="col-sm-10">

                                        <?php if ($datatotal == "" || $datatotal == null) { ?>
                                          <h1 align="center">Rp <?php echo '0' . ',-'; ?></h1>
                                        <?php } else { ?>
                                          <h1 align="center">Rp <?php echo number_format($datatotal, $decimal, $a_decimal, $thousand) . ',-'; ?></h1>
                                        <?php } ?>
                                      </div>
                                    </div>
                                  </div>


                                </div>
                              </div>
                            </div>


                            <input type="hidden" class="form-control" id="insert" name="insert" value="<?php echo $insert; ?>" maxlength="1">


                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="box box-default">
                                <div class="box-body">

                                  <div class="row">

                                    <div class="col-sm-4">
                                      <label for="usr">Nama Barang</label>
                                      <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" readonly>
                                    </div>

                                    <div class="col-sm-2">
                                      <label for="usr">Stok</label>
                                      <input type="text" class="form-control" id="stok" name="stok" value="<?php echo $stok; ?>" readonly>
                                    </div>


                                    <script>
                                      function sum() {
                                        var txtFirstNumberValue = document.getElementById('jumlah').value
                                        var txtSecondNumberValue = document.getElementById('hargajual').value;
                                        var result = parseFloat(txtFirstNumberValue) * parseFloat(txtSecondNumberValue);
                                        if (!isNaN(result)) {
                                          document.getElementById('hargaakhir').value = result;
                                        }
                                        if (!$(jumlah).val()) {
                                          document.getElementById('hargaakhir').value = "0";
                                        }
                                        if (!$(hargajual).val()) {
                                          document.getElementById('hargaakhir').value = "0";
                                        }
                                      }
                                    </script>

                                    <div class="col-sm-2">
                                      <label for="usr">Harga Satuan</label>
                                      <input type="text" class="form-control" id="hargajual" name="hargajual" value="<?php echo $hargajual; ?>" readonly>
                                      <input type="hidden" id="hargabeli" name="hargabeli" value="<?php echo $hargabeli; ?>" readonly>
                                    </div>


                                    <div class="col-sm-2">
                                      <label for="usr">Jumlah Jual</label>
                                      <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?php echo $jumlah; ?>" placeholder="Masukan Jumlah" onkeyup="sum();">
                                    </div>

                                    <div class="col-sm-2">
                                      <label for="usr">Harga Akhir</label>
                                      <input type="text" class="form-control" id="hargaakhir" name="hargaakhir" value="<?php echo $hargaakhir; ?>" readonly>
                                    </div>

                                  </div>
                                  </br>
                                  <button type="submit" class="btn btn-block pull-left btn-flat btn-success" name="tambah" onclick="SubmitForm()"><span class="glyphicon glyphicon-shopping-cart"></span> Tambah</button>



                                </div>
                              </div>
                            </div>
                          </div>



                          <div class="row">
                            <div class="col-md-12">
                              <div class="box box-info">
                                <div class="box-header with-border">
                                  <b>Daftar Barang</b>
                                </div>

                                <?php
                                error_reporting(E_ALL ^ E_DEPRECATED);

                                $sql    = "select * from transaksimasukeceran where nota =" . autoNumber() . " order by no";
                                $result = mysqli_query($conn, $sql);
                                $rpp    = 15;
                                $reload = "$halaman" . "?pagination=true";
                                $page   = intval(isset($_GET["page"]) ? $_GET["page"] : 0);



                                if ($page <= 0)
                                  $page = 1;
                                $tcount  = mysqli_num_rows($result);
                                $tpages  = ($tcount) ? ceil($tcount / $rpp) : 1;
                                $count   = 0;
                                $i       = ($page - 1) * $rpp;
                                $no_urut = ($page - 1) * $rpp;
                                ?>
                                <div class="box-body table-responsive">
                                  <table class="data table table-hover table-bordered">
                                    <thead>
                                      <tr>
                                        <th>No</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Harga Satuan</th>
                                        <th>Jumlah</th>
                                        <th>Harga Akhir</th>
                                        <?php if ($chmod >= 3 || $_SESSION['jabatan'] == 'admin') { ?>
                                          <th>Opsi</th>
                                        <?php } else {
                                        } ?>
                                      </tr>
                                    </thead>
                                    <?php
                                    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                                    while (($count < $rpp) && ($i < $tcount)) {
                                      mysqli_data_seek($result, $i);
                                      $fill = mysqli_fetch_array($result);

                                      $jumlah_harga += mysqli_real_escape_string($conn, number_format($fill['jumlah'] * $fill['harga'], $decimal, $a_decimal, $thousand) . ',-');
                                    ?>
                                      <tbody>
                                        <tr>
                                          <td><?php echo ++$no_urut; ?></td>
                                          <td><?php echo mysqli_real_escape_string($conn, $fill['kode']); ?></td>
                                          <td><?php echo mysqli_real_escape_string($conn, $fill['nama']); ?></td>
                                          <td><?php echo mysqli_real_escape_string($conn, number_format($fill['harga'], $decimal, $a_decimal, $thousand) . ',-'); ?></td>
                                          <td><?php echo mysqli_real_escape_string($conn, $fill['jumlah']); ?></td>
                                          <td><?php echo mysqli_real_escape_string($conn, number_format(($fill['jumlah'] * $fill['harga']), $decimal, $a_decimal, $thousand) . ',-'); ?></td>
                                          <td>
                                            <?php if ($chmod >= 4 || $_SESSION['jabatan'] == 'admin') { ?>
                                              <button type="button" class="btn btn-danger btn-xs" onclick="window.location.href='component/delete/delete_produk?get=<?php echo '1' . '&'; ?>barang=<?php echo $fill['kode'] . '&'; ?>jumlah=<?php echo $fill['jumlah'] . '&'; ?>kode=<?php echo $kode . '&'; ?>no=<?php echo $fill['no'] . '&'; ?>forward=<?php echo $forward . '&'; ?>forwardpage=<?php echo "add_" . $forwardpage . '&'; ?>chmod=<?php echo $chmod; ?>'">Hapus</button>
                                            <?php } else {
                                            } ?>
                                          </td>
                                        </tr>


                                      <?php
                                      $i++;
                                      $count++;
                                    }

                                      ?>
                                      <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><?php echo number_format($datatotal, $decimal, $a_decimal, $thousand) . ',-'; ?></td>
                                        <td><b>Jumlah</b></td>
                                      </tr>
                                      </tbody>
                                  </table>
                                  <div align="right"><?php if ($tcount >= $rpp) {
                                                        echo paginate_one($reload, $page, $tpages);
                                                      } else {
                                                      } ?></div>


                                </div>

                              </div>


                            </div>
                          </div>
                        </div>



                        <div class="row">
                          <div class="col-md-12">
                            <div class="box box-solid">
                              <div class="box-header with-border">

                                <script>
                                  function sum2() {
                                    var txtFirstNumberValue = document.getElementById('bayar').value
                                    var txtSecondNumberValue = document.getElementById('total').value;
                                    var result = parseFloat(txtSecondNumberValue) - parseFloat(txtFirstNumberValue);
                                    if (!isNaN(result)) {
                                      document.getElementById('kembalian').value = result;
                                    }
                                    if (!$(bayar).val()) {
                                      document.getElementById('kembalian').value = "0";
                                    }
                                    if (!$(total).val()) {
                                      document.getElementById('kembalian').value = "0";
                                    }
                                  }
                                </script>


                                <div class="row">


                                  <div class="form-group col-md-6 col-xs-12">
                                    <label for="bayar" class="col-sm-2 control-label">DP:</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="bayar" name="bayar" value="<?php echo $bayar; ?>" maxlength="50" placeholder="Masukan Jumlah DP" onkeyup="sum2();">
                                      *Jika Tidak Ada DP Isi Dengan Angka 0
                                    </div>
                                  </div>

                                  <input type="hidden" class="form-control" id="total" name="total" value="<?php echo $datatotal; ?>" maxlength="50">

                                  <div class="form-group col-md-6 col-xs-12">
                                    <label for="kembalian" class="col-sm-2 control-label">Sisa:</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="kembalian" name="kembalian" value="<?php echo $kembalian; ?>" maxlength="50" readonly>
                                    </div>
                                  </div>
                                </div>

                                <div class="row">

                                  <!-- customer start -->
                                  <div class="form-group col-md-6 col-xs-6">
                                    <label for="kodecust" class="col-sm-2 control-label">Customer:</label>
                                    <div class="col-sm-10">
                                      <select class="form-control select2" style="width: 100%;" name="kodecust" id="kodecust" required>
                                        <option>Pilih Customer</option>
                                        <?php
                                        $sql = mysqli_query($conn, "select * from customer");
                                        while ($row = mysqli_fetch_assoc($sql)) {
                                          if ($kodecust == $row['kode'])
                                            echo "<option value='" . $row['kode'] . "' selected='selected'>" . $row['kode'] . " | " . $row['nama'] . "</option>";
                                          else
                                            echo "<option value='" . $row['kode'] . "'>" . $row['kode'] . " | " . $row['nama'] . "</option>";
                                        }
                                        ?>
                                      </select>
                                    </div>
                                  </div>
                                  <!-- customer end -->
                                  </script>
                                  <div class="form-group col-md-6 col-xs-6">
                                    <label for="jenisbyr" class="col-sm-2 control-label">Jenis Bayar:</label>
                                    <div class="col-sm-10">
                                      <select class="form-control select2" style="width: 100%;" name="jenisbyr" id="jenisbyr" required>
                                        <option value="Cash">Cash</option>
                                        <option value="Transfer">Transfer</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="form-group col-md-6 col-xs-12">
                                    <label for="noRek" class="col-sm-2 control-label" hidden id="labelNoRek" name="labelNoRek">No. Rekening:</label>
                                    <div class="col-sm-10">
                                      <input type="text" id="noRek" name="noRek" maxlength="50" placeholder="Masukan No. Rekening" hidden value="" />
                                    </div>
                                  </div>
                                  <div class="form-group col-md-6 col-xs-12">
                                    <label for="namaRek" class="col-sm-2 control-label" hidden id="labelNamaRek" name="labelNamaRek">Nama Rekening:</label>
                                    <div class="col-sm-10">
                                      <input type="text" id="namaRek" name="namaRek" maxlength="50" placeholder="Masukan Nama Rekening" value="" hidden />
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- /.box-body -->
                        <div class="box-footer">
                          <div class="col-sm-6">
                            <button type="submit" class="btn btn-block pull-left btn-flat btn-danger" name="simpan" onclick="document.getElementById('Myform').submit();"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
                          </div>
                        </div>
                        <!-- /.box-footer -->


                      </form>
                    </div>
                    <script>
                      function myFunction() {
                        document.getElementById("Myform").submit();
                      }
                    </script>

                    <!-- KONTEN BODY AKHIR -->

                  </div>
                </div>

                <!-- /.box-body -->
              </div>
            </div>

          <?php
          } else {
          ?>
            <div class="callout callout-danger">
              <h4>Info</h4>
              <b>Hanya user tertentu yang dapat mengakses halaman <?php echo $dataapa; ?> ini .</b>
            </div>
          <?php
          }
          ?>
          <!-- ./col -->
        </div>

        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <!-- /.Left col -->
        </div>
        <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php footer(); ?>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script src="dist/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script>
  $("#barang").on("change", function() {

    var nama = $("#barang option:selected").attr("nama");
    var hargajual = $("#barang option:selected").attr("hargajual");
    var sisa = $("#barang option:selected").attr("sisa");
    var hargabeli = $("#barang option:selected").attr("hargabeli");

    $("#nama").val(nama);
    $("#hargajual").val(hargajual);
    $("#stok").val(sisa);
    $("#hargabeli").val(hargabeli);
    $("#hargaakhir").val(0);
    $("#jumlah").val(0);
  });
</script>

<script type='text/javascript'>
  $(window).load(function() {
    $("#jenisbyr").change(function() {
      console.log($("#jenisbyr option:selected").val());
      if ($("#jenisbyr option:selected").val() == 'Cash') {
        $('#labelNoRek').prop('hidden', true);
        $('#noRek').prop('hidden', true);
        var element = document.getElementById('noRek');
        element.classList.remove('form-control');
        $('#labelNamaRek').prop('hidden', true);
        $('#namaRek').prop('hidden', true);
        var element1 = document.getElementById('namaRek');
        element1.classList.remove('form-control');
      } else {
        $('#labelNoRek').prop('hidden', false);
        $('#noRek').prop('hidden', false);
        var element = document.getElementById('noRek');
        element.classList.add('form-control');
        $('#labelNamaRek').prop('hidden', false);
        $('#namaRek').prop('hidden', false);
        var element1 = document.getElementById('namaRek');
        element1.classList.add('form-control');
      }
    });
  });
</script>

<script src="dist/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="dist/plugins/morris/morris.min.js"></script>
<script src="dist/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="dist/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="dist/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="dist/plugins/knob/jquery.knob.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="dist/plugins/daterangepicker/daterangepicker.js"></script>
<script src="dist/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="dist/plugins/fastclick/fastclick.js"></script>
<script src="dist/js/app.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="dist/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="dist/plugins/fastclick/fastclick.js"></script>
<script src="dist/plugins/select2/select2.full.min.js"></script>
<script src="dist/plugins/input-mask/jquery.inputmask.js"></script>
<script src="dist/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="dist/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="dist/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="dist/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function() {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("yyyy-mm-dd", {
      "placeholder": "yyyy/mm/dd"
    });
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("yyyy-mm-dd", {
      "placeholder": "yyyy/mm/dd"
    });
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      format: 'YYYY/MM/DD h:mm A'
    });
    //Date range as a button
    $('#daterange-btn').daterangepicker({
        ranges: {
          'Hari Ini': [moment(), moment()],
          'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Akhir 7 Hari': [moment().subtract(6, 'days'), moment()],
          'Akhir 30 Hari': [moment().subtract(29, 'days'), moment()],
          'Bulan Ini': [moment().startOf('month'), moment().endOf('month')],
          'Akhir Bulan': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate: moment()
      },
      function(start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    $('.datepicker').datepicker({
      dateFormat: 'yyyy-mm-dd'
    });

    //Date picker 2
    $('#datepicker2').datepicker('update', new Date());

    $('#datepicker2').datepicker({
      autoclose: true
    });

    $('.datepicker2').datepicker({
      dateFormat: 'yyyy-mm-dd'
    });


    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>

</html>