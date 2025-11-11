<?php
include "./components/header.php";
include "./components/navbar.php";
?>
	<section class="blog-details pt-120 pb-120">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-7 product-details rd-page">
                    <div class="testimonials position-relative overflow-hidden mb-30 position-relative">
                        <div class="swiper-container room-details-slider-content">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="w-100" src="./assets/images/resource/room-1.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100" src="./assets/images/resource/room-2.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100" src="./assets/images/resource/room-4.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="w-100" src="./assets/images/resource/room-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="swiper-container rdetails-thumbs mt-10">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide small-thumb"><img src="./assets/images/resource/room-1.jpg" alt=""/></div>
                                <div class="swiper-slide small-thumb"><img src="./assets/images/resource/room-2.jpg" alt=""/></div>
                                <div class="swiper-slide small-thumb"><img src="./assets/images/resource/room-4.jpg" alt=""/></div>
                                <div class="swiper-slide small-thumb"><img src="./assets/images/resource/room-1.jpg" alt=""/></div>
                            </div>
                        </div>
                    </div>

                    <div class="room-details__left">
                        <div class="room-heading">
                            <h3 class="title mb-4">Royal</h3>
                            <div class="text">40-inch LED TV / Mini bar / Non-smoking / USB charging</div>
                            <ul class="kodelisting-room-basic-info g-3">
                                <li><i class="fa-classic fat fa-users"></i> <span class="csrbi-text">2 Guests</span></li>
                                <li><i class="fa-classic fa-thin fa-bed-front fa-fw"></i> <span class="csrbi-text">2 Bed</span></li>
                                <li><i class="fa-classic fa-thin fa-bath fa-fw"></i> <span class="csrbi-text">2 Bathroom</span></li>
                            </ul>
                        </div>
                    </div>
					<div class="room-details__left">
						<div class="wrapper">
							<h4>Description</h4>
							<p class="text">Step into the Royal Room, where elegance and comfort come together in perfect harmony. Beautifully furnished and tastefully decorated, this room offers a serene retreat designed for relaxation and indulgence. Enjoy the warmth of soft lighting, a cozy king-sized bed, and thoughtfully selected amenities that reflect true royal comfort. Ideal for couples or guests seeking a touch of sophistication, the Royal Room delivers a memorable experience that feels both intimate and grand.</p>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-5">
					<div class="sidebar">
						<div class="kodelisting-room-booking mb-30">
                            <div class="kodelisting-room-booking-wrap">
                                <div class="room-booking-title">
                                    <h5 class="title">₦20,000/night</h5>
                                </div>
                                <form class="reservation-form">
                                    <div class="mb-3 mt-2">
                                        <input name="form_botcheck" class="form-control" type="hidden" value="">
                                        <a href="https://wa.me/+2347076809773?text=Hello,%20I%20would%20like%20to%20book%20the%20Royal%20room.%20" target="_blank" class="theme-btn btn-style-one w-100">
                                            <span class="btn-title">Book Now</span>
                                        </a>
                                    </div>
                                </form>
                            </div>
						</div>

						<div class="sidebar__single sidebar__post">
							<h3 class="sidebar__title">Compare Room</h3>
							<ul class="sidebar__post-list list-unstyled">
								<li>
									<div class="sidebar__post-image"> <img src="./assets/images/resource/news-info-2.jpg" alt=""> </div>
									<div class="sidebar__post-content">
										<h3> <span class="sidebar__post-content-meta"><i class="fas fa-door-open"></i>Executive</span> <a href="">₦25,000/night</a> </h3>
									</div>
								</li>
								<li>
									<div class="sidebar__post-image"> <img src="./assets/images/resource/news-info-1.jpg.png" alt=""> </div>
									<div class="sidebar__post-content">
										<h3> <span class="sidebar__post-content-meta"><i class="fas fa-door-open"></i>Deluxe</span> <a href="">₦15,000/night</a> </h3>
									</div>
								</li>
                                <li>
									<div class="sidebar__post-image"> <img src="./assets/images/resource/news-info-1.jpg.png" alt=""> </div>
									<div class="sidebar__post-content">
										<h3> <span class="sidebar__post-content-meta"><i class="fas fa-door-open"></i>Standard</span> <a href="">₦10,000/night</a>
										</h3>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php include "./components/footer.php"; ?>