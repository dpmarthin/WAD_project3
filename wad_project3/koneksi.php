<?php
//koneksi ke database
$koneksi = mysqli_connect("127.0.0.1", "root", "", "wad_project3");
//ambil data dari tabel database / query data
$result = mysqli_query($koneksi,"SELECT * FROM student");
var_dump($result);
echo "<br/>";
var_dump(mysqli_fetch_object($result));
?>