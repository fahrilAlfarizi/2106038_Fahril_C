<!DOCTYPE html>
<html>
<head>
  <title>Formulir Pendaftaran Anggota Baru</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Formulir Pendaftaran Anggota Baru</h2>

<form action="proses_input.php" method="POST">
  <label for="nama">Nama Lengkap:</label><br>
  <input type="text" id="nama" name="nama" required><br>
  
  <label for="nim">NIM:</label><br>
  <input type="number" id="nim" name="nim" required><br>

  <label for="no_tlp">Telepon:</label><br>
  <input type="number" id="no_tlp" name="no_tlp" required><br>

  <label for="jenis_kelamin">Jenis Kelamin:</label><br>
  <select name="jenis_kelamin">
    <option value="Laki-laki">Laki-laki</option>
    <option Value="Perempuan">Perempuan</option>
  </select><br>

  <label for="alamat">Alamat:</label><br>
  <input type="text" name="alamat" id="alamat"><br>

  <label for="prodi">Program Studi:</label><br>
  <select name="prodi">
    <option>Teknik Informatika</option>
    <option>Sistem Informasi</option>
    <option>Teknik Sipil</option>
    <option>Teknik Industri</option>
    <option>Arsitektur</option>
  </select><br>
  
  <label for="tahunmasuk">Tahun Masuk:</label><br>
  <input type="date" id="tahunmasuk" name="tahunmasuk" required><br>

      <button type="submit" id="btn-kirim">kirim</button>
</form> 
</body>
</html> 