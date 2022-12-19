<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT PRODUCT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"
        defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"
        defer></script>

        <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
    a {
        text-decoration: none;
    }

    html {
        height: 100%;
    }

    body {
        background: -webkit-linear-gradient(bottom,#E8F5C8, #9FA5D5);
        background-repeat: no-repeat;

    }

    label {
        font-family: "Raleway", sans-serif;
        font-size: 11pt;
    }

    #forgot-pass {
        color: #2dbd6e;
        font-family: "Raleway", sans-serif;
        font-size: 10pt;
        margin-top: 3px;
        text-align: right;
    }

    #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, .65);
        height: 410px;
        margin: 6rem auto 9.1rem auto;
        width: 329px;
    }

    #card-content {
        padding: 12px 44px;
    }

    #card-title {
        font-family: "Raleway Thin", sans-serif;
        letter-spacing: 4px;
        padding-bottom: 23px;
        padding-top: 13px;
        text-align: center;
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

    .form {
        display: flex;
        align-items: left;
        flex-direction: column;
    }

    .form-border {
        background: -webkit-linear-gradient(right, #7b8ef7, #2ec06f);
        height: 1px;
        width: 100%;
    }

    .form-content {
        background: #fbfbfb;
        border: none;
        outline: none;
        padding-top: 14px;
    }

    .underline-title {
        background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
        height: 2px;
        margin: -1.1rem auto 0 auto;
        width: 89px;
    }
    </style>
</head>

<body>
    <!-- Edit data mahasiswa -->
    <?php
  include('connection.php');
  $kode = $_GET['kode'];
  $show = mysqli_query($connection, "SELECT * FROM produk WHERE kode = '$kode'");
  if (mysqli_num_rows($show) == 0) {
    echo '<script>window.history.back()</script>';
  } else {
    $d = mysqli_fetch_assoc($show);
  }
  ?>
  
<div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>EDIT</h2>
                <div class="underline-title mt-2"></div>
            </div>
            <form method="post" class="form" action="edit_process.php">
            <input type="hidden" name="kode" value="<?php echo $kode; ?>">
                <input id="produk-kode" class="form-content" type="hidden" name="kode" value="<?php echo $kode; ?>"
                    required>
                

                <label for="produk-nama" style="padding-top: 22px;">
                    &nbsp;Nama
                </label>
                <input id="produk-nama" class="form-content" type="text" name="nama" size="20" value="<?php echo $d['nama']; ?>" required>
                <div class="form-border"></div>

                <label for="produk-harga" style="padding-top: 22px;">
                    &nbsp;Harga
                </label>
                <input id="produk-harga" class="form-content" type="number" name="harga" size="20" value="<?php echo $d['harga']; ?>" required>
                <div class="form-border"></div>

                <label for="produk-stok" style="padding-top: 22px;">
                    &nbsp;Stok
                </label>
                <input id="produk-stok" class="form-content" type="number" name="stok" size="20" value="<?php echo $d['stok']; ?>" required>
                <div class="form-border"></div>

                <br>
                <input id="submit-btn" type="submit" name="edit" value="Edit">
                
            </form>
        </div>
    </div>
    
</body>

</html>