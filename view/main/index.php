    <!--Banner Start-->
    <section class="main-banner">
        <div class="banner-overlay-bg animate-this">
            <img src="assets/images/banner-overlay.png" alt="Overlay">
        </div>
        <div class="banner-blur-bg">
            <img src="assets/images/blur-1.png" alt="Blur">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-title-one">
                        <div class="main-banner-subtitle-box wow fadeInUp" data-wow-delay=".5s">
                           <div class="banner-subtitle-box">
                            <div class="banner-subtitle-first">Sporun</div>
                            <div class="banner-subtitle-second">En Konforlu HALİ</div>
                           </div> 
                        </div>
                        <h1 class="h1-title wow fadeInUp" data-wow-delay=".7s">SanalPTim</h1>
                        <p class="wow fadeInUp" data-wow-delay=".9s">Konfor alanınızdan çıkmadan özel hoca ile çalışmanın en kolay yolu</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-banner-img-one">
                        <img src="assets/images/piti.png" alt="Banner">
                        <div class="banner-circle-first">
                            <img src="assets/images/banner-circle-one.png" alt="Circle">
                        </div>
                        <div class="banner-circle-second">
                            <img src="assets/images/banner-circle-two.png" alt="Circle">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner End-->

    <!--About Us Start-->
    <section class="main-about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img-box wow fadeInLeft" data-wow-delay=".5s">
                        <div class="about-img-one">
                            <img src="assets/images/piti-hi.png" alt="About Us">
                        </div>
                        <div class="about-img-bg"></div>
                        <div class="fitness">
                            <img src="assets/images/fitness.png" alt="Fitness">
                        </div>
                        <div class="about-circle-one">
                            <img src="assets/images/about-circle-one.png" alt="Circle">
                        </div>
                        <div class="about-circle-two">
                            <img src="assets/images/about-circle-two.png" alt="Circle">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-box wow fadeInRight" data-wow-delay=".5s">
                        <div class="about-us-title">
                            <h2 class="h2-title"><?=$args['site']->settings['contentTitle']?></h2>
                        </div>
                        <?=$args['site']->settings['contentMessage']?>
                        <div class="about-text-box">
                            <div class="about-trainer-box">
                                <div class="about-trainer-img">
                                    <img src="assets/images/about-trainer.jpg" class="rounded-circle" alt="Trainer">
                                </div>
                                <div class="about-trainer-name">
                                    <h3 class="h3-title">Sanalptim Ekibi</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Us End-->

    <!--Classes End-->

    <!--Schedule Start-->
    
    <!--Counter Start-->
    <section class="main-counter">
        <div class="container">
            <div class="row counter-bg wow fadeInUp" data-wow-delay=".5s">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-box">
                        <div class="counter-content">
                            <h2 class="h2-title counting-data" data-count="874">15</h2>
                            <div class="counter-text">
                                <img src="assets/images/happy-client.png" alt="Happy Client">
                                <span>Mutlu Danışan</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-box">
                        <div class="counter-content">
                            <h2 class="h2-title counting-data" data-count="987">22</h2>
                            <div class="counter-text">
                                <img src="assets/images/total-clients.png" alt="Total Clients">
                                <span>Kişisel Antrenör</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-box">
                        <div class="counter-content">
                            <h2 class="h2-title counting-data" data-count="587">8</h2>
                            <div class="counter-text">
                                <img src="assets/images/gym-equipment.png" alt="Gym Equipment">
                                <span>Ekipman Sayısı</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-box">
                        <div class="counter-content">
                            <h2 class="h2-title counting-data" data-count="748">220</h2>
                            <div class="counter-text">
                                <img src="assets/images/cup-of-coffee.png" alt="Cup Of Coffee">
                                <span>Fincan Kahve</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Counter End-->

    <!--Team Start-->
    <section class="main-team">
        <div class="team-overlay-bg animate-this">
            <img src="assets/images/team-overlay-bg.png" alt="Overlay">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="subtitle">
                            <h2 class="h2-subtitle">Hocalarımız</h2>
                        </div>
                        <h2 class="h2-title">Sanalptim Ekibi</h2>
                    </div>
                </div>
            </div>
            <div class="row team-slider">
                <?php 
                    foreach ($args['pts'] as $pt) {
                ?>
                <div class="col-lg-3">
                    <div class="team-box wow fadeInUp" data-wow-delay=".5s">
                        <div class="team-img-box team-border-one">
                            <div class="team-img">
                                <img src="<?php echo $pt['image'] ?>" alt="Trainer">
                            </div>
                        </div>
                        <div class="team-content">
                            <a href="team-detail.html"><h3 class="h3-title team-text-color"><?php echo $pt['name'] . " " . $pt['surname'] ?></h3></a>
                        </div>
                    </div>
                </div>

                <?php } ?>
            </div>
        </div>
    </section>
    <!--Team End-->

    <!--Pricing Start-->
    <section class="main-pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pricing-title">
                        <div class="subtitle">
                            <h2 class="h2-subtitle">Ücretlendirme Tablosu</h2>
                        </div>
                        <h2 class="h2-title">Sizin için en uygun planı seçerek spora başlayın</h2>
                    </div>
                </div>
            </div>
            <div class="row pricing-slider">
                <div class="col-lg-4">
                    <div class="pricing-box wow fadeInUp" data-wow-delay=".5s">
                        <div class="pricing-title-box pricing-one">
                            <h3 class="h3-title">Bronz paket</h3>
                            <h2 class="h2-title">99 ₺<span>/Aylık</span></h2>
                        </div>
                        <div class="pricing-content-box">
                            <div class="pricing-content">
                                <div class="pricing-point">
                                    <ul>
                                        <li>
                                            <img src="assets/images/check.png" alt="Check">
                                            <p>Ayda 1  Antrenörle canlı görüşme</p>
                                        </li>
                                        <li>
                                            <img src="assets/images/check.png" alt="Check">
                                            <p>Grup Dersleri</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="contact-us.html" class="sec-btn">Seç</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-box wow fadeInDown" data-wow-delay=".5s">
                        <div class="pricing-title-box pricing-two">
                            <h3 class="h3-title">Gümüş Paket</h3>
                            <h2 class="h2-title">119 ₺<span>/Aylık</span></h2>
                        </div>
                        <div class="pricing-content-box">
                            <div class="pricing-content">
                                <div class="pricing-point">
                                    <ul>
                                        <li>
                                            <img src="assets/images/check.png" alt="Check">
                                            <p>Ayda 2 kez Antrenörle canlı görüşme</p>
                                        </li>
                                        <li>
                                            <img src="assets/images/check.png" alt="Check">
                                            <p>Grup Dersleri</p>
                                        </li>
                                        <li>
                                            <img src="assets/images/check.png" alt="Check">
                                            <p>Piti</p>
                                        </li>
                                        <li>
                                            <img src="assets/images/check.png" alt="Check">
                                            <p>Antrenör Seçimi</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="contact-us.html" class="sec-btn">Seç</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-box wow fadeInUp" data-wow-delay=".5s">
                        <div class="pricing-title-box pricing-three">
                            <h3 class="h3-title">Altın Paket</h3>
                            <h2 class="h2-title">199 ₺<span>/Aylık</span></h2>
                        </div>
                        <div class="pricing-content-box">
                            <div class="pricing-content">
                                <div class="pricing-point">
                                    <ul>
                                        <li>
                                            <img src="assets/images/check.png" alt="Check">
                                            <p>Haftada 1 kez Antrenörle canlı görüşme</p>
                                        </li>
                                        <li>
                                            <img src="assets/images/check.png" alt="Check">
                                            <p>Grup Dersleri</p>
                                        </li>
                                        <li>
                                            <img src="assets/images/check.png" alt="Check">
                                            <p>Piti</p>
                                        </li>
                                        <li>
                                            <img src="assets/images/check.png" alt="Check">
                                            <p>Antrenör Seçimi</p>
                                        </li>
                                        <li>
                                            <img src="assets/images/check.png" alt="Check">
                                            <p>Size özel hazırlanacak diyet planı</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="contact-us.html" class="sec-btn">Seç</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Pricing End-->