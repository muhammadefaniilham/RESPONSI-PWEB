<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style_about.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <header>
        <a href="index.html" class="logo">Toko Bangunan</a>
        <div class="menu-toggle"></div>
        <nav>
            <ul>
                <li><a href="index.html" class="">Home</a><li>
                <li><a href="about_toko.php" class="active">About</a><li>
                <li><a href="product.html" class="">Product</a><li>
                <li><a href="bukutamu.php" class="">Buku Tamu</a><li>

            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
    <script> src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".menu-toggle").click(function(){
                $(".menu-toggle").toggleClass("active")
                $("nav").toggleClass("active")
            })
        })
    </script>
    <div class="container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63245.97077191183!2d110.33982529872057!3d-7.80324901040523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5787bd5b6bc5%3A0x21723fd4d3684f71!2sYogyakarta%2C%20Kota%20Yogyakarta%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1658138631751!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</head>
<body>
    <div class="main-content">
        <div class="left box">
            <h2>Tentang Toko</h2>
            <div class="content">
                <p>Website ini menjual berbagai produk bangunan seperti cat, semen, paku, papan kayu, pintu, pompa air, batako, jendela, seng dll.</p>
                <div class="centerbox">
                    <h2>Lokasi</h2>
                    <div class="content">
                    <div class="place">
                    <span class="fas fa-map-marker-alt"></span>
                    <span class="text">Kec. Umbulharjo., Kota Yogyakarta, Daerah Istimewa Yogyakarta</span>
                </div>
                <div class="phone">
                    <span class="fas fa-phone-alt"></span>
                    <span class="text">(+62)813 7972 6288</span>
                <div class="medsos">
                    <ul>
                        <li><a href="#"><img src="fb.png" width="25px" height="25px"></a></li>
			            <li><a href="#"><img src="tw.png" width="25px" height="25px"></a></li>
			            <li><a href="#"><img src="ig.png" width="25px" height="25px"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footerbottom">
        <div class="copyright">
            <h4 style="margin-top: 0px;"><br>Toko Bangunan Copyright&copy 2022</br></h4>
        </div>
    </div>
</footer>
</html>
