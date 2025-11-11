        <footer class="main-footer footer-style-one">
            <div class="widgets-section">
                <div class="auto-container">
                    <div class="row">
                        <div class="footer-column col-lg-4 col-sm-6">
                            <div class="footer-widget about-widget wow fadeInLeft mb-2">
                                <div class="widget-content">
                                    <div class="logo">
                                        <a href="./"><img src="./assets/images/aclass-logo.svg" width="250px" alt=""></a>
                                    </div>
                                    <div class="text mb-0">Stay in Class. Live in Comfort.<br /> Experience timeless hospitality at A-Class Garden & Suites.</div>
                                </div>
                            </div>
                            <div class="footer-widget widget-social wow fadeInLeft" data-wow-delay="300ms">
                                <div class="widget-content">
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="footer-column col-lg-3 col-sm-6 mb-0 ps-xl-5">
                            <div class="footer-widget links-widget ps-xl-5 wow fadeInLeft" data-wow-delay="200ms">
                                <h4 class="widget-title">Quick Links</h4>
                                <div class="widget-content">
                                    <ul class="user-links">
                                        <li><a href="rooms">Rooms</a></li>
                                        <li><a href="faq">FAQ's</a></li>
                                        <li><a href="services">Services</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="footer-column col-lg-2 col-sm-6 mb-0 ps-xl-4">
                            <div class="footer-widget links-widget ps-xl-4 wow fadeInLeft" data-wow-delay="200ms">
                                <h4 class="widget-title">Company</h4>
                                <div class="widget-content">
                                    <ul class="user-links">
                                        <li><a href="./">Home</a></li>
                                        <li><a href="about">About Us</a></li>
                                        <li><a href="contact">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="footer-column col-lg-3 col-sm-6">
                            <div class="footer-widget info-widget ps-xl-5 ms-xl-5 mb-30 wow fadeInLeft" data-wow-delay="300ms">
                                <h4 class="widget-title">Visit us</h4>
                                <div class="widget-content">
                                    <div class="contact-list">
                                        <div class="inner">
                                            <div class="list-info">1 A-Class Avenue, Pope John Paul II Estate, Airport Oba, Anambra State.</div>
                                            <div class="list-info">07076809773</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-container">
                        <div class="copyright-text">© <script>document.write(new Date().getFullYear());</script> <span>A-Class Garden & Suites.</span> All rights reserved.</div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/slick-animation.min.js"></script>
    <script src="./assets/js/jquery.fancybox.js"></script>
    <script src="./assets/js/wow.js"></script>
    <script src="./assets/js/appear.js"></script>
    <script src="./assets/js/mixitup.js"></script>
    <script src="./assets/js/flatpickr.js"></script>
    <script src="./assets/js/swiper.min.js"></script>
    <script src="./assets/js/gsap.min.js"></script>
    <script src="./assets/js/ScrollTrigger.min.js"></script>
    <script src="./assets/js/SplitText.min.js"></script>
    <script src="./assets/js/splitType.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/script-gsap.js"></script>
    <script src="./assets/js/bxslider.js"></script>

    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/jquery.form.min.js"></script>
    <script src="./assetsjs/custom-form-script.js"></script>

    <script>
        // Background image area start here ***
        $("[data-background").each(function() {
            $(this).css(
                "background-image",
                "url( " + $(this).attr("data-background") + "  )"
            );
        });

        // Background image hover change area start here ***
        $(".service-block-four").hover(function() {
            let newBackground = $(this).data("bg");
            $(".banner-section-four .outer-box")
                .attr("data-background", newBackground)
                .css("background-image", "url(" + newBackground + ")");
        });
    </script>
</body>

</html>