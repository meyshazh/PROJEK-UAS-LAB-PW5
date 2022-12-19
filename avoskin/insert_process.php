<?php 
  
  if(isset($_POST['insert'])) {
    include_once 'connection.php';
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $input = mysqli_query($connection, "INSERT INTO produk VALUES
    ('$kode', '$nama', '$harga', '$stok')");

    if ($input) {
      echo "<h3>Data Inserted Successfully</h3>";
      echo "<script>window.location = 'data_produk.php'</script>";
    }
    else  {
      echo "Failed to Insert Data";
      echo "<a href='insert.php'>Back</a>";
    }
  }
  else {
    echo "<script>window.history.back()</script>";
  }