<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inputan</title>
    <style>
    
    body{
        margin:0;
        padding:0;
        background:skyblue;
        height:100vh; 
        overflow:hidden;
    }
    .center{
        position:absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background:white;
        width:500px;
        border-radius:10px;
    }

    .center h2{
        text-align:center;
        padding: 0 0 20px 0;
        border-bottom: 1px solid;
        color:darkblue;
    }

    .center form{
        padding:0 40px;
        box-sizing:border-box;
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
        background:none;
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

    </style>
</head>
<body>
    <div class="center">
        <h2>Pendataan Stok Produk</h2>
        <form action="tampil.php" method="post">
            <div class="txt">
                <label for="">Nama Produk</label>
                <input type="text" name="nama" required autocomplete="off">
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
                <input type="number" name="harga" required>
            </div>
            <div class="txt">
                <label for="">Jumlah Produk</label>
                <input type="number" name="jumlah" required>
            </div>
            <div class="txt">
                <label for="">Tanggal Kadaluarsa</label>
                <input type="date" name="tanggal"required>
            </div>
            <input type="submit" name="btn" value="Simpan">
        </form>
    </div>
</body>
</html>