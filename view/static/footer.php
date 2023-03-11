<footer class="main-footer">
        <div class="footer-overlay-bg animate-this">
            <img src="assets/images/footer-overlay.png" alt="Overlay">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-box-one">
                        <a href="index.html">
                            <img src="assets/images/logo_footer.png" style="height: 50px !important" alt="Fithub">
                        </a>
                        <p>Spor yapmanın en konforlu yolu</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-box-two">
                        <h3 class="h3-title">Linkler</h3>
                        <div class="line"></div>
                        <ul>
                            <li><a href="index.html">Anasayfa</a></li>
                            <li><a href="about-us.html">Hocalarımız</a></li>
                            <li><a href="class-detail.html">Branşlarımız</a></li>
                            <li><a href="blog-list.html">Hareketler</a></li>
                            <li><a href="contact-us.html">İletişim</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-box-three">
                        <h3 class="h3-title">İletişim</h3>
                        <div class="line"></div>
                        <ul>
                            <li>
                                <div class="footer-contact-icon">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="footer-contact-text">
                                    <span>Şeker mah. 1407.cad Sanalptim</span>
                                </div>
                            </li>
                            <li>
                                <div class="footer-contact-icon">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="footer-contact-text">
                                    <span>0500 000 00 00</span>
                                    <span>0312 300 00 00</span>
                                </div>
                            </li>
                            <li>
                                <div class="footer-contact-icon">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="footer-contact-text">
                                    <span>bilgi@sanalptim.com</span>
                                    <span>satis@sanalptim.com</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-box-four">
                        <h3 class="h3-title">Haberler için Abone Ol</h3>
                        <div class="line"></div>
                        <div class="footer-subscribe-form">
                            <input type="email" name="email" class="form-input subscribe-input" placeholder="E-posta adresi" required="">
                            <button type="submit" class="sec-btn"><i class="fa fa-chevron-right"></i></button>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li><a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <div class="copyright-text">
                            <span>Copyright © 2022 <a href="index.html">sanalptim.com.</a> All rights reserved.</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="copyright-links">
                            <ul>
                                <li><a href="about-us.html">Privacy Policy</a></li>
                                <li><a href="about-us.html">Team &amp; Condition</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer End-->

    <!--Back To Top Start-->
    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
           <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 280.807;"></path>
        </svg>
     </div>
    <!--BAck To Top End-->

    <!-- modal-search-start -->
    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
           <span aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></span>
        </button>
        <div class="modal-dialog" role="document">
           <div class="modal-content">
              <form>
                    <input type="text" placeholder="Search here...">
                    <button>
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
              </form>
           </div>
        </div>
     </div>
     <!-- modal-search-end -->
    
<!-- Jquery JS Link -->
<script src="assets/js/jquery.min.js"></script>

<!-- Bootstrap JS Link -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/popper.min.js"></script>

<!-- Custom JS Link -->
<script src="assets/js/custom.js"></script>

<!-- Slick Slider JS Link -->
<script src="assets/js/slick.min.js"></script>

<!-- Wow Animation JS -->
<script src="assets/js/wow.min.js"></script>

<!--Bg Moving Js-->
<script src="assets/js/bg-moving.js"></script>

<!--Magnific Popup JS-->
<script src="assets/js/magnific-popup.js"></script>
<script src="assets/js/custom-magnific-popup.js"></script>

<!--Progress Bar JS-->
<script src="assets/js/custom-progress-bar.js"></script>

<!--Scroll Count JS-->
<script src="assets/js/custom-scroll-count.js"></script>

<!--BAck To Top JS-->
<script src="assets/js/back-to-top.js"></script>
<?php 
    if (!is_null($script)) {
        echo $script;
    }
?>

</body>
</html>