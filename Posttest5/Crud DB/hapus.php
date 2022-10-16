<?php

require 'konek.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $result=mysqli_query($db, 
    "DELETE FROM pesan WHERE id='$id'");

    if($result){
        echo "
            <script>
                alert('Pesanan Berhasil Dihapus');
                document.location.href='index.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Pesanan Gagal Dihapus');
            </script>
        ";
    }
}

?>
