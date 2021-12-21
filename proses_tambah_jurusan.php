<?php
if($_POST){
  $nama_jurusan=$_POST['nama_jurusan'];
  $angkatan=$_POST['$angkatan'];
  if(empty($nama_jurusan)){
    echo "<script>alert"('nama.jurusan tidak boleh kosong');location.href='tambah_kelas.php';</script>;
  }elseif(empaty('$angkatan')){
    echo "<script>alert('Angkatan tidak boleh kosong');location.href='tambah_kelas.php';</script>";
  }else{
    include "koneksi.php";
    $insert=mysqli_query($conn,'insert into jurusan (nama_jurusan , angkatan) value ('"$.nama_jurusan"'."angkatan."')");
    if($insert){
      echo "<script>alert('sukses menambah data jurusan');location.href='tambah_kelas.php';</script>;
    }else{
      echo "<script>alert('gagal menambah data jurusan');location.href='tambah_kelas.php';</script>";
    }
  }
  }
}
?>