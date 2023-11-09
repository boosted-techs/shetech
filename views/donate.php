<?php
include "views/parts/header.php";
?>
<!-- Donate Now Start -->
   <!--Donate Now Start-->
   <section class="donate-now">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="donate-now__left">
                            <div class="donate-now__enter-donation">
                                <h3 class="donate-now__title">Enter your donation</h3>
                                <div class="donate-now__enter-donation-input">
                                    <select class="selectpicker">
                                        <option>$</option>
                                        <option>₤</option>
                                        <option>¥</option>
                                    </select>
                                    <input type="text" name="donation-money" value=".00">
                                </div>
                            </div>
                            <div class="donate-now__personal-info-box">
                                <h3 class="donate-now__title">Personal info</h3>
                                <form class="donate-now__personal-info-form">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="donate-now__personal-info-input">
                                                <input type="text" placeholder="First name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__personal-info-input">
                                                <input type="text" placeholder="Last name" name="last-name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__personal-info-input">
                                                <input type="email" placeholder="Email address" name="email">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__personal-info-input">
                                                <input type="text" placeholder="Phone" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__personal-info-input">
                                                <input type="text" placeholder="Address" name="Address">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__personal-info-input">
                                                <select class="selectpicker" aria-label="Default select example">
                                                    <option selected>Country</option>
                                                    <option value="1">USA</option>
                                                    <option value="2">England</option>
                                                    <option value="3">Australia</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div
                                                class="donate-now__personal-info-input donate-now__personal-info-message-box">
                                                <textarea name="message" placeholder="Write message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="donate-now__payment-info">
                                <h3 class="donate-now__title">Payment info</h3>
                                <form class="donate-now__payment-info-form">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="donate-now__payment-info-input">
                                                <input type="text" placeholder="Card number" name="number">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__payment-info-input">
                                                <input type="text" placeholder="MM / YY" name="date" id="datepicker">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__payment-info-input">
                                                <input type="text" placeholder="Card code ( CVC )" name="code">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__payment-info-input">
                                                <input type="text" placeholder="Billing address" name="Billing">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__payment-info-input">
                                                <input type="text" placeholder="City" name="City">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="donate-now__payment-info-input">
                                                <select class="selectpicker" aria-label="Default select example">
                                                    <option selected>Country</option>
                                                    <option value="1">USA</option>
                                                    <option value="2">England</option>
                                                    <option value="3">Australia</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="donate-now__payment-info-btn-box">
                                        <button type="submit" class="thm-btn donate-now__payment-info-btn">Donate
                                            now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--Donate Now End-->

<!-- Donate Now End -->


<?php
include "views/parts/footer.php";