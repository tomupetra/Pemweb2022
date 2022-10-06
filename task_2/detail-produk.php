<?php
    $produk = array(
        array(
            "id" => "1" , 
            "nama" => "RAZER KRAKEN KITTY QUARTZ" ,
            "gambar" => "https://cf.shopee.co.id/file/03e69dd82b1a3c82538eba665d6eb242" ,
            "harga" => "2.500.000,-" ,
        ) ,
        array(
            "id" => "2" , 
            "nama" => "RAZER BLACKSHARK V2 X - WHITE" ,
            "gambar" => "https://cf.shopee.co.id/file/ccfb2a4849d0dd0bd9fb0c46f964fd65" ,
            "harga" => "700.000,-" ,
        ) ,
        array(
            "id" => "3" , 
            "nama" => "RAZER HAMMERHEAD TWS-X" ,
            "gambar" => "https://cf.shopee.co.id/file/862343ce6921c6ad55e85258b64c9460" ,
            "harga" => "750.000,-" ,
        ) ,
    ) ;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Pencarian Produk</title>
    </head>
    <style>
        h2 {
            color: rgb(0, 128, 119);
        }
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
            padding: 10px;
        }
    </style>
    <body>
    
    <button onclick="history.back()">Kembali</button>
<br>
        <h2><p style="color:black"> Hasil Pencarian</p></h2>

            <div class="gambar">

            <?php
                for($i = 0; $i < count($produk); $i++ ) {
            ?>
            <div class="desain-layout">
                <div  class="box">
                    <img width="200" src="<?php echo $produk[$i]["gambar"] ?>" alt="">
                    <div class="teks">
                    <h3><?= $produk[$i]["nama"] ?></h3>
                    <h4> Rp.<?= $produk[$i]["harga"] ?></h4>
                    </div>
                </div>
            </div>
            
            <?php
                }
            ?>

    </body>
</html>