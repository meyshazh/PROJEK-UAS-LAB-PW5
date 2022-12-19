<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PRODUCT</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="scarlett.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"
        defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"
        defer></script>

        <style type="text/css">
            html {
        height: 100%;
    }

    body {
        background: -webkit-linear-gradient(bottom, #E8F5C8, #9FA5D5);
        background-repeat: no-repeat;
        padding: 30px;
    }

        #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, .65);
        height: auto;
        padding: 10px;
        margin: 6rem auto 9.1rem auto;
        width: auto;
    }

    #card-content {
        padding: 12px 12px;
    }

    #card-title {
        font-family: "Raleway Thin", sans-serif;
        letter-spacing: 4px;
        padding-bottom: 23px;
        padding-top: 13px;
        text-align: center;
    }

    .underline-title {
        background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
        height: 2px;
        margin: -1.1rem auto 0 auto;
        width: 89px;
    }
    
    #submit-btn {
        background: -webkit-linear-gradient(right, #7b8ef7, #2dbd6e);
        border: none;
        border-radius: 21px;
        box-shadow: 0px 1px 8px #24c64f;
        cursor: pointer;
        color: white;
        font-family: "Raleway SemiBold", sans-serif;
        height: 42.3px;
        margin: 0 auto;
        margin-top: 50px;
        transition: .25s;
        width: 153px;
    }

    #submit-btn:hover {
        box-shadow: 0px 1px 18px #24c64f;
    }

    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="justify-content:space-between">
    <div class="container">
      <div class="row align-items-start">
        <div class="col">
          <img src="logo.png" width="100" height="50" class="d-inline-block align-top" alt="">
        </div>
      </div>
      <div class="row align-items-end">
        <div class="col">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="data_produk.php">Data Product<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Log Out</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
  
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>DATA</h2>
                <br>
                <div class="underline-title"></div>
            </div>
                <table class="table table-bordered" >
                        <th style="text-align: center;">Product Code</th>
                        <th style="text-align: center;">Product Name</th>
                        <th style="text-align: center;">Price</th>
                        <th style="text-align: center;">Stock</th>
                        <th style="text-align: center;">Option</th>
                    </thead>

                    <!-- Menampilkan data produk -->
                    <?php
                    include_once 'connection.php';

                    function rupiah($angka){
        
                        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                        return $hasil_rupiah;
                    
                    }

                    $data = mysqli_query($connection, "SELECT * FROM produk");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $d['kode']; ?></td>
                        <td style="text-align: center;"><?php echo $d['nama']; ?></td>
                        <td style="text-align: center;"><?php echo rupiah($d['harga']); ?></td>
                        <td style="text-align: center;"><?php echo $d['stok']; ?></td>
                        <td style="text-align: center;">
                            <a href="edit.php ?kode=<?php echo $d['kode']; ?>">Edit</a>
                            <a href="delete.php ?kode=<?php echo $d['kode']; ?>">| Delete</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                    <!-- Menampilkan data produk -->
                </table>

                <a href="insert.php"  >
                    <center><input id="submit-btn" type="submit" name="insert" value="Insert Product" ></center>
                </a>  
        </div>
    </div>
</body>
</html>