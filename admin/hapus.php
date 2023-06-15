<?php
     require "../config.php";

     $id = $_GET['id'];

     function hapus($id){
          global $conn;
          
          mysqli_query($conn,"DELETE FROM history WHERE id_anggota = '$id'");
          mysqli_query($conn,"DELETE FROM donatur WHERE id_anggota = '$id'");
          return mysqli_affected_rows($conn);
     }
     // pengecekan jika terjadi penghapusan data doantur
     if (hapus($id) > 0) {
          echo "<script>alert('Data berhasil di hapus !');
                    document.location.href='DaftarAnggota.php'</script>";
          }
     else{
          echo "<script>alert('Data gagal di hapus !');
          document.location.href='DaftarAnggota.php'</script>";
     }

?>
