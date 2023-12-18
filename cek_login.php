<?php
require 'koneksi.php';
$user=$_POST['username'];
$pass=$_POST['password'];
$sql=mysqli_query( $con,"select * from masyarakat where username='$user' and password='$pass'");
$cek=mysqli_num_rows($sql);

    if($cek>0)
    {
        $data=mysqli_fetch_array($sql);
        session_start();
        $_SESSION['nama']=$user;
        $_SESSION['NIK']=$data['NIK'];
        header('location:masyarakat.php');
    }
    else
    {
        ?>
    <script type="text/javascript">
        alert ('Username atau Password tidak ditemukan');
        window.location="index.php";
    </script>
<?php
    }
    ?>