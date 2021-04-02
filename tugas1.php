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

    //insert data
    $sql = "INSERT INTO buku_tamu (NAMA, EMAIL, ISI)
    VALUES ('Aldan', 'aldanfirdaus30@gmail.com', 'Selamat bahagia'), ('Bobi', 'bobi@gmail.com', 'Sukses'), ('Rafa', 'rafael@gmail.com', 'Oke')"; 
    //membuat variabel untuk menampung data yang dimasukkan
    if(mysqli_query($conn, $sql)){ //membuat kondisi 
            echo "New record created successfully"; //menampilkan teks data berhasil dimasukkan
        } else {
            echo "Error:: " . $sql . "<br>" . mysqli_error($conn); //menampilkan teks data gagal dimasukkan
        }

        //Menampilkan data
    $sql = "SELECT NAMA, EMAIL, ISI FROM buku_tamu"; //membuat variabel untuk memilih data berdasar nama tabel
    $result = mysqli_query($conn, $sql); //membuat variabel dengan menampung query
    if(mysqli_num_rows($result) > 0 ){ //membuat kondisi banyaknya data yang ada lebih dari 0
        //output data of each row
        while($row = mysqli_fetch_assoc($result)){ //melakukan kondisi while dengan menghasilkan array asosiatif
            echo "Nama: " . $row["NAMA"]. "<br>"."Email: " . $row["EMAIL"]. "<br>". "Isi:" . $row["ISI"]. "<br>"; //menampilkan data ke halaman 
        }
    }else{
        echo "0 result"; //melakukan kondisi jika tidak ada data maka outputnya 0
    }
  mysqli_close($conn); //menghentikan koneksi php ke server mysql dengan cara otomatis 
?>
  