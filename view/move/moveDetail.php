
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
                        <div class="banner-subtitle-first"><h1><?=$args['move']['name']?></h1></div>
                       </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="main-class-detail">
    <div class="container">
        <div class="row">
            <!--Class Detail Info Start-->
            <div class="col-lg-12">
                <div class="class-detail-content">
                    <div class="class-box-title">
                        <div class="class-box-icon">
                            <img src="assets/images/class-icon1.png" alt="Icon">
                        </div>
                        <h2 class="h2-title"><?=$args['move']['name']?></h2>
                    </div>
                    <div class="class-trainer-review">
                    </div>
                    <div class="class-detail-img wow fadeInUp" data-wow-delay=".5s">
                        <iframe width="100%" height="300px"
							src="<?=$args['move']['media']?>" title="<?=$args['move']['name']?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <p><?=$args['move']['description']?></p>
                </div>
            </div>
            <!--Class Detail Info End-->
        </div>
    </div>
</section>
