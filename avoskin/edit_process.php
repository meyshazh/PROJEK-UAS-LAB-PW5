<?php 
  
  if(isset($_POST['edit'])) {
    include('connection.php');
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $update = mysqli_query($connection, "update produk set 
    
    nama = '$nama' ,
    harga  ='$harga' ,
    stok  = '$stok'

    where kode = '$kode' ")

    or die(mysqli_error($connection));

    if($update){
        echo "<h2>data updated succesfully</h2>";
        echo  "<script>window.location = 'data_produk.php'</script>";
    }

    else{
        echo "<h2>failed to update data</h2>";
        echo "<a href='edit.php ?nim = ".$kode."'>Back</a>";
    }
  }

  else{
        echo "<script>window.history.back()</script>";
  }


  ?>