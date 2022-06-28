
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
                <?php
                $args = array(
                    'post_type' => 'slider',
                    'posts_per_page' => 3,

                );
                $i = 1;
                $slider = new WP_Query($args);
                while($slider->have_posts()) : $slider->the_post();
                ?>
                <div class="carousel-item <?php if($i == 1): echo 'active'; endif;?>">

                        <style>
                            .header {
                                position: relative;
                                height: 100vh;
                                min-height: 600px;
                                background-image: url(<?php the_post_thumbnail_url(); ?>);
                                background-size: cover;
                                background-position: center;
                                display: -webkit-box;
                                display: -ms-flexbox;
                                display: -webkit-flex;
                                display: flex;
                                -webkit-box-orient: vertical;
                                -webkit-box-direction: normal;
                                -webkit-flex-direction: column;
                                -ms-flex-direction: column;
                                flex-direction: column;
                            }
                        </style>
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="carousel-title"><?php the_title() ?></h1>
                        <button class="btn btn-primary btn-rounded">Learn More</button>
                    </div>

                </div>
                <?php
                $i++;
                ?>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>

    <div class="infos container mb-4 mb-md-2">
        <div class="title">
            <h6 class="subtitle font-weight-normal">Are locking for</h6>
            <h5>Theme</h5>
            <p class="font-small">Get your desire theme with us.</p>
        </div>
        <div class="socials text-right">
            <div class="row justify-content-between">
                <div class="col">
                    <a class="d-block subtitle"><i class="fa-solid fa-phone"></i> (123) 456-7890</a>
                    <a class="d-block subtitle"><i class="fa-solid fa-envelope"></i>  info@example.com</a>
                </div>
                <div class="col">
                    <h6 class="subtitle font-weight-normal mb-2">Social Media</h6>
                    <div class="social-links">
                        <a href="javascript:void(0)" class="link"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="javascript:void(0)" class="link"><i class="fa-brands fa-twitter"></i></a>
                        <a href="javascript:void(0)" class="link"><i class="fa-brands fa-instagram"></i></a>
                        <a href="javascript:void(0)" class="link"><i class="fa-brands fa-tiktok"></i></a>
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
                <h6 class="xs-font mb-0">THE STORY OF THEME</h6>
                <h3 class="section-title">About Us</h3>
                <?php

                $page_slug ='about-us';
                $page_data = get_page_by_path($page_slug);
                $link = get_permalink( get_page_by_path( $page_slug ) );

                $cont = apply_filters('the_content', $page_data->post_content);

?>

                <p><?php echo wp_trim_words($cont,40,'....')?></p>

                <a href="<?php

                echo $link ?>">Read more...</a>

            </div>
            <div class="col-sm-6 col-md-4 ml-auto">
                <div class="widget">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <div class="infos-wrapper">
                        <h4 class="text-primary">15+</h4>
                        <p>Theme</p>
                    </div>
                </div>
                <div class="widget">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-plug"></i>
                    </div>
                    <div class="infos-wrapper">
                        <h4 class="text-primary">12+</h4>
                        <p>Plugin</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="widget">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-ticket"></i>
                    </div>
                    <div class="infos-wrapper">
                        <h4 class="text-primary">3434+</h4>
                        <p>Support</p>
                    </div>
                </div>
                <div class="widget">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-person-dress"></i>
                    </div>
                    <div class="infos-wrapper">
                        <h4 class="text-primary">180+</h4>
                        <p>Client</p>
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
        <h6 class="xs-font mb-0">Get In Touch.</h6>
        <h3 class="section-title mb-5">Contact Us</h3>

        <div class="row align-items-center justify-content-between">
            <div class="col-md-8 col-lg-7">
<?php
                echo do_shortcode( '[example_form]' );
                ?>
            </div>
            <div class="col-md-4 d-none d-md-block order-1">
                <ul class="list">
                    <li class="list-head">
                        <h6>CONTACT INFO</h6>
                    </li>
                    <li class="list-body">
                        <p class="py-2">Contact us and we'll get back to you within 24 hours.</p>
                        <p class="py-2"><i class="fa-solid fa-location-dot"></i> Kathmandu, Nepal</p>
                        <p class="py-2"><i class="fa-solid fa-envelope"></i> info@example.com</p>
                        <p class="py-2"><i class="fa-solid fa-phone"></i> (123) 456-7890</p>

                    </li>
                </ul>
            </div>
        </div>

        <footer class="footer mt-5 border-top">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6 text-center text-md-left">
                    <p class="mb-0">Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a target="_blank" href="#"></a></p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="social-links">
                        <a href="javascript:void(0)" class="link"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="javascript:void(0)" class="link"><i class="fa-brands fa-twitter"></i></a>
                        <a href="javascript:void(0)" class="link"><i class="fa-brands fa-instagram"></i></a>

                    </div>
                </div>
            </div>
        </footer>
    </div>
</section>



</body>
</html>

