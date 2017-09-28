 <div class="logo-container">

            <a id="logo" title="Metro Creative Design" href="index.html"><img src="<?php echo base_url('assets/green/css/img/logo.png');?>" alt="Metro Creative Design"></a>

        </div><!-- Logo Side ENDS -->
        <div>
            <nav>
            <script type="text/javascript">console.log('menu',<?php echo json_encode($menu);?>);</script>
                <ul id="menu">
                    <?php foreach ($menu as $menu): ?>
                        <?php if($menu->isSub == 1){
                            $kodeMenu = '#'.$menu->id;
                            }
                            else{
                            $kodeMenu = $menu->url;
                            }
                        ?>
                        <script type="text/javascript">console.log('kodeMenu',<?php echo json_encode($kodeMenu);?>);</script>
                        <li>
                            <div class="menu-abs-bg background-color"></div>
                            <div class="home-icon menu-specs">
                                <a href="<?php echo $kodeMenu; ?>" title="<?php echo $menu->title; ?>"><?php echo $menu->title;?></a>
                                <span style="margin-right: 71px;"><?php echo $menu->description; ?></span>
                            </div>
                            <ul>

                             <!--    <li><div class="sub-menu-bg background-color"></div><a href="index.html">Metro Slider</a></li>
                                <li><div class="sub-menu-bg background-color"></div><a href="index-normal-slider.html">Normal Slider</a></li> -->
                            </ul>
                        </li>
                    <?php endforeach;?>
                   <!--  <li>
                        <div class="menu-abs-bg background-color"></div>
                        <div class="home-icon menu-specs">
                            <a href="#home" title="Home Page">Home</a>
                            <span>Lorem Ipsum Dolor Sit Amet</span>
                        </div>
                        <ul>
                            <li><div class="sub-menu-bg background-color"></div><a href="index.html">Metro Slider</a></li>
                            <li><div class="sub-menu-bg background-color"></div><a href="index-normal-slider.html">Normal Slider</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="menu-abs-bg background-color"></div>
                        <div class="aboutus-icon menu-specs">
                            <a href="#about" title="About Us">About</a>
                            <span>Praesent volutpat turpis</span>
                        </div>
                        <ul>
                            <li><div class="sub-menu-bg background-color"></div><a href="aboutus.html">About Us</a></li>
                            <li><div class="sub-menu-bg background-color"></div><a href="headers.html">Headers</a></li>
                            <li><div class="sub-menu-bg background-color"></div><a href="columns.html">Columns</a></li>
                            <li><div class="sub-menu-bg background-color"></div><a href="shortcodes.html">Shortcodes</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="menu-abs-bg background-color"></div>
                        <div class="services-icon menu-specs">
                            <a href="services.html" title="Our Services">Services</a>
                            <span>Morbi tincidunt justo sed</span>
                        </div>
                    </li>
                    <li>
                        <div class="menu-abs-bg background-color"></div>
                        <div class="portfolio-icon menu-specs">
                            <a href="#portfolio" title="Our Products">Portfolio</a>
                            <span>Aliquam pharetra rutrum</span>
                        </div>
                        <ul>
                            <li><div class="sub-menu-bg background-color"></div><a href="portfolio.html">Portfolio Style 1</a></li>
                            <li><div class="sub-menu-bg background-color"></div><a href="portfolio-full-images.html">Portfolio Style 2</a></li>
                            <li><div class="sub-menu-bg background-color"></div><a href="portfolio-with-texts.html">Portfolio Style 3</a></li>
                            <li><div class="sub-menu-bg background-color"></div><a href="portfolio-details.html">Portfolio Detail</a></li>
                            <li><div class="sub-menu-bg background-color"></div><a href="portfolio-details-slider.html">Portfolio With Slider</a></li>
                            <li><div class="sub-menu-bg background-color"></div><a href="portfolio-details-vimeo.html">Portfolio With Vimeo</a></li>
                            <li><div class="sub-menu-bg background-color"></div><a href="portfolio-details-youtube.html">Portfolio With Youtube</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="menu-abs-bg background-color"></div>
                        <div class="blog-icon menu-specs">
                            <a href="blog.html" title="Articles From Us">Blog</a>
                            <span>Vivamus sagittis nibh</span>
                        </div>
                    </li>
                    <li>
                        <div class="menu-abs-bg background-color"></div>
                        <div class="contact-icon menu-specs">
                            <a href="contactus.html" title="Keep In Touch">Contact</a>
                            <span>Quisque sed felis eu turpis</span>
                        </div>
                    </li> -->
                </ul><!-- Menu ENDS -->

            </nav><!-- Nav ENDS -->