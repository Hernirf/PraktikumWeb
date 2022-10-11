<?php
        if(isset($_POST['btn'])){
            $nama=$_POST['nama'];
            $jenis=$_POST['jenis'];
            $harga=$_POST['harga'];
            $jumlah=$_POST['jumlah'];
            $tanggal=$_POST['tanggal'];

        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inputan</title>
    <link rel="stylesheet" type="text/css" href="posttest3.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
    body{
        margin:0;
        padding:0;
        background:white;
        height:50vh; 
        /* overflow:hidden; */
    }
    .tampil{
        position:absolute;
        top: 60%;
        left: 50%;
        transform: translate(-50%,-50%);
        background:skyblue;
        width:400px;
        border-radius:10px;

    }

    .tampil h2{
        background:darkblue;
        text-align:center;
        padding: 0 0 20px 0;
        border-bottom: 1px solid;
        color:white;
        border-radius:10px;
    }
    .tampil p{
        color:black;
        text-align:left;
        margin:20px;

    }

    footer{
        margin-top:30%;
    }
    
</style>

    </style>
</head>
<body>
<div class="medsos">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fa-brands fa-line"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-sun" id="mode"></i></a></li>
                <li ><h1 id="nama">ASMABA<span>MART</span></h1></li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container">
            <nav >
                <ul>
                    <li ><a href="">HOME</a></li>
                    <li><a href="produk.html">PRODUK</a></li>
                    <li><a href="about.html">ABOUT ME</a></li>
                    <li class="aktif"><a href="stokbarang.php">STOK BARANG</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="label">
        <div class="container">
            <p>HOME/STOK BARANG/TAMPILAN</p>
        </div>
    </section>
    <section>
        <div class="tampil">
            <h2>DATA PRODUK</h2>
            <p>Nama Produk          : <?= $nama?></p>
            <p>Jenis Produk         : <?= $jenis?></p>
            <p>Harga Satuan         : Rp.<?= $harga?> </p>
            <p>Jumlah Produk        : <?= $jumlah?></p>
            <p>Tanggal Kadaluarsa   : <?= $tanggal?></p>
        </div>
    </section>
<footer>
    <div class="container">
        <small>Copyright 2022 by Herni Suhartati</small>
    </div>
</footer>
<script src="posttest3.js"></script>
</body>
</html>