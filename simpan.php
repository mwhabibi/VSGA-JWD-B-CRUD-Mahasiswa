<?php
include("koneksi.php");
if (empty($_POST['id'])) {
    $sql = "INSERT INTO ms_mahasiswa (nim, namaMahasiswa, jenisKelamin, agama, alamat, prodi) VALUE ('" . $_POST['nim'] . "','" . $_POST['namaMahasiswa'] . "', '" . $_POST['jenisKelamin'] . "', '" . $_POST['agama'] . "', '" . $_POST['alamat'] . "', '" . $_POST['prodi'] . "')";
} else {
    $sql = "UPDATE ms_mahasiswa SET nim='" . $_POST['nim'] . "', namaMahasiswa='" . $_POST['namaMahasiswa'] . "', jenisKelamin='" . $_POST['jenisKelamin'] . "', agama='" . $_POST['agama'] . "', alamat='" . $_POST['alamat'] . "', prodi='" . $_POST['prodi'] . "' WHERE idMahasiswa='" . $_POST['id'] . "'";
}
$query = mysqli_query($db, $sql);
header('location:index.php');
