<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    //create connection
    $conn = mysqli_connect($servername, $username, $password); //membuat variabel yang menampung status hasil koneksi kepada database

    //Check conection
    if(!$conn){ //membuat kondisi jika konek error
        die("Connection failed: " . mysqli_connect_error()); //jika konek ke mysql error maka akan menampilkan teks 
    }
    //Create database
    $sql = "CREATE DATABASE myDB"; //membuat variabel untuk menampung database baru 
    if(mysqli_query($conn, $sql)){ //membuat kondisi 
            echo "Database created successfully"; //menampilkan teks database berhasil dibuat
        } else {
            echo "Error creating database: " . mysqli_error($conn); //menampilkan database error dibuat
        }

        mysqli_close($conn); //menghentikan koneksi php ke server mysql dengan cara otomatis 
?>
  