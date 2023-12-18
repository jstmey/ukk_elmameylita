<?php
if(isset($_GET['url']))
{
    $url=$_GET['url'];

    switch($url)
    {
        case 'verifikasi_pengaduan';
        include 'verifikasi_pengaduan.php';
        break;

        case 'detail_pengaduan';
        include 'detail_pengaduan.php';
        
    }
}
else
{
    ?>
    Selamat Datang di Aplikasi Pengaduan Masyarakat yang dibuat untuk melporkan pelanggaran atau penyimpanan kejadian-kejadian yang ada pada masyarakat <br><br>
    Anda Login Sebagai : <h2><b> <?php echo $_SESSION['nama']; ?>

    <?php
    require '../koneksi.php';
    $sql = mysqli_query($con, "select * from pengaduan where status='0'");
    if ($cek=mysqli_num_rows($sql))
    ?>
    <br>
    <br>
            <div class="col-xl-5 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Laporan Pengaduan : </div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800">ada <?php echo $cek ?> Laporan dari masyarakat</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                      <span class="badge-primary badge-counter" style="border-radius: 5px; padding:0px 2px"><?php echo $cek ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php
}
?>