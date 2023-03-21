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
                        <h1 class="h1-title wow fadeInUp" data-wow-delay=".7s">Çok Yakında Buradayız</h1>
                        <p class="wow fadeInUp" data-wow-delay=".9s">Sizlerle buluşmak için can atıyoruz </p>
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
                        <div class="heart-rate">
                            <span style="color:#fd3d0c;">Kalan Süre</span>
                            <div id="countdown" style="color:white;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner End-->

<script> 
// 10 Nisan 2023 tarihini belirleyin
var countDownDate = new Date("April 10, 2023 00:00:00").getTime();

// Sayaç güncellendiğinde yapılacak işlemler
var x = setInterval(function() {
  
  // Şimdiki zamanı alın
  var now = new Date().getTime();
  
  // Geri sayım tarihine kalan zamanı hesaplayın
  var distance = countDownDate - now;
  
  // Gün, saat, dakika ve saniye cinsinden kalan süreyi hesaplayın
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  // Sayaç div'ini alın
  var countdown = document.getElementById("countdown");
  
  // Sayaçta kalan süreyi gösterin
  countdown.innerHTML = days + " gün " + hours + " saat "
  + minutes + " dakika " + seconds + " saniye ";
  
  // Geri sayım tamamlandıysa, sonucu gösterin ve sayaçı durdurun
  if (distance < 0) {
    clearInterval(x);
    countdown.innerHTML = "Süre doldu!";
  }
}, 1000);

</script>
