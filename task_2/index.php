
<?php
 
    $produk = array(
        array(
            "id" => "1" , 
            "nama" => "Kipas Angin" ,
            "gambar" => "https://cf.shopee.co.id/file/2b4e56ede9e70480546cf3b9d01e0272" ,
            "harga" => "150.000,-" ,
        ) ,
        array(
            "id" => "2" , 
            "nama" => "Gitar Akustik" ,
            "gambar" => "https://cf.shopee.co.id/file/b2565f900484bf995c40d0245a1ebc7d" ,
            "harga" => "500.000,-" ,
        ) ,
        array(
            "id" => "3" , 
            "nama" => "Gitarlele" ,
            "gambar" => "https://cf.shopee.co.id/file/924eda2b077911382205a44892cd18e1" ,
            "harga" => "350.000,-" ,
        ) ,
    ) ;

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Online Shopping</title>

    </head>
    <body>

        <center><h1 style="font-family:Lucida Handwriting;"> Produk Tersedia </h1></center>

        
        <form action="detail-produk.php" method="GET">
            <label for="nama-barang">Nama Barang :</label>
            <input type="text" name="nama-barang"> <br>
            <button type="submit">Cari</button>
            <button onclick="history.back()">Ke pencarian sebelumnya</button>
        </form>    

    <p>
        <style>
            .box {
                    border: 1px solid;
                    
            }
            .desain-layout {
                width: 200px;
                margin: 20px;
                
            }
            .gambar {
                display: flex;
            }
            .teks {
                padding: 30px;
            }
        </style>
<br>
        <p><h3 style="font-family:verdana;"> Direkomendasikan Untuk Anda</h3><p>
    </p>
         
            <div class="gambar">
            
            <?php
                for($i = 0; $i < count($produk); $i++ ) {
            ?>
            <div class="desain-layout">
                <div  class="box">
                    <img width="200" src="<?php echo $produk[$i]["gambar"] ?>" alt="">
                    <div class="teks">
                    <h3><?= $produk[$i]["nama"] ?></h3>
                    <h4> Rp<?= $produk[$i]["harga"] ?></h4>
                    </div>
                </div>
            </div>
           
            <?php
                }
            ?>

    </body>
</html>