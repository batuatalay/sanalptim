
<section class="main-inner-banner jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(<?=$args['branch']['image']?>);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-in-title">
                        <h1 class="h1-title"><?=strtoupper($args['branch']['name'])?></h1>
                    </div>
                    <div class="banner-breadcum">
                        <p style="color: white;"><?=$args['branch']['description']?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner End-->

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