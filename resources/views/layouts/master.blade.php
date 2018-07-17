<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Jide Taiwo</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">


</head>

<body id="top">

<!-- header
================================================== -->
@include('layouts.header')



<!-- home
================================================== -->
<section id="home" class="s-home target-section" data-parallax="scroll"  data-natural-width=2000 data-natural-height=2000 data-position-y=top>

    <div class="shadow-overlay"></div>

    <div id="myCarousel" class="shadow-overlay1 home-content carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <div class="item active">
                <img src="images/slider-1.jpg" alt="Los Angeles">

                <div class="carousel-text">
                    <h3>We Stand Tall</h3>
                    <p>
                        We strive to push the frontiers of client's delight further.
                        Real Estate Agency. Valuation. Management. Advisory Services
                    </p>
                </div>

            </div>

            <div class="item">
                <img src="images/slider-2.jpg" alt="Chicago">

                <div class="carousel-text">
                    <h3>Supporting Dreams Since:</h3>
                    <p> 1980.</p>
                </div>
            </div>

            <div class="item">
                <img src="images/slider-3.jpg" alt="New York">

                <div class="carousel-text">
                    <h3>We Help Our Clients Make Better Business Decisions</h3>
                    <p>Our valuation services offer prompt, accurate and professional services in accordance with Global best practices.</p>
                </div>
            </div>

            <div class="item">
                <img src="images/slider-4.jpg" alt="New York">

                <div class="carousel-text">
                    <h3>Bank On a Name You Can Always Trust</h3>
                    <p>No matter how complex or simple your specifications are, we help clients in finding, buying, letting, marketing and selling residential, commercial, industrial, and properties of all descriptions..</p>
                </div>
            </div>

            <div class="item">
                <img src="images/slider-5.jpg" alt="New York">

                <div class="carousel-text">
                    <h3>Peace of Mind Assured</h3>
                    <p>Nearly four decades of proven track records in property/facility management. We optimize resources for investors and tenants across all types of properties.</p>
                </div>
            </div>

            <div class="item">
                <img src="images/slider-6.jpg" alt="New York">

                <div class="carousel-text">
                </div>
            </div>

        </div>

        <ul class="home-sidelinks">
            <li><a class="smoothscroll" href="#about">About<span>who we are</span></a></li>
            <li><a class="smoothscroll" href="#services">Services<span>what we do</span></a></li>
            <li><a  class="smoothscroll" href="#works">works<span>what we have</span></a></li>
            <li><a  class="smoothscroll" href="#contact">Contact<span>get in touch</span></a></li>

        </ul> <!-- end home-sidelinks -->

        <ul class="home-social">
            <li class="home-social-title">Follow Us</li>
            <li><a href="#0">
                    <i class="fab fa-facebook"></i>
                    <span class="home-social-text">Facebook</span>
                </a></li>
            <li><a href="#0">
                    <i class="fab fa-twitter"></i>
                    <span class="home-social-text">Twitter</span>
                </a></li>
            <li><a href="#0">
                    <i class="fab fa-linkedin"></i>
                    <span class="home-social-text">LinkedIn</span>
                </a></li>
        </ul> <!-- end home-social -->

        <a href="#about" class="home-scroll smoothscroll">
            <span class="home-scroll__text">Scroll Down</span>
            <span class="home-scroll__icon"></span>
        </a> <!-- end home-scroll -->


    </div>
</section> <!-- end s-home -->


<!-- about
================================================== -->
@include('layouts.about')



<!-- services
================================================== -->
@include('layouts.services')



<!-- works
================================================== -->
@include('layouts.works')

<!-- stats
================================================== -->
@include('layouts.stats')



<!-- contact
================================================== -->
@include('layouts.contact')



<!-- photoswipe background
================================================== -->
<div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">

        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                "Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
            "Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>

    </div>

</div> <!-- end photoSwipe background -->


<!-- preloader
================================================== -->
<div id="preloader">
    <div id="loader">
    </div>
</div>


<!-- Java Script
================================================== -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>