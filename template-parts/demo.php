<!-- Start Navbar -->

<div id="navbar" class="navbar_section navbar-expand-lg navbar-light">
    <div id="down_section" class="container">
            <a class="navbar-brand" href="<?php home_url(); ?>">
            <?php echo of_get_option('sitename', 'no-entry'); ?>
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggel-nav"></span>
            <span class="toggel-nav"></span>
            <span class="toggel-nav1"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item m-auto active">
                    <a class="nav-link" href="#" data-scroll="#home">
                        <?php echo of_get_option('home_fixedtop', 'no-entry'); ?>
                        <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item m-auto">
                    <a class="nav-link" href="#" data-scroll="#about">
                    <?php echo of_get_option('about_fixedtop', 'no-entry'); ?>
                    </a>
                </li>
                <li class="nav-item m-auto">
                    <a class="nav-link" href="#" data-scroll="#my-works">
                    <?php echo of_get_option('works_fixedtop',  'no-entry'); ?>
                    </a>
                </li>
            </ul>
            <div class="icon-social">
                <a href="<?php echo of_get_option('insta_fixedtop', 'no-entry') ?>" target="_blank">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="<?php echo of_get_option('fb_fixedtop', 'no-entry') ?>" target="_blank">
                    <i class="fa fa-instagram"></i>
                </a>
                <a id="whatsup" href="" target="_blank">
                    <i class="fa fa-whatsapp"></i>
                </a>
                <span></span>
                <div id="whatsholder" style="display:none">
                    0100-2220-556
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Navbar -->      


<!-- ----------------------------------- START DEMO SECTION ------------------------------ -->
        <section class="demoSec">
            <div class="container">
                <div class="demo-info">
                    <h1 class="demo-head">Pick up a theme</h1>
                    <p>Also we have free pro themes</p>
                </div>
                <div class="your-class">
                  <div>
                    <a href="#">
                        <img class="img-gallery img-thumbnail img-rounded" src="http://localhost/wordpress/wp-content/themes/kateegat-plus-root/img/work1.jpeg">
                      </a>
                    </div>
                  <div>
                    <a href="#">
                        <img class="img-gallery img-thumbnail img-rounded" src="http://localhost/wordpress/wp-content/themes/kateegat-plus-root/img/work2.jpeg">
                      </a>
                    </div>
                    <div>
                    <a href="#">
                        <img class="img-gallery img-thumbnail img-rounded" src="http://localhost/wordpress/wp-content/themes/kateegat-plus-root/img/work3.jpeg">
                      </a>
                    </div>                   
                    <div>
                    <a href="#">
                        <img class="img-gallery img-thumbnail img-rounded" src="http://localhost/wordpress/wp-content/themes/kateegat-plus-root/img/work4.jpeg">
                      </a>
                    </div>  
                    <div>
                    <a href="#">
                        <img class="img-gallery img-thumbnail img-rounded" src="http://localhost/wordpress/wp-content/themes/kateegat-plus-root/img/work5.jpeg">
                      </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ----------------------------------- END DEMO SECTION ------------------------------ -->