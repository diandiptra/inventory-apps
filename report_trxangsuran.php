<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php
include "configuration/config_etc.php";
include "configuration/config_include.php";
include "configuration/config_alltotal.php";
etc();encryption();session();connect();head();body();timing();
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
                <section class="content">
                  <div class="row">
                    <div class="col-lg-3 col-xs-6">
                                       <!-- small box -->
                                       <div class="small-box bg-aqua">
                                           <div class="inner">
                                               <h3><?php echo $data1; ?><sup style="font-size: 20px">Trx</sup></h3>
                                               <p>Total Trx Batal</p>
                                           </div>
                                           <div class="icon">
                                             <i class="ion ion-stats-bars"></i>
                                           </div>

                                       </div>
                                   </div>
                                   <!-- ./col -->
                                   <div class="col-lg-3 col-xs-6">
                                       <!-- small box -->
                                       <div class="small-box bg-yellow">
                                           <div class="inner">
                                               <h3><?php echo $data2; ?><sup style="font-size: 20px">Trx</sup></h3>
                                               <p>Total Trx Berhasil</p>
                                           </div>
                                           <div class="icon">
                                              <i class="ion ion-stats-bars"></i>
                                           </div>

                                       </div>
                                   </div>
                                   <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                                       <!-- small box -->
                                       <div class="small-box bg-green">
                                           <div class="inner">
                                               <h3><?php echo $data3; ?><sup style="font-size: 20px">Trx</sup></h3>
                                               <p>Trx Berhasil Bulan Ini</p>
                                           </div>
                                           <div class="icon">
                                               <i class="ion ion-stats-bars"></i>
                                           </div>

                                       </div>
                                   </div>
                                   <!-- ./col -->
                                   <div class="col-lg-3 col-xs-6">
                                       <!-- small box -->
                                       <div class="small-box bg-red">
                                           <div class="inner">
                                               <h3><?php echo $data4; ?><sup style="font-size: 20px">Trx</sup></h3>
                                               <p>Trx Berhasil Hari Ini</p>
                                           </div>
                                           <div class="icon">
                                               <i class="ion ion-stats-bars"></i>
                                           </div>

                                       </div>
                                   </div>
                  </div>
                    <div class="row">
            <div class="col-lg-12">

              <!-- SETTING START-->

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "configuration/config_chmod.php";
$halaman = "report_trxangsuran"; // halaman
$dataapa = "Laporan Transaksi Penjualan Pelunasan Reseller"; // data
$tabeldatabase = "bayar"; // tabel database
$chmod = $chmenu9; // Hak akses Menu
$forward = mysqli_real_escape_string($conn, $tabeldatabase); // tabel database
$forwardpage = mysqli_real_escape_string($conn, $halaman); // halaman
$search = $_POST['search'];

?>

<!-- SETTING STOP -->

<textarea id="printing-css" style="display:none;">.no-print{display:none}</textarea>
<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
<script type="text/javascript">
function printDiv(elementId) {
 var a = document.getElementById('printing-css').value;
 var b = document.getElementById(elementId).innerHTML;
 window.frames["print_frame"].document.title = document.title;
 window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
 window.frames["print_frame"].window.focus();
 window.frames["print_frame"].window.print();
}
</script>

<!-- BREADCRUMB -->


<!-- BOX HAPUS BERHASIL -->

         <script>
 window.setTimeout(function() {
    $("#myAlert").fadeTo(500, 0).slideUp(1000, function(){
        $(this).remove();
    });
}, 5000);
</script>


       <!-- BOX INFORMASI -->
    <?php
if ($chmod == '1' || $chmod == '2' || $chmod == '3' || $chmod == '4' || $chmod == '5' || $_SESSION['jabatan'] == 'admin') {
} else {
?>
   <div class="callout callout-danger">
    <h4>Info</h4>
    <b>Hanya user tertentu yang dapat mengakses halaman <?php echo $dataapa;?> ini .</b>
    </div>
    <?php
}
?>

<?php
if ($chmod >= 1 || $_SESSION['jabatan'] == 'admin') {
?>

<?php
if($search == null || $search == "" ){
        $sqla="SELECT no, COUNT( * ) AS totaldata FROM $forward";
      }else{
        $sqla="SELECT no, COUNT( * ) AS totaldata FROM $forward where nota like '%$search%' or tglbayar like '%$search%' or kasir like '%$search%'";
      }
    $hasila=mysqli_query($conn,$sqla);
    $rowa=mysqli_fetch_assoc($hasila);
    $totaldata=$rowa['totaldata'];

?>


          <div class="box" id="tabel1">

            <div class="box-header">
            <h3 class="box-title">Data <?php echo $dataapa ?>  <span class="no-print label label-default" id="no-print"><?php echo $totaldata; ?></span>
          </h3>

        <form method="post">
        <br/>
                <div class="input-group input-group-sm no-print" style="width: 250px;" id="no-print">
                  <input type="text" name="search" class="form-control pull-right" placeholder="Cari">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>

          </form>


            </div>

                                <!-- /.box-header -->
                                  <!-- /.Paginasi -->
                                 <?php
    error_reporting(E_ALL ^ E_DEPRECATED);
    $sql    = "select * from $forward where kembali > 0 order by no desc";
    $result = mysqli_query($conn, $sql);
    $rpp    = 15;
    $reload = "$halaman"."?pagination=true";
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
                                    <table class="table table-hover ">
                                        <thead>
                                            <tr>
                                              <th>No</th>
                                              <th>No Nota</th>
                                              <th>Tanggal</th>
                                              <th>Jumlah Item</th>
                                              <th>Total Pembayaran</th>
                                              <th>Nama Barang</th>
                                              <th>DP/Jumlah Bayar</th>
                                              <th>Sisa Bayar</th>
                                              <th>Cc</th>
                                              <th>Reseller</th>
                        <?php if ($chmod >= 3 || $_SESSION['jabatan'] == 'admin' || $_SESSION['jabatan'] != 'admin') { ?>
                                                <th class="no-print">Opsi</th>
                                                <th>Cetak Struk</th>
                        <?php }else{} ?>
                                            </tr>
                                        </thead>
                                          <?php
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    $search = $_POST['search'];

    if ($search != null || $search != "") {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

              if(isset($_POST['search'])){
        $query1="SELECT * FROM  bayar, customer where bayar.nota like '%$search%' or bayar.tglbayar like '%$search%' or bayar.kasir like '%$search%' or customer.nama like '%$search%' order by bayar.no limit $rpp";
        $hasil = mysqli_query($conn,$query1);
        $no = 1;
        while ($fill = mysqli_fetch_assoc($hasil)){
          ?>
                     <tbody>
<tr>
  <td><?php echo ++$no_urut;?></td>
  <td><?php  echo mysqli_real_escape_string($conn, $fill['nota']); ?></td>
  <td><?php  echo mysqli_real_escape_string($conn, $fill['tglbayar']); ?></td>
  <?php
$nota = $fill['nota'];
$sqle="SELECT COUNT( nota ) AS data, kode AS kode FROM transaksimasuk WHERE nota ='$nota'";
$hasile=mysqli_query($conn,$sqle);
$rowa=mysqli_fetch_assoc($hasile);
$jumlahbayar=$rowa['data'];

$kodecust = $fill['kodecust'];
$sqlz = "SELECT kode, nama FROM customer WHERE kode='$kodecust'";
$hasilz = mysqli_query($conn, $sqlz);
$rowz = mysqli_fetch_assoc($hasilz);
$namaCust = $rowz['nama'];

$kode = mysqli_real_escape_string($conn, $rowa['kode']);
$sqle="SELECT nama as namabrg FROM barang WHERE kode ='$kode'";
$hasile=mysqli_query($conn,$sqle);
$rowa=mysqli_fetch_assoc($hasile);
$namabrg=$rowa['namabrg'];
   ?>
  <td><?php  echo mysqli_real_escape_string($conn, $jumlahbayar); ?></td>
  <td><?php  echo mysqli_real_escape_string($conn, $fill['total']); ?></td>
  <td><?php  echo mysqli_real_escape_string($conn, $namabrg); ?></td>
  <td><?php  echo mysqli_real_escape_string($conn, $fill['bayar']); ?></td>
  <td><?php  echo mysqli_real_escape_string($conn, $fill['kembali']); ?></td>
  <td><?php  echo mysqli_real_escape_string($conn, $fill['kasir']); ?></td>
  <td><?php  echo mysqli_real_escape_string($conn, $namaCust); ?></td>
  <td>
  <?php if ($chmod >= 3 || $_SESSION['jabatan'] == 'admin' || $_SESSION['jabatan'] != 'admin') { ?>
    <button type="button" class="btn btn-info btn-xs no-print" onclick="window.location.href='stok_detail?id=1&trx=1&nota=<?php  echo $fill['nota']; ?>'">Detail</button>
 <?php } else {}?>

    </td></tr><?php
          ;
        }

        ?>
                  </tbody></table>
 <div align="right"><?php if($tcount>=$rpp){ echo paginate_one($reload, $page, $tpages);}else{} ?></div>
     <?php
      }

    }

  } else {
    while(($count<$rpp) && ($i<$tcount)) {
      mysqli_data_seek($result,$i);
      $fill = mysqli_fetch_array($result);
      ?>
                      <tbody>
<tr>
  <td><?php echo ++$no_urut;?></td>
  <td><?php  echo mysqli_real_escape_string($conn, $fill['nota']); ?></td>
  <td><?php  echo mysqli_real_escape_string($conn, $fill['tglbayar']); ?></td>
  <?php
$nota = $fill['nota'];
$sqle="SELECT COUNT( nota ) AS data, kode AS kode FROM transaksimasuk WHERE nota ='$nota'";
$hasile=mysqli_query($conn,$sqle);
$rowa=mysqli_fetch_assoc($hasile);
$jumlahbayar=$rowa['data'];

$kodecust = $fill['kodecust'];
$sqlz = "SELECT kode, nama FROM customer WHERE kode='$kodecust'";
$hasilz = mysqli_query($conn, $sqlz);
$rowz = mysqli_fetch_assoc($hasilz);
$namaCust = $rowz['nama'];   

$kode = mysqli_real_escape_string($conn, $rowa['kode']);
$sqle="SELECT nama as namabrg FROM barang WHERE kode ='$kode'";
$hasile=mysqli_query($conn,$sqle);
$rowa=mysqli_fetch_assoc($hasile);
$namabrg=$rowa['namabrg'];
?>

  <td><?php  echo mysqli_real_escape_string($conn, $jumlahbayar); ?></td>
  <td><?php  echo mysqli_real_escape_string($conn, $fill['total']); ?></td>
  <td><?php  echo mysqli_real_escape_string($conn, $namabrg); ?></td>
  <td><?php  echo mysqli_real_escape_string($conn, $fill['bayar']); ?></td>
  <td><?php  echo mysqli_real_escape_string($conn, $fill['kembali']); ?></td>
  <td><?php  echo mysqli_real_escape_string($conn, $fill['kasir']); ?></td>
  <td><?php  echo mysqli_real_escape_string($conn, $namaCust); ?></td>
  <td>
  <?php if ($chmod >= 3 || $_SESSION['jabatan'] == 'admin' || $_SESSION['jabatan'] != 'admin') { ?>
    <button type="button" class="btn btn-info btn-xs no-print" onclick="window.location.href='stok_detail?id=1&trx=1&nota=<?php  echo $fill['nota']; ?>'">Detail</button>
 <?php } else {}?>

    </td>
    <td>
  <?php if ($chmod >= 3 || $_SESSION['jabatan'] == 'admin' || $_SESSION['jabatan'] != 'admin') { ?>
    <button type="button" class="btn btn-info btn-xs no-print" onclick="window.open('print_one.php?nota=<?php echo $nota; ?>', 'Cetak', ' menubar=0, resizable=0,dependent=0,status=0,width=260,height=400,left=10,top=10', '_blank')">Cetak Struk</button>
 <?php } else {}?>

    </td>
  </tr>
      <?php
      $i++;
      $count++;
    }

    ?>
                  </tbody></table>
          <div align="right"><?php if($tcount>=$rpp){ echo paginate_one($reload, $page, $tpages);}else{} ?></div>
  <?php } ?>

                               </div>
                                <!-- /.box-body -->

                            </div>

              <?php } else {} ?>
                      <div align="right"  style="padding-right:15px"  class="no-print" id="no-print" >
                        <div align="left" class="no-print" id="no-print"> <a onclick="javascript:printDiv('tabel1');" class="btn btn-default btn-flat" name="cetak" value="cetak"><span class="glyphicon glyphicon-print"></span></a><?php echo " "; ?>
                        <a onclick="window.location.href='configuration/config_export?forward=<?php echo $forward; ?>&search=<?php echo $search; ?>'" class="btn btn-default btn-flat" name="cetak" value="export excel"><span class="glyphicon glyphicon-save-file"></span></a></div> <br/>
                      </div>
              
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                    </div>
                    <!-- /.row (main row) -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
           <?php footer();?>
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->
        <script src="dist/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script>
  $.widget.bridge('uibutton', $.ui.button);
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
        <script src="dist/js/pages/dashboard.js"></script>
        <script src="dist/js/demo.js"></script>
    <script src="dist/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="dist/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="dist/plugins/fastclick/fastclick.js"></script>

    </body>
</html>
