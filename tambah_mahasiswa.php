<!DOCTYPE html>
<html>
  <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <title></title>
  </head>
  <body>
    <h3>Tambah Data Mahasiswa</h3>
    <form action="proses_tambah_mahasiswa.php" method="post"
    Nama :
    <input type="text" name="nama" value="" class="form-control">
    Tanggal Lahir
    <input type="date" name="tanggal_lahir" value="" class="form-control">
    Jenis Kelamin :
    <select name="Jenis_kelamin" class="form-control">
      <option></option>
      <option value="L">laki-laki</option>
      <option value="P">perempuan</option>
    </select>
    Alamat :
    <textarea name="alamat" class="form-control" rows="4"></textarea>
    
    Username :
    <input type="text" name="username" value="" class="form-control">
    password :
    <input type="text" name="password" value="" class="form-control">
    Jurusan :
    <select name="id_jurusan" class="form-control">
      <option></option>
      <?php
      include "koneksi.php";
      $qry_jurusan=mysqli_query($conn,"select * from Jurusan");
      while($data_jurusan=mysqli_fetch_array($qry_jurusan)){
        echo '<option value="'.$data_jurusan[id_jurusan].'">'.$data_jurusan['nama_jurusan'].'</option>';
      }
      ?>
    </select>
    <input type="submit" name="simpan" value="Tambah Data" class="btn btn-primary">
    </form>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>