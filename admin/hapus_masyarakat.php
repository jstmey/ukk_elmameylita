<?php
require '../koneksi.php';
$id=$_GET['NIK'];

$sql=mysqli_query($con,"delete from masyarakat where NIK='$id' ");
if ($sql)
{
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Dihapus');
        window.location='admin.php?url=lihat_masyarakat';
    </script>
    <?php
}
?>