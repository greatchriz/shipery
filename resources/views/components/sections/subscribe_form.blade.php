<section class="subscribe_form">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h4>Subscribe to our corporate newsletter</h4>
            </div>
            <div class="col-lg-6">
                <form action="php/subscribe.php" class="form-inline" method="post" id="subscribeform">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Enter your email..." />
                    </div>
                    <div class="form-group">
                        <button class="btn" type="submit" id="js-subscribe-btn">
                            Subscribe
                        </button>
                    </div>
                    <div id="js-subscribe-result" class="text-center"
                        data-success-msg="Almost finished. Please check your email and verify."
                        data-error-msg="Oops. Something went wrong."></div>
                </form>
            </div>
        </div>
    </div>
</section>
