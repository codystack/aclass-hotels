<?php
include "./components/header.php";
include "./components/navbar.php";
?>
        <section class="page-title" style="background-image: url(./assets/images/contact.jpg);">
            <div class="auto-container">
                <div class="title-outer text-center">
                    <h1 class="title">Contact Us</h1>
                </div>
            </div>
        </section>
        
        <section class="contact-details">
            <div class="container pt-110 pb-70">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="sec-title">
                            <h2>Feel free to write</h2>
                        </div>
                        <!-- Contact Form -->
                        <form id="contact_form" name="contact_form" action="includes/sendmail.php.html" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input name="form_name" class="form-control" type="text" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <textarea name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
                            </div>
                            <div class="mb-5">
                                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
                                <button type="reset" class="theme-btn btn-style-one bg-theme-color5"><span class="btn-title">Reset</span></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="contact-details__right">
                            <div class="sec-title">
                                <h2>Get in touch with us</h2>
                            </div>
                            <ul class="list-unstyled contact-details__info">
                                <li>
                                    <div class="icon">
                                        <span class="fa-classic fa-light fa-phone-plus"></span>
                                    </div>
                                    <div class="text">
                                        <h6 class="mb-1">Have any question?</h6>
                                        <span>07076809773<br /> 07081042165</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fal fa-envelope"></span>
                                    </div>
                                    <div class="text">
                                        <h6 class="mb-1">Write email</h6>
                                        <span>hello@aclassgardenandsuites.com</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fal fa-location-arrow"></span>
                                    </div>
                                    <div class="text">
                                        <h6 class="mb-1">Visit anytime</h6>
                                        <span>No. 1 A-Class Avenue, Pope John<br /> Paul II Estate, Airport Oba,<br /> Anambra State.</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="map-section">
            <iframe class="map w-100" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        </section>


<?php include "./components/footer.php"; ?>