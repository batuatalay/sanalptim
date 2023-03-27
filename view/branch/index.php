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
                        <div class="banner-subtitle-first"><h1><?=strtoupper($args['branch']['name'])?></h1></div>
                       </div> 
                    </div>
                    <p class="wow fadeInUp" data-wow-delay=".9s"><?=htmlspecialchars_decode($args['branch']['description'])?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Team Start-->
<section class="main-team-in">
    <div class="container">
        <div class="row">
        	<?php foreach ($args['pts'] as $pt) { ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="team-box wow fadeInUp" data-wow-delay=".5s">
                    <div class="team-img-box team-border-two">
                        <div class="team-img">
                            <img src="<?=$pt['image']?>" alt="Trainer">
                        </div>
                    </div>
                    <div class="team-content">
                        <a href="#"><h3 class="h3-title"><?=$pt['name'] .' ' . $pt['surname']?> </h3></a>
                    </div>
                </div>
            </div>

        	<?php } ?>
        </div>
    </div>
</section>