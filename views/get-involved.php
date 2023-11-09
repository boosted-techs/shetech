<?php
include "parts/header.php";
?>
 <!--Become Volunteer Page Start-->
<!-- Become Volunteer Page Start -->
<section class="become-volunteer-page">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Join Our Community</span>
            <h2 class="section-title__title">Become a Volunteer</h2>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="become-volunteer-page__left">
                    <div class="become-volunteer-page__img">
                        <img src="/assets/images/team/become-volunteer-img-1.jpg" alt="">
                    </div>
                    <div class="become-volunteer-page__content">
                        <h3 class="become-volunteer-page__title">Requirements</h3>
                        <p class="become-volunteer-page__text">We invite you to be part of a meaningful journey towards
                            empowerment and positive change. Here's how you can get involved:</p>
                        <ul class="list-unstyled become-volunteer__points">
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Show enthusiasm and commitment to our mission.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Willingness to collaborate and work as part of a team.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Strong communication and interpersonal skills.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="become-volunteer__call">
                        <div class="become-volunteer__call-icon">
                            <span class="icon-chat"></span>
                        </div>
                        <div class="become-volunteer__call-content">
                            <span>Contact Us</span>
                            <p>
                                <a href="tel:256700632657">+ 256 700 632657</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="become-volunteer-page__right">
                    <form class="become-volunteer-page__form" method="post" action="/volunteer">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="become-volunteer-page__input">
                                    <input type="text" placeholder="Your Name" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="become-volunteer-page__input">
                                    <input type="email" placeholder="Email Address" name="email">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="become-volunteer-page__input">
                                    <input type="text" placeholder="Phone Number" name="phone">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="become-volunteer-page__input">
                                    <input type="text" placeholder="Address" name="Address">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="become-volunteer-page__input">
                                    <input type="text" placeholder="Date of Birth" name="date" id="datepicker">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="become-volunteer-page__input">
                                    <input type="text" placeholder="Occupation" name="Occupation">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="become-volunteer-page__input become-volunteer__message-box">
                                    <textarea name="message" placeholder="Tell us why you want to volunteer"></textarea>
                                </div>
                                <div class="become-volunteer-page__btn-box">
                                    <button type="submit" class="thm-btn become-volunteer-page__btn">Send Application</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Become Volunteer Page End -->

<?php
include "parts/footer.php";
?>