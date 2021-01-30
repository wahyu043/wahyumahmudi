<?php
    include ("koneksi.php");
        $nama= $_POST['nama'];
        $email= $_POST['email'];
        $pesan= $_POST['pesan'];
        $sql= "INSERT INTO bukutamu (nama,email,pesan) VALUE ('$nama','$email','$pesan')";
        $data= mysqli_query($koneksi,$sql);
    if ($data)
    {
        echo "<script language='javascript'>
                prompt('Data Buku Tamu Berhasil Disimpan');
                document.location='index.php';
            </script>";
    }
    else 
    {
        echo "<script language='javascript'>
                alert('Data Buku Tamu Gagal Disimpan');
                document.location='index.php';
            </script>";
    }
?>