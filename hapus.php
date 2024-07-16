<?php
include("koneksi.php");
$sql = "DELETE FROM ms_mahasiswa WHERE idMahasiswa='" . $_POST['id'] . "'";

$query = mysqli_query($db, $sql);
header('location:index.php');
