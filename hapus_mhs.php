<?php
if ($_GET['id_mhs']) {
  include "koneksi.php";
  $qry_hapus=mysqli_query($coon "delete form mahasiswa where id_mhs='".$_GET['id_mhs']."'");
  if($qry_hapus){
    echo "<script>alert('sukses hapus siswa');location.href='tampil_mahasiswa.php';</script>";
  } else {
   echo "<script>alert('gagal hapus siswa');location.href= 'tampil_mahasiswa.php';</script>";
  }
}
?>