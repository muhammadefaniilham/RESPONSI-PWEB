<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bukutamu.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<head>
    <header>
        <a href="index.html" class="logo">Toko Bangunan</a>
        <div class="menu-toggle"></div>
        <nav>
            <ul>
                <li><a href="index.html" class="">Home</a></li>
                <li><a href="about_toko.php" class="">About</a></li>
                <li><a href="product.html" class="">Produk</a></li>
                <li><a href="bukutamu.php" class="">Buku Tamu</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".menu-toggle").click(function(){
                $(".menu-toggle").toggleClass("active")
                $("nav").toggleClass("active")
            })
        })
    </script>
</head>
<body>
    <div class="wrap" style="color: #813909;">
    <div class="container">
        <h1>Buku Tamu</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama_lengkap"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Kota</td>
                <td>:</td>
                <td>
                    <select name="kota">
                        <option>--Pilih Kota--</option>
                        <option>Yogyakarta</option>
                        <option>Magelang</option>
                        <option>Pekalongan</option>
                        <option>Semarang</option>
                        <option>Tegal</option>
                        <option>Salatiga</option>
                        <option>Surakarta</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Asal Kecamatan</td>
                <td>:</td>
                <td><input type="text" name="asal_kecamatan"></td>
            </tr>
            <tr>
                <td>Tanggal Berkunjung</td>
                <td>:</td>
                <td><input type="date" name="tanggal_berkunjung"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jkelamin" value="Pria">Pria
                    <input type="radio" name="jkelamin" value="Wanita">Wanita
                </td>
            </tr>
            <tr>
                <td>Komentar</td>
                <td>:</td>
                <td>
                    <textarea name="pesan"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit" name="kirim">Kirim</button>
                    <button><a link href="toko_bangunan">Kembali</a></button>
                </td>
            </tr>
        </table>
    </form>
    </div>
    </div>
    <div class="isi">
        <?php
        if(isset($_POST['nama_lengkap'])){
            $nama=$_POST['nama_lengkap'];
            $alamat=$_POST['alamat'];
            $email=$_POST['email'];
            $kota=$_POST['kota'];
            $asal_kecamatan=$_POST['asal_kecamatan'];
            $tanggal_berkunjung=$_POST['tanggal_berkunjung'];
            $jk=$_POST['jkelamin'];
            $komentar=$_POST['pesan'];
            echo "Nama Lengkap:$nama, Alamat:$alamat, Email:$email, Kota:$kota, Asal Kecamatan:$asal_kecamatan, Tanggal Berkunjung:$tanggal_berkunjung, Jenis Kelamin:$jk";
        }
        ?>
    </div>
</body>
    <div class="footertop">
        <div class="medsos">
            <ul>
            <li><a href="#"><img src="fb.png" width="25px" height="25px"></a></li>
			<li><a href="#"><img src="tw.png" width="25px" height="25px"></a></li>
			<li><a href="#"><img src="ig.png" width="25px" height="25px"></a></li>
            </ul>
        </div>
    </div>
    <div class="footerbottom">
        <div class="copyright">
            <h4 style="margin-top: 0px;"><br>Toko Bangunan Copyright&copy 2022</br></h4>
        </div>
    </div>
</body>