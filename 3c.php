<html>
    <body>
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
    $sql = "SELECT kode, negara, champion FROM liga"; //membuat variabel untuk memilih data berdasar nama tabel
    $result = mysqli_query($conn, $sql); //membuat variabel dengan menampung query
    if(mysqli_num_rows($result) > 0 ){ //membuat kondisi banyaknya data yang ada lebih dari 0
        //output data of each row
        while($row = mysqli_fetch_assoc($result)){ //melakukan kondisi while dengan menghasilkan array asosiatif
            echo "kode: " . $row["kode"]. " -Negara: " . $row["negara"]. " " . $row["champion"]. "<br>"; //menampilkan data ke halaman 
        }
    }else{
        echo "0 result"; //melakukan kondisi jika tidak ada data maka outputnya 0
    }
        mysqli_close($conn); //menghentikan koneksi php ke server mysql dengan cara otomatis 
    ?>
  
    </body>
</html>
