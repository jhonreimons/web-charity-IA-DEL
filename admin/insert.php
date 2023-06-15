<?php
require "../config.php";
function insert($data){
     global $conn;
          $nama = $data['nama'];
          $tahun = $data['tahun'];
          $username1 = $data['username'];
          $password1 = $data['password'];
          $id = $data['id'];
          $status = $data['status'];
          if ($_FILES['foto']['error'] === 4) {
               $foto = NULL;
          }
          else{
               $foto = upload();
          } 
          $sql = "INSERT INTO donatur (id_anggota,nama,tahun_aktif,username,password,status_aktif,foto)
          VALUES ('$id','$nama','$tahun','$username1','$password1','$status','$foto')";
          mysqli_query($conn,$sql);
          
          $rows = mysqli_affected_rows($conn);
          return $rows;
}

function upload()
          {
               $ekstesni_true = ['jpg','jpeg','png'];
               $nama = $_FILES['foto']['name'];
               $size = $_FILES['foto']['size'];
               $temp = $_FILES['foto']['tmp_name'];
               $ekstensi = explode(".",$nama);
               $ekstensi =   strtolower(end($ekstensi));
               if (!in_array($ekstensi,$ekstesni_true)) {
                    echo "<script>
                              alert('Format file yang anda masukkan tidak sesuai !');
                         </script>";
                         if($size > 1000000){
                              echo "<script>
                              alert('Anda harus memasukkan file lebih kecil dari 1 MB !');
                              </script>";
                         }
                    
                         
               }
                    $NamaBaru = uniqid();
                    $NamaBaru .= '.';
                    $NamaBaru .= $ekstensi;
                    move_uploaded_file($temp,"../users/gambar/".$NamaBaru);
               return $NamaBaru;
     }
