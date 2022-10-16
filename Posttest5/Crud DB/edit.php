<?php

    // include
    require 'konek.php';
    
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }

    $result=mysqli_query($db, 
    "SELECT * FROM pesan WHERE id='$id'");
    $row=mysqli_fetch_array($result);


    if(isset($_POST['btn'])){
        $nama=$_POST['nama'];
        $jenis=$_POST['jenis'];
        $harga=$_POST['harga'];
        $jumlah=$_POST['jumlah'];
        $tanggal=$_POST['tanggal'];
        
        $result = mysqli_query($db, 
        "UPDATE pesan SET
        nama ='$nama',
        jenis ='$jenis',
        harga ='$harga',
        jumlah = '$jumlah',
        tanggal ='$tanggal'

        WHERE id='$id'");

        if($result){
            echo "
                <script>
                    alert('Pesanan Berhasil Diedit');
                    document.location.href='index.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Pesanan Gagal Diedit');
                </script>
            ";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inputan</title>
    <link rel="stylesheet" type="text/css" href="../posttest3.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
    
    body{
        margin:0;
        padding:0;
        background:white;
        height:100vh; 
        /* overflow:hidden; */
    }
    .center{
        position:absolute;
        top: 66%;
        left: 50%;
        transform: translate(-50%,-50%);
        background:skyblue;
        width:500px;
        border-radius:10px;
    }

    .center h2{
        text-align:center;
        padding: 0 0 20px 0;
        border-bottom: 1px solid;
        color:white;
        background:darkblue;
        border-radius:10px;


    }

    .center form{
        padding:0 40px;
        box-sizing:border-box;
        border: 1px solid;
        
    }

    form .txt{
        position:relative;
        /* border-bottom:1px solid; */
        margin:30px 0;
    }

    .txt input{
        width:100%;
        padding: 0 5px;
        height:20px;
        font-size:16px;
        border:1px solid;
        background:white;
        color:black;
        outline:none;
    } 

    .txt label{
        top:50px;
        bottom:30px;
        left:5px;
        color:black;
        transform:translate(-50%);
        font-size:16px;
        pointer-events:none;
    }
    td{
        padding:0 5px;   
    }


    input[type="submit"]{
        width:100%;
        height:50px;
        border: 1px solid;
        background:darkblue;
        border-radius:25px;
        color:white;
        margin-bottom:20px;
        font-size:18px;
    }
    footer{
        margin-top:35%;
    }

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
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="produk.html">PRODUK</a></li>
                    <li><a href="about.html">ABOUT ME</a></li>
                    <li class="aktif"><a href="index.php">PESANAN</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="label">
        <div class="container">
            <p>HOME/PESANAN/EDIT PESANAN</p>
        </div>
    </section>
    <section>
        <div class="center">
            <h2>Edit di Sini</h2>
            <form action="" method="post">
                <div class="txt">
                    <label for="">Nama Produk</label>
                    <input type="text" name="nama" value=<?=$row['nama']?> required autocomplete="off">
                </div>
                <div class="txt">
                    <label for="">Jenis Produk</label>
                    <table>
                        <tr>
                            
                            <td><input type="radio" name="jenis" value="Makanan" required></td>
                            <td>Makanan</td>

                            <td><input type="radio" name="jenis" value="Minuman" required></td>
                            <td>Minuman</td>
                        </tr>
                    </table>
                </div>
                <div class="txt">
                    <label for="">Harga Satuan</label>
                    <input type="number" name="harga" value=<?=$row['harga']?> required>
                </div>
                <div class="txt">
                    <label for="">Jumlah Produk</label>
                    <input type="number" name="jumlah" value=<?=$row['jumlah']?> required>
                </div>
                <div class="txt">
                    <label for="">Tanggal Pemesanan</label>
                    <input type="date" name="tanggal" value=<?=$row['tanggal']?> required>
                </div>
                <input type="submit" name="btn" value="Simpan">
            </form>
        </div>
    </section>
<footer>
    <div class="container">
        <small>Copyright 2022 by Herni Suhartati</small>
    </div>
</footer>
<script src="../posttest3.js"></script>
</body>
</html>


















