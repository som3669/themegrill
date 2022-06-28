
<?php


//if(have_posts()):
//    while (have_posts()):
//        the_post();
//the_title();
//the_content();
//endwhile;
//
//endif;




?>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">



<header id="home" class="header">
    <div class="overlay"></div>

    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="container">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="carousel-title">We Make<br> Creative Design</h1>
                        <button class="btn btn-primary btn-rounded">Learn More</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="carousel-title">We Make <br> Responsive Design</h1>
                        <button class="btn btn-primary btn-rounded">Learn More</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="carousel-title">We Make <br> Simple Design</h1>
                        <button class="btn btn-primary btn-rounded">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="infos container mb-4 mb-md-2">
        <div class="title">
            <h6 class="subtitle font-weight-normal">Are locking for</h6>
            <h5>Lorem inpsum</h5>
            <p class="font-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="socials text-right">
            <div class="row justify-content-between">
                <div class="col">
                    <a class="d-block subtitle"><i class="ti-microphone pr-2"></i> (123) 456-7890</a>
                    <a class="d-block subtitle"><i class="ti-email pr-2"></i> info@website.com</a>
                </div>
                <div class="col">
                    <h6 class="subtitle font-weight-normal mb-2">Social Media</h6>
                    <div class="social-links">
                        <a href="javascript:void(0)" class="link pr-1"><i class="ti-facebook"></i></a>
                        <a href="javascript:void(0)" class="link pr-1"><i class="ti-twitter-alt"></i></a>
                        <a href="javascript:void(0)" class="link pr-1"><i class="ti-google"></i></a>
                        <a href="javascript:void(0)" class="link pr-1"><i class="ti-pinterest-alt"></i></a>
                        <a href="javascript:void(0)" class="link pr-1"><i class="ti-instagram"></i></a>
                        <a href="javascript:void(0)" class="link pr-1"><i class="ti-rss"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="section" id="about">

    <div class="container">

        <div class="row align-items-center mr-auto">
            <div class="col-md-4">
                <h6 class="xs-font mb-0">nobis dolorem sapiente evenie.</h6>
                <h3 class="section-title">About Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum sunt, unde aperiam aliquid quia repudiandae, ex harum quis amet delectus maxime, tempora possimus aut laboriosam magni corrupti labore. Doloremque, sit?</p>

                <a href="javascript:void(0)">Read more...</a>
            </div>
            <div class="col-sm-6 col-md-4 ml-auto">
                <div class="widget">
                    <div class="icon-wrapper">
                        <i class="ti-calendar"></i>
                    </div>
                    <div class="infos-wrapper">
                        <h4 class="text-primary">15+</h4>
                        <p>onsectetur perspiciatis</p>
                    </div>
                </div>
                <div class="widget">
                    <div class="icon-wrapper">
                        <i class="ti-face-smile"></i>
                    </div>
                    <div class="infos-wrapper">
                        <h4 class="text-primary">125+</h4>
                        <p>onsectetur perspiciatis</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="widget">
                    <div class="icon-wrapper">
                        <i class="ti-star"></i>
                    </div>
                    <div class="infos-wrapper">
                        <h4 class="text-primary">3434+</h4>
                        <p>onsectetur perspiciatis</p>
                    </div>
                </div>
                <div class="widget">
                    <div class="icon-wrapper">
                        <i class="ti-user"></i>
                    </div>
                    <div class="infos-wrapper">
                        <h4 class="text-primary">80+</h4>
                        <p>onsectetur perspiciatis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h6 class="xs-font mb-0">Read Our Best Blogs</h6>
        <h3 class="section-title mb-4">Blog Post</h3>

        <div class="row text-center">
<?php
if(have_posts()):
    while (have_posts()):
        the_post();
?>
            <div class="col-lg-4">
                <a href="<?php the_permalink(); ?>" class="card border-0 text-dark">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" >
                    <span class="card-body">
                            <h4 class="title mt-4"><?php the_title(); ?></h4>
                            <p class="xs-font"><?php echo wp_trim_words( get_the_content(), 40, '...' );
                                ?></p>
                        </span>
                </a>
            </div>
            <?php
    endwhile;

endif; ?>


        </div>
    </div>
</section>



<section id="contact" class="section pb-0">

    <div class="container">
        <h6 class="xs-font mb-0">Culpa perferendis excepturi.</h6>
        <h3 class="section-title mb-5">Contact Us</h3>

        <div class="row align-items-center justify-content-between">
            <div class="col-md-8 col-lg-7">

                <form class="contact-form">
                    <div class="form-row">
                        <div class="col form-group">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="col form-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Your Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" value="Send Message">
                    </div>
                </form>
            </div>
            <div class="col-md-4 d-none d-md-block order-1">
                <ul class="list">
                    <li class="list-head">
                        <h6>CONTACT INFO</h6>
                    </li>
                    <li class="list-body">
                        <p class="py-2">Contact us and we'll get back to you within 24 hours.</p>
                        <p class="py-2"><i class="ti-location-pin"></i> 12345 Fake ST NoWhere AB Country</p>
                        <p class="py-2"><i class="ti-email"></i>  info@website.com</p>
                        <p class="py-2"><i class="ti-microphone"></i> (123) 456-7890</p>

                    </li>
                </ul>
            </div>
        </div>

        <footer class="footer mt-5 border-top">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6 text-center text-md-left">
                    <p class="mb-0">Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a target="_blank" href="http://www.devcrud.com">DevCRUD</a></p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="social-links">
                        <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
                        <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
                        <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
                        <a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a>
                        <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
                        <a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</section>

<!-- core  -->
<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

<!-- bootstrap 3 affix -->
<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

<!-- Owl carousel  -->
<script src="assets/vendors/owl-carousel/js/owl.carousel.js"></script>


<!-- Ollie js -->
<script src="assets/js/Ollie.js"></script>

</body>
</html>

