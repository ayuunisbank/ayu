<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TUGAS 5 - PEMROGRAMAN WEB</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <script src="" async defer></script>

        <h2>TUGAS 5 - PEMROGRAMAN WEB</h2>
        <?php
        echo "Studi kasus 1:";
        echo "<p />\n";
        echo "Buatlah program dengan menggunakan PHP untuk mengolah sebuah data NIM (nim anda sendiri) yang disimpan dalam sebuah variabel dari inputan form, lalu silahkan diolah dengan memanfaatkan function, string, dan kondisi if/else sehingga output yang dihasilkan sbb:";
        echo "<p />\n";
        echo "1. berapa jumlah karakter dalam nim anda ?";
        echo "<br />\n";
        echo "2. tampilkan maksud dalam nim tersebut, misalnya tahun angkatan berapa?";
        echo "<br />\n";
        echo "3. Prodi apa ?";
        echo "<br />\n";
        echo "4. Fakultas apa?";
        ?>
        <h2>JAWABAN</h2>
        <p>
            <FORM ACTION="" METHOD="POST" NAME="input">       
                Masukkan NIM Mahasiswa : <input type="text" name="nim">
                <p><input type="submit" name="Input" value="Input"><input type=reset value="Hapus">
            </FORM>
        </p>
        <p>
        <?php
        error_reporting(0);
        if (isset($_POST['Input']))
            {
                $nim = $_POST['nim'];
                echo "NIM Mahasiswa : <b>$nim</b>";
                echo "<p />\n";
                $jumlah_karakter    =strlen($nim);
                echo "Jumlah karakter = $jumlah_karakter karakter";
                echo "<p />\n";
                $angkatan    =substr($nim, 0, 2);
                echo "Angkatan Tahun = 20";echo $angkatan; 
                echo "<p />\n";
                $fakultas    =substr($nim, 3, 2);
                echo "Kode Fakultas Anda =";echo $fakultas; 
                echo "<p />\n";
                $prodi    =substr($nim, 6, 2);
                echo "Kode Prodi Anda =";echo $prodi;
                echo "<p />\n";
                    if($fakultas == "01" && $prodi == "53"){
                        echo "Prodi Anda = Teknik Informatika";
                        echo "<p />\n";
                        echo "Fakultas Anda = Fakultas Teknologi Informasi (FTII)";
                    }elseif($fakultas == "01" && $prodi == "55"){
                        echo "Prodi Anda = Sistem Informasi";
                        echo "<p />\n";
                        echo "Fakultas Anda = Fakultas Teknologi Informasi (FTII)";
                    }elseif($fakultas == "01" && $prodi == "51"){
                        echo "Prodi Anda = Teknik Industri";
                        echo "<p />\n";
                        echo "Fakultas Anda = Fakultas Teknologi Informasi (FTII)";
                    }elseif($fakultas == "01" && $prodi == "85"){
                        echo "Prodi Anda = Magister Teknologi Informasi";
                        echo "<p />\n";
                        echo "Fakultas Anda = Fakultas Teknologi Informasi (FTII)";
                    }elseif($fakultas == "02" && $prodi == "51"){
                        echo "Prodi Anda = Ilmu Hukum";
                        echo "<p />\n";
                        echo "Fakultas Anda = Fakultas Hukum dan Bahasa (FHB)";
                    }elseif($fakultas == "02" && $prodi == "52"){
                        echo "Prodi Anda = Sastra Inggris";
                        echo "<p />\n";
                        echo "Fakultas Anda = Fakultas Hukum dan Bahasa (FHB)";
                    }elseif($fakultas == "05" && $prodi == "51"){
                        echo "Prodi Anda = Manajemen";
                        echo "<p />\n";
                        echo "Fakultas Anda = Fakultas Ekonomika dan Bisnis (FEB)";
                    }elseif($fakultas == "05" && $prodi == "52"){
                        echo "Prodi Anda = Akuntansi";
                        echo "<p />\n";
                        echo "Fakultas Anda = Fakultas Ekonomika dan Bisnis (FEB)";
                    }elseif($fakultas == "08" && $prodi == "31"){
                        echo "Prodi Anda = Manajemen Informatika";
                        echo "<p />\n";
                        echo "Fakultas Anda = Fakultas Vokasi (FV)";
                    }elseif($fakultas == "08" && $prodi == "34"){
                        echo "Prodi Anda = Keuangan Perbankan";
                        echo "<p />\n";
                        echo "Fakultas Anda = Fakultas Vokasi (FV)";
                    }elseif($fakultas == "08" && $prodi == "32"){
                        echo "Prodi Anda = Perhotelan";
                        echo "<p />\n";
                        echo "Fakultas Anda = Fakultas Vokasi (FV)";
                    }else{
                        echo "KOE DUDU MAHASISWA COK";
                    }

            }
        elseif (is_null ($_POST['Input']))
        {
            echo "Mohon diisi NIM Mahasiswa";
        }
        ?>

    </body>
</html>