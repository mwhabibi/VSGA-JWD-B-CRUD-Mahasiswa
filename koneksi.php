<?php
$db = mysqli_connect('localhost', 'root', '', 'mahasiswa_db');

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
