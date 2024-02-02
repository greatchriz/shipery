<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta
            http-equiv="X-UA-Compatible"
            content="IE=edge"
        />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1"
        />
        <script src="../../../cdn-cgi/apps/head/OkbNSnEV_PNHTKP2_EYPrFNyZ8Q.js"></script>
        <link
            rel="icon"
            href="/img/fav-icon.png"
            type="image/x-icon"
        />

        <title>Start.ly — Logistics, Cargo & Courier Website Template</title>

        <link
            href="/css/font-awesome.min.css"
            rel="stylesheet"
        />

        <link
            href="/css/bootstrap.min.css"
            rel="stylesheet"
        />

        <link
            href="/vendors/revolution/css/settings.css"
            rel="stylesheet"
        />
        <link
            href="/vendors/revolution/css/layers.css"
            rel="stylesheet"
        />
        <link
            href="/vendors/revolution/css/navigation.css"
            rel="stylesheet"
        />
        <link
            href="/vendors/animate-css/animate.css"
            rel="stylesheet"
        />

        <link
            href="/vendors/owl-carousel/assets/owl.carousel.min.css"
            rel="stylesheet"
        />
        <link
            href="/vendors/magnific-popup/magnific-popup.css"
            rel="stylesheet"
        />
        <link
            href="/css/style.css"
            rel="stylesheet"
        />
    </head>

    <body>
        <header class="main_header_area">
            <div class="header_top">
                <div class="container">
                    <div class="pull-left">
                        <a href="/"><img
                                src="/img/default.svg"
                                width="150px"
                                height="50px"
                                alt=""
                            /></a>
                    </div>
                    <div class="pull-right">
                        <div class="header_c_text">
                            <h5>Call us</h5>
                            <h4>+1 (255) 7899</h4>
                        </div>
                        <div class="header_c_text">
                            <h5>Working Hours</h5>
                            <h4>Mon - Fri 10 to 5pm</h4>
                        </div>
                        <div class="header_c_text">
                            <h5>Email Us</h5>
                            <h4>
                                <a
                                    href="/cdn-cgi/l/email-protection"
                                    class="__cf_email__"
                                    data-cfemail="ec8489808083ac80838b859f98858f9fc28f8381"
                                >support@frieghtly.com</a>
                            </h4>
                        </div>
                        <div class="header_c_text">
                            <a
                                class="quote_btn"
                                href="#"
                            >Request a Quote</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_menu_area">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                            <button
                                type="button"
                                class="navbar-toggle collapsed"
                                data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1"
                                aria-expanded="false"
                            >
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div
                            class="collapse navbar-collapse"
                            id="bs-example-navbar-collapse-1"
                        >
                            <ul class="nav navbar-nav">

                                <x-navigation
                                    :active="request()->routeIs('home')"
                                    navLink="/"
                                    navTitle="Home"
                                />

                                <x-navigation
                                    :active="request()->routeIs('about-us')"
                                    navLink="/about-us"
                                    navTitle="About Us"
                                />

                                <x-navigation
                                    :active="request()->routeIs('contact-us')"
                                    navLink="/contact-us"
                                    navTitle="Contact Us"
                                />

                                <x-navigation
                                    :active="request()->routeIs('tracking')"
                                    navLink="/tracking"
                                    navTitle="Track"
                                />

                                <x-navigation
                                    :active="request()->routeIs('tracking')"
                                    navLink="/login"
                                    navTitle="Login"
                                />

                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <div class="input-group">
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Search here..."
                                        />
                                        <span class="input-group-btn">
                                            <button
                                                class="btn btn-default"
                                                type="button"
                                            >
                                                <i
                                                    class="fa fa-search"
                                                    aria-hidden="true"
                                                ></i>
                                            </button>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        {{ $slot }}



        <footer class="footer_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget about_widget">
                                <img
                                    src="/img/footer-logo.png"
                                    alt=""
                                />
                                <p>
                                    Start.ly Logistics is a mobile first responsive website
                                    template for logistics or transportation.
                                </p>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <aside class="f_widget link_widget">
                                <div class="f_title">
                                    <h3>Quick Links</h3>
                                </div>
                                <ul>
                                    <li><a href="#">INVESTER RELATIONS</a></li>
                                    <li><a href="#">PRESS & MEDIA</a></li>
                                    <li><a href="#">CAREER OPENINGS</a></li>
                                    <li><a href="#">OUR PARTNERS</a></li>
                                    <li><a href="#">LEGAL NOTICE</a></li>
                                    <li><a href="#">COOKIE POLICY</a></li>
                                    <li><a href="#">TERMS & CONDITIONS</a></li>
                                </ul>
                            </aside>
                        </div>

                        <div class="col-md-4 col-xs-6">
                            <aside class="f_widget info_widget">
                                <div class="f_title">
                                    <h3>Contact</h3>
                                </div>
                                <div class="contact_details">
                                    <p>
                                        21 E. Valley Stream Blvd.<br class="info_br" />
                                        Valley Stream, NY 11580, USA
                                    </p>
                                    <p>Phone: <a href="tel:+1-(255)-7899">+1 (255) 7899</a></p>
                                    <p>
                                        Email:
                                        <a href="/cdn-cgi/l/email-protection#8ce4e9e0e0e3cce0e3ebe5fff8e5efffa2efe3e1"><span
                                                class="__cf_email__"
                                                data-cfemail="93fbf6fffffcd3fffcf4fae0e7faf0e0bdf0fcfe"
                                            >support@frieghtly.com</span></a>
                                    </p>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copy_right">
                <div class="container">
                    <h4>
                        Copyright ©
                        <script
                            data-cfasync="false"
                            src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
                        ></script>
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        . All rights reserved.
                    </h4>
                </div>
            </div>
        </footer>

        <script src="/js/jquery-2.2.4.js"></script>

        <script src="/js/bootstrap.min.js"></script>

        <script src="/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

        <script src="/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>

        <script src="/vendors/jvectormap/jvectormap.min.js"></script>
        <script src="/vendors/jvectormap/jvectormap-worldmill.js"></script>
        <script src="/js/locations.js"></script>

        <script src="/js/script.js"></script>

    </body>

</html>
