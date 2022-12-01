<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="{nama}" />
    <meta name="description" content="Website {Nama} Dibuat Oleh Ahlinyawebsite.com" />
    <meta name="author" content="{nama}" />
    <title>Tanaman Hias</title>
    <!-- Style Css -->
    <link rel="stylesheet" href="{{asset('front_assets/css/styles.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/style.css')}}">
    <!-- End Style -->

    <!-- Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

     <!--Swiffy Slider-->
     <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
     <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Icon -->
    <link rel="icon" type="image/x-icon" href="{{asset('front_assets/img/logo.png')}}" />

    <!-- Slick JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- End Slick Js -->
</head>
<body>
    <div id="layoutDefault">
        <div id="layoutDefault_content">
            <main>
                <nav class="navbar navbar-expand-lg fixed-top">
                        <div class="container">
                            <a class="d-flex justify-content-center align-content-center align-items-center" >
                                <img
                                    alt="Logo {nama}"
                                    class="navbar-brand"
                                    height="40"
                                    src="{{asset('front_assets/img/logo.svg')}}"
                                    width="40"
                                >
                                <p class="name-logo header2 text-white m-auto">GardenPlant</p>
                            </a>
                            <button
                                class="navbar-toggler text-white"
                                type="button"
                                data-toggle="collapse"
                                data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent"
                                aria-expanded="false"
                                aria-label="Toggle navigation"
                            >
                                <i class="fas fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto pl-4">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#content1">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#content1">PRODUK</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#content1">TENTANG</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#content1">TESTIMONI</a>
                                    </li>
                                </ul>
                                <button class="nav-btn body1">KONTAK KAMI</button>
                            </div>
                        </div>
                    </nav>
                    <header class="page-header" id="header">
                        <div class="container px-3 px-md-5">
                            <div class="d-flex">
                                <div class="col-lg-6">
                                    <p class="header-title1 text-white mb-0">Hiasi Kebun Tanamanmu</p>
                                    <p class="header-title2 text-white">Dengan GardenPlant </p>
                                    <button class="header-btn body1 text-white">Hubungi Kami</button>
                                </div>
                                <div class="header-content-img col-lg-6">
                                    <img src="{{asset('front_assets/img/img-header.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </header>

                <section id="keunggulanPerusahaan">
                    <div class="container px-3 px-md-5">
                        <h2 class="keper-judul header2 mb-4 text-dark text-center">Keunggulan Tempat Kami</h2>
                        <div class="keper-bungkusan card-deck text-white">
                            <div class="card m-0 keper-item1">
                              <img src="../front_assets/img/icon-keper1.png" 
                                    alt="..."
                                    width="30"
                                    height="30" 
                                    class="keper-img mx-auto d-block pt-2">
                              <div class="card-body text-center">
                                <p class="keper-card-title1  header2 pt-1">Tanaman Berkualitas</p>
                                <p class="keper-card-text text-black body1">Dapatkan kualitas produk terbaik dengan nilai 
                                    yang jauh diatas dari harga yang dibayarkan</p>
                              </div>
                            </div>
                            <div class="card m-0 keper-item">
                              <img src="../front_assets/img/icon-keper2.png" 
                                    width="30"
                                    height="30" 
                                    class="keper-img mx-auto d-block pt-2" alt="...">
                              <div class="card-body text-center">
                                <p class="keper-card-title text-white header2 pt-1">Selalu Segar</p>
                                <p class="keper-card-text text-white body1">Dapatkan kualitas produk terbaik dengan nilai 
                                    yang jauh diatas dari harga yang dibayarkan
                                </p>
                              </div>
                            </div>
                            <div class="card m-0 keper-item1">
                              <img src="../front_assets/img/icon-keper3.png" 
                                    width="30"
                                    height="30" 
                                    class="keper-img mx-auto d-block pt-2" alt="...">
                              <div class="card-body text-center">
                                <p class="keper-card-title1 header2 pt-1">Pelayanan Prima</p>
                                <p class="keper-card-text text-black body1">Dapatkan kualitas produk terbaik dengan nilai 
                                    yang jauh diatas dari harga yang dibayarkan</p>
                              </div>
                            </div>
                          </div>
                    </div>
                </section>

                <section id="keunggulanProduk">
                    <div class="container px-3 px-md-5">
                        <h2 class="kepro-judul header2 mb-2 text-dark text-left">Keahlian Kami Dalam Bidangnya</h2>
                        <div class="kepro-bungkusan card-deck text-white">
                            <div class="card kepro-item1">
                              <div class="card-body text-center d-flex">
                                <p class="kepro-card-title text-white header3 m-auto">Kontrol Kelembaban</p>
                              
                              </div>
                            </div>
                            <div class="card kepro-item2">
                              <div class="card-body text-center d-flex">
                                <p class="kepro-card-title text-white header3 m-auto">Antisipasi Hama</p>
                               
                              </div>
                            </div>
                            <div class="card kepro-item3">
                              <div class="card-body text-center d-flex">
                                <p class="kepro-card-title text-white header3 m-auto">Memangkas Rumput Liar</p>
                               
                              </div>
                            </div>
                          </div>
                    </div>
                </section>

                <section id="gambarProses">
                    <div class="container px-3 px-md-5">
                        <h2 class="gapro-judul header2 mb-2 text-dark text-center">Galeri Terbaru Tanaman GardenPlant</h2>
                        <div class="gapro-bungkusan card-deck text-white">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img src="../front_assets/img/img-gapro1.png" alt="">
                                </div>
                                <div class="col-lg-3">
                                    <img src="../front_assets/img/img-gapro2.png" alt="">
                                </div>
                                <div class="col-lg-3">
                                    <img src="../front_assets/img/img-gapro3.png" alt="">
                                </div>
                                <div class="col-lg-3">
                                    <img src="../front_assets/img/img-gapro4.png" alt="">
                                </div>
                                <div class="col-lg-3">
                                    <img src="../front_assets/img/img-gapro5.png" alt="">
                                </div>
                                <div class="col-lg-3">
                                    <img src="../front_assets/img/img-gapro6.png" alt="">
                                </div>
                                <div class="col-lg-3">
                                    <img src="../front_assets/img/img-gapro7.png" alt="">
                                </div>
                                <div class="col-lg-3">
                                    <img src="../front_assets/img/img-gapro8.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="tentangKami">
                    <div class="container px-3 px-md-5">
                        <div class="d-flex">
                        <div class="col-lg-6 d-flex">
                            <div class="col-lg-6 teka-img1">
                                <img src="../front_assets/img/img-teka-bagian1-a.png" alt="" width="200"
                                height="459">
                            </div>
                            <div class="col-lg-6 teka-img2">
                                <img src="../front_assets/img/img-teka-bagian1-b.png" alt="" width="200"
                                height="459">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <p class="teka-card-title header2 pt-1 text-white">Tentang GardenPlant</p>
                                <p class="teka-card-text text-white header3">Lorem ipsum dolor sit amet, 
                                    consectetur adipisicing elit. Quasi facere accusamus a animi te mporibus commodi nulla,
                                     quo earum nesciunt voluptate ipsa m rem sunt dolorem ipsum nihil quaerat repudiandae perferendis ex.</p>
                                    <button class="teka-btn body1">Selengkapnya Kontak Kami</button>
                        </div>
                    </div>
                    </div>
                </section>

                <section id="kenapaHarusBeliKepadaKami">
                    <div class="container px-3 px-md-5 d-flex">
                        <div class="d-flex">
                            <div class="keha-icon col-lg-6">
                             <h2 class="keha-judul header2 text-white text-left">Kenapa Memilih GardenPlant</h2>
                                <div class="keha-icontext1 col-lg-12 d-flex">
                                    <img src="../front_assets/img/icon-keha1.png" alt="">
                                    <p class="keha-card-title header3 pt-1 text-white my-auto">Ditanam Manual</p>
                                </div>
                                <div class="keha-icontext2 col-lg-12 d-flex mt-0">
                                    <p class="keha-card-title header3 pt-1 text-white my-auto">Kebun Udara Bersih</p>
                                    <img src="../front_assets/img/icon-keha2.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex">
                                <div class="col-lg-6 keha-img1">
                                    <img src="../front_assets/img/img-keha-bagian2-a.png" alt="" width="200"
                                    height="459">
                                </div>
                                <div class="col-lg-6 keha-img2">
                                    <img src="../front_assets/img/img-keha-bagian2-b.png" alt="" width="200"
                                    height="459">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="testimoni">
                    <h2 class="testimoni-judul header2 text-dark text-center mb-4">Apa Pendapat Orang Lain Tentang Tempat Kami</h2>
                    <div class="container px-3 px-md-5 d-flex">
                        <div class="testimoni-bungkusan col-lg-12 m-auto d-flex" id="carousel">
                            <div class="testimoni-card col-lg-4 m-auto p-0">
                                <p class="testimoni-card-text text-dark body1 text-center">“ Senang sekali dengan produk tanamannya, 
                                    karena bersih sekali dalam perawatannya. Kemudian untuk tempatnya juga 
                                    nyaman dengan udara yang segar tanpa ada polusi udara karena memang jauh 
                                    dari mobilitas kendaran lalu-lalang. “

                                </p>
                                <div class="testimoni-personal col-lg-12">
                                        <img src="../front_assets/img/profil-testi2.png" alt="" width="60"
                                        height="60">
                                        <p class="testimoni-name text-dark header3">Aliffia Putrianti</p>
                                </div>
                            </div>
                            <div class="testimoni-card col-lg-4 m-auto p-0">
                                <p class="testimoni-card-text text-dark body1 text-center">“ Senang sekali dengan produk tanamannya, 
                                    karena bersih sekali dalam perawatannya. Kemudian untuk tempatnya juga nyaman dengan 
                                    udara yang segar tanpa ada polusi udara karena memang jauh dari mobilitas kendaran lalu-lalang. “
                                </p>
                                <div class="testimoni-personal col-lg-12 mx-auto">
                                        <img src="../front_assets/img/profil-testi1.png" alt="" width="60"
                                        height="60">
                                        <p class="testimoni-name text-dark header3">Basuki Rahmat</p>
                                
                                </div>
                            </div>
                            
                        </div>
                </section>

                <section id="daftarProduk">
                    <div class="container px-3 px-md-5">
                        <div class="dapro-bungkusan d-flex">
                            <div class="col-lg-6">
                                <p class="dapro-card-judul header2 pt-1 text-dark">Produk</p>
                                    <p class="dapro-card-judul1 header2">Terbaik Kami</p>
                                    <p class="dapro-card-desc header3 text-dark">Berikut adalah produk tanaman hias yang
                                         sangat diminati customer lain</p>
                                         <button class="dapro-btn body1">Pesan Sekarang</button>
                            </div>
                            <div class="col-lg-6 d-flex">
                                <div class="col-lg-6 dapro-img">
                                    <div class="dapro-img-text">
                                    <img src="../front_assets/img/img-produk1.png" alt="" width="200"
                                    height="236" class="">
                                    <p class="dapro-card-title body1 pt-1 text-white text-center">Aglaonema Nitidum</p>
                                    <p class="dapro-card-title1 body1 text-center">Rp. 100.000 / Pcs</p>
                                </div>
                                </div>
                                <div class="col-lg-6 dapro-img ml-3">
                                    <div class="dapro-img-text">
                                    <img src="../front_assets/img/img-produk2.png" alt="" width="200"
                                    height="236" class="">
                                    <p class="dapro-card-title body1 pt-1 text-white text-center">Aglonema Red Peacock</p>
                                    <p class="dapro-card-title1 body1 text-center">Rp. 200.000 / Pcs</p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>

        <div id="layoutDefault_footer">
            <footer class="footer footer-bg mt-4">
                <div class="container px-3 px-md-5">
                    <div class="row">
                        <div class="col-lg-12 d-flex">
                            <div class="col-lg-6 pt-5">
                                <img src="../front_assets/img/logo-footer.png" alt="" class="logo-footer">
                                <div class="col-lg-6 d-flex justify-content-around pt-3 pl-0">
                                    <img src="../front_assets/img/fb-icon.png" alt="" class="sosmed">
                                    <img src="../front_assets/img/ig-icon.png" alt="" class="sosmed">
                                    <img src="../front_assets/img/twt-icon.png" alt="" class="sosmed">
                                </div>
                                <div class="col-lg-12 pt-5 pl-0">
                                    <small class="text-center font-13px color-white">Copyright © 2022 • All rights reserved • Ahlinya Web</small>
                                </div>
                            </div>
                            <div class="footer-bgn2 col-lg-6">
                                <div class="footer-desc">
                                    <div class="col-lg-6">
                                        <p class="footer-text1 text-white body1 mb-0">Lokasi Toko</p>
                                        <p class="footer-text text-white body1">Jl. Traktor No.123, Cisaranten Kulon
                                            Kec. Arcamanik</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="footer-text1 text-white body1 mb-0">Email</p>
                                        <p class="footer-text text-white body1">ahlinyawebsite@gmail.com</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="footer-text1 text-white body mb-0">Telepon</p>
                                        <p class="footer-text text-white body1">0821 - 2345 - 7070</p>
                                    </div>
                                    <button class="footer-btn body1">HUBUNGI KAMI</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    </div>

    <!-- CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- End CDN -->

    <!-- Script Js -->
    <script src="../front_assets/js/scripts.js"></script>
    <!-- End script js -->

    <!-- Slick Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Custom -->
    <script src="../front_assets/js/script.js"></script>
</body>
</html>