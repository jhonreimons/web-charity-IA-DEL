<?php
     include "../config.php";

     function update($data){
          global $conn;
          $nama = $data['nama'];
          $id = $data['id'];
          $username1 = $data['username'];
          $password1 = $data['password'];
          $email = $data['email'];
          $alamat = $data['alamat'];
          $akt = $data['akt'];
          $gender = $data['gender'];
          $telepon = $data['telepon'];
          $tahun_angkatan = $data['tahunAngkatan'];
          $FotoLama = $data['FotoLama'];
          if ($_FILES['foto']['error'] === 4) {
               $foto = $FotoLama;
          }
          else{
               $foto = upload();
          }
          $sql = "UPDATE donatur SET nama = '$nama',
                                        username = '$username1',
                                        angkatan_tahun_ke = '$tahun_angkatan',
                                        password = '$password1',
                                        email = '$email',
                                        no_akt_lahir = '$akt',
                                        jenis_kelamin = '$gender',
                                        no_telepon = '$telepon',
                                        foto = '$foto',
                                        alamat = '$alamat'
                                        WHERE id_anggota  = '$id'";
                         mysqli_query($conn,$sql);

                              return mysqli_affected_rows($conn);
               
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

                    move_uploaded_file($temp,"gambar/".$NamaBaru);
                    return $NamaBaru;
          }

?>