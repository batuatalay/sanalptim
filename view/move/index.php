
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
                        <div class="banner-subtitle-first"><h1>Hareketler</h1></div>
                       </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="main-team-in">
    <div class="container">
        <div class="row">
        	<table id="myTable" class="display">
        		<thead>
        			<tr>
        				<td>Hareket Adı</td>
        				<td>Açıklama</td>
        				<td>Hareket Tipi</td>
        			</tr>
        		</thead>
        		<tbody>
        			<?php foreach ($args['moves'] as $move) { ?>
        				<tr>
        					<td><a href="/move/get/<?=$move['move_key']?>" target="_self"><?=$move['name']?></a></td>
        					<td><?=$move['description']?></td>
        					<td><?=$move['type']?></td>
        				</tr>
        			<?php } ?>
        		</tbody>
        	</table>
        </div>
    </div>
</section>