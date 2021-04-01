<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    //create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname); //membuat variabel yang menampung status hasil koneksi kepada database

    //Check conection
    if(!$conn){ //membuat kondisi jika konek error
        die("Connection failed: " . mysqli_connect_error()); //jika konek ke mysql error maka akan menampilkan teks 
    }
    //Create database
    $sql = "INSERT INTO liga (kode, negara, champion)
    VALUES ('Jer', 'Jerman', '4'), ('Spa', 'Spanyol', '3'), ('Eng', 'English', '3')"; //membuat variabel untuk menampung data yang dimasukkan
    if(mysqli_query($conn, $sql)){ //membuat kondisi 
            echo "New record created successfully"; //menampilkan teks data berhasil dimasukkan
        } else {
            echo "Error:: " . $sql . "<br>" . mysqli_error($conn); //menampilkan teks data gagal dimasukkan
        }

        mysqli_close($conn); //menghentikan koneksi php ke server mysql dengan cara otomatis 
?>
  