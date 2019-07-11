<?php
//cek button
include "koneksi.php";

    if ($_POST['Submit'] == "Submit") {
    $univ = $_POST['univ'];
    $nama    = $_POST['nama'];
    $nim            = $_POST['nim'];
    $jenis_kelamin        = $_POST['jenis_kelamin'];
    $fakultas            = $_POST['fakultas'];
    //validasi data data kosong
    if (empty($_POST['nim'])||empty($_POST['nama'])||empty($_POST['jenis_kelamin'])||empty($_POST['fakultas'])) {
        ?>
            <script language="JavaScript">
                alert('Data Harap Dilengkapi!');
                document.location='index.php';
            </script>
        <?php
    }
    else {
    //cek NIM di database
        if($univ=="UGM"){
           $cek=mysqli_num_rows (mysqli_query($koneksi, "SELECT nim FROM mahasiswa WHERE nim='$_POST[nim]'"));
            if ($cek > 0) {
            ?>
                <script language="JavaScript">
                alert('NIM sudah dipakai!, silahkan ganti NIM yang lain');
                document.location='index.php';
                </script>
            <?php
            }
            //Masukan data ke Table
            $input    ="INSERT INTO mahasiswa (nim,nama,jenis_kelamin,fakultas) VALUES ('$nim','$nama','$jenis_kelamin','$fakultas')";
            $query_input =mysqli_query($koneksi, $input);
            if ($query_input) {
            //Jika Sukses
            ?>
                <script language="JavaScript">
                alert('Input Data Mahasiswa Berhasil');
                document.location='index.php';
                </script>
            <?php
            }
            else {
            //Jika Gagal
            echo "Input Data Mahasiswa Gagal!, Silahkan diulangi!";
            }  
        }
        else if($univ=="ITB"){
             $cek=mysqli_num_rows (mysqli_query($koneksi, "SELECT nim FROM mahasiswa_itb WHERE nim='$_POST[nim]'"));
            if ($cek > 0) {
            ?>
                <script language="JavaScript">
                alert('NIM sudah dipakai!, silahkan ganti NIM yang lain');
                document.location='index.php';
                </script>
            <?php
            }
            //Masukan data ke Table
            $input    ="INSERT INTO mahasiswa_itb (nim,nama,jenis_kelamin,fakultas) VALUES ('$nim','$nama','$jenis_kelamin','$fakultas')";
            $query_input =mysqli_query($koneksi, $input);
            if ($query_input) {
            //Jika Sukses
            ?>
                <script language="JavaScript">
                alert('Input Data Mahasiswa Berhasil');
                document.location='index.php';
                </script>
            <?php
            }
            else {
            //Jika Gagal
            echo "Input Data Mahasiswa Gagal!, Silahkan diulangi!";
            }
        }
        else if($univ=="UNPAD"){
             $cek=mysqli_num_rows (mysqli_query($koneksi, "SELECT nim FROM mahasiswa_unpad WHERE nim='$_POST[nim]'"));
            if ($cek > 0) {
            ?>
                <script language="JavaScript">
                alert('NIM sudah dipakai!, silahkan ganti NIM yang lain');
                document.location='index.php';
                </script>
            <?php
            }
            //Masukan data ke Table
            $input    ="INSERT INTO mahasiswa_unpad (nim,nama,jenis_kelamin,fakultas) VALUES ('$nim','$nama','$jenis_kelamin','$fakultas')";
            $query_input =mysqli_query($koneksi, $input);
            if ($query_input) {
            //Jika Sukses
            ?>
                <script language="JavaScript">
                alert('Input Data Mahasiswa Berhasil');
                document.location='index.php';
                </script>
            <?php
            }
            else {
            //Jika Gagal
            echo "Input Data Mahasiswa Gagal!, Silahkan diulangi!";
            }
        }
   
//Tutup koneksi engine MySQL
    // mysqli_close($Open);
    }
}
?>