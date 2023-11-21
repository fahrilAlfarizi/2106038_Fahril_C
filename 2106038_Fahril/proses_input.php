<?php
// Mengimpor file koneksi.php untuk mendapatkan koneksi ke database
include './connect.php';

// Mengambil data 'nama' dan 'email' dari formulir HTML dengan metode POST
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$tlp = $_POST['no_tlp'];
$jk = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$prodi = $_POST['prodi'];
$tahunmasuk = $_POST['tahun_masuk'];


$query = "INSERT INTO anggota VALUES (NULL, '$nama', '$nim','$tlp','$jk','$alamat','$prodi','$tahunmasuk')";

// Menjalankan query SQL di atas menggunakan objek koneksi database ($db)
mysqli_query($db, $query);

// Menampilkan pesan peringatan kepada pengguna setelah data berhasil dimasukkan
echo "<script>alert('DATA DITAMBAHKAN')</script>";

// Mengarahkan pengguna kembali ke halaman 'main.php' setelah operasi berhasil dilakukan
echo "<script>window.location='./index.php'</script>";
?>