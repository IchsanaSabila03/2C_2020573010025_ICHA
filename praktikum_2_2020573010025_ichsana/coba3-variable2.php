<html>
    <body>
        <?php
            $jalan = "Medan - B.Aceh";
            $norumah = 29;
            $blok = "4c";
            $jumlahpenghuni = 3;
            echo "hasil variabel variabel + variabel norumah adalah ";
            echo $alamat = $jalan. $norumah;
            echo "<br>";
            echo "hasil variabel variabel norumah + variabel jumlahpenghuni adalah";
            echo $hasil = &$norumah + $jumlahpenghuni;
            echo "<br>";
            echo "hasil variabel variabel blok + variabel norumah adalah";
                echo $hasil = $blok + $norumah;
            echo "<br>";
        ?>
    </body>
</html>