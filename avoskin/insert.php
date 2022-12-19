<!DOCTYPE html>
<html lang="en">

<head>
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
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>INSERT</h2>
                <div class="underline-title"></div>
            </div>
            <form method="post" class="form" action="insert_process.php">
                <label for="produk-kode" style="padding-top: 13px;">
                    &nbsp;Kode
                </label>
                <input id="produk-kode" class="form-content" type="number" name="kode" autocomplete="on"
                    required>
                <div class="form-border"></div>

                <label for="produk-nama" style="padding-top: 22px;">
                    &nbsp;Nama
                </label>
                <input id="produk-nama" class="form-content" type="text" name="nama" required>
                <div class="form-border"></div>

                <label for="produk-harga" style="padding-top: 22px;">
                    &nbsp;Harga
                </label>
                <input id="produk-harga" class="form-content" type="number" name="harga" required>
                <div class="form-border"></div>

                <label for="produk-stok" style="padding-top: 22px;">
                    &nbsp;Stok
                </label>
                <input id="produk-stok" class="form-content" type="number" name="stok" required>
                <div class="form-border"></div>

                
                <input id="submit-btn" type="submit" name="insert" value="Insert">
                
            </form>
        </div>
    </div>
</body>

</html>