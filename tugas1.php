<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    //create connection
    $conn = mysqli_connect($servername, $username, $password,"bukutamu"); //membuat variabel yang menampung status hasil koneksi kepada database

    //Check conection
    if(!$conn){ //membuat kondisi jika konek error
        die("Connection failed: " . mysqli_connect_error()); //jika konek ke mysql error maka akan menampilkan teks 
    }
    //Create database
    $sql = "CREATE DATABASE bukutamu"; //membuat variabel untuk menampung database baru 
    if(mysqli_query($conn, $sql)){ //membuat kondisi 
            echo "Database created successfully"; //menampilkan teks database berhasil dibuat
        } else {
            echo "Error creating database: " . mysqli_error($conn); //menampilkan database error dibuat
        }

        mysqli_close($conn); //menghentikan koneksi php ke server mysql dengan cara otomatis
        
    //Pembuatan tabel buku_tamu
    //membuat variabel untuk menampung tabel baru
    $query  = "CREATE TABLE buku_tamu(ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, NAMA VARCHAR(200), EMAIL VARCHAR(50), ISI TEXT)";   
    $hasil_query = mysqli_query($conn, $query); //membuat variabel untuk menampung query 
    if(!$conn){ //melakukan kondisi jika konek error untuk memastikan query berjalan
      die ("Query Error: ".mysqli_errno($conn). //menampilkan string error 
           " - ".mysqli_error($conn));
    }
    else {
    echo "Tabel buku_tamu sukses dibuat... "; //jika berhasil dibuat maka menampilkan string sukses
  }
  mysqli_close($conn); //menghentikan koneksi php ke server mysql dengan cara otomatis 
?>
  