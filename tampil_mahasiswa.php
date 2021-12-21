<!DOCTYPE html>
<html>
  <head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
    <h3>Data Mahasiswa</h3>
    <table class="table table-hover table-striped">
         <thead>
           <tr>
             <th>NOMOR</th>
             <th>NAMA</th>
             <th>TANGGAL LAHIR</th>
             <th>JENIS KELAMIN</th>
             <th>ALAMAT</th>
             <th>USERNAME</th>
             <th>JURUSAN</th>
             <th>AKSI</th>
           </tr>
         </thead>
         <tbody>
           <?php
           include "kobeksi.php";
           $qry_mahasiswa=mysqli_query($conn, "select" * form mahasiswa join jurusan on jurusan.id_jurusan=mahasiswa.id_jurusan");
           $no=0;
           while($data_mahasiswa=mysqli_fetch_array($qry_mahasiswa)){
             $no++;?>
                 <tr>
                   <td><?=$no?></td><td><?=$data_mahasiswa['nama']?></td><td><?=$data_mahasiswa['tanggal_lahir']?></td><td><?=$data_mahasiswa['jenis_kelamin']?></td><td><?=$data_mahasiswa['alamat']?></td><td><?=$data_mahasiswa['username']?></td><td><?=$data_mahasiswa['nama_jurusan']?></td><td><a href="ubah_mahasiswa.php?id_mhs=<?=$data_mahasiswa['id_mhs']?> class"btn btn-succes">ubah</a>|<a hrefh hapus.php?id_siswa=<?=$data_siswa['id']?>"onclick="return comfirm('apakah anda yakin menghapus data ini?')"class="btn btn-danger">Hapus</a></td>
                </tr>
            <?php
           }
           ?>
         </tbody>
      </table>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>