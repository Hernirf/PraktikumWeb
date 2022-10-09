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
<title>Produk Asmaba Mart</title>
</head>
<style>
    body{
        margin:0;
        padding:0;
        background:skyblue;
        height:50vh; 
        overflow:hidden;
    }
    .tampil{
        position:absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background:white;
        width:400px;
        border-radius:10px;

    }

    .tampil h2{
        text-align:center;
        padding: 0 0 20px 0;
        border-bottom: 1px solid;
        color:darkblue;
    }
    .tampil p{
        color:black;
        text-align:left;
        margin:20px;

    }
    
</style>
<body>
<div class="tampil">
    <h2>DATA PRODUK ASMABA MART</h2>
    <p>Nama Produk          : <?= $nama?></p>
    <p>Jenis Produk         : <?= $jenis?></p>
    <p>Harga Satuan         : Rp.<?= $harga?> </p>
    <p>Jumlah Produk        : <?= $jumlah?></p>
    <p>Tanggal Kadaluarsa   : <?= $tanggal?></p>
</div>
</body>

</html>
