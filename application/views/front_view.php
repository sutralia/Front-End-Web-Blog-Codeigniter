<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog Post | Metro Creative Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="<?php echo base_url('assets/green/js/jquery.js');?>"></script>
	<link rel='icon' href='css/img/favicon.ico' type='image/ico' />

    <!--[if lt IE 9]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/ie.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('assets/green/css/reset.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/green/css/grid.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/green/css/nivo.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/green/css/custom.css');?>" rel="stylesheet">
</head>

<body>

<div id="page_wrap">

    <header>

       <?php $this->load->view('sidebar'); ?>


        <div class="search-and-misc">

            <form method="post" action="http://www.yuin.us/themes/metro/index.html" class="search-form">

                <input type="text" name="search" placeholder="Search..." required="" class="search-text">
                <input type="submit" value=" " class="search-submit">

            </form>

            <div class="text margin-tb-20">

                Stay In Touch

                <a href="#" class="side-social vimeo"></a>
                <a href="#" class="side-social twitter"></a>
                <a href="#" class="side-social facebook"></a>

            </div>

        </div>

    </header><!-- Left Side ENDS -->

    <div id="subLevel" class="border-color background-color">

        <div id="opener" class="border-left-color border-top-color"><div class="opener-plus"></div></div>
        <script type="text/javascript">console.log('subMenu',<?php echo json_encode($subMenu);?>);</script>
        <?php foreach($subMenu as $subMenu): ?>
             <ul id="<?php echo $subMenu->menu_id; ?>">

                <li><a class="border-color-darker" href="index.html"><?php echo $subMenu->title; ?></a></li>
            </ul>
        <?php endforeach;?>
       
        <!-- <ul id="home">

            <li><a class="border-color-darker" href="index.html">Metro Slideraa</a></li>
            <li><a class="border-color-darker" href="index-normal-slider.html">Normal Slider</a></li>
        </ul>
        <ul id="about">
            <li><a class="border-color-darker" href="aboutus.html">About Us</a></li>
            <li><a class="border-color-darker" href="headers.html">Headers</a></li>
            <li><a class="border-color-darker" href="columns.html">Columns</a></li>
            <li><a class="border-color-darker" href="shortcodes.html">Shortcodes</a></li>
        </ul>
        <ul id="portfolio">
            <li><a class="border-color-darker" href="portfolio.html">Portfolio Style 1</a></li>
            <li><a class="border-color-darker" href="portfolio-full-images.html">Portfolio Style 2</a></li>
            <li><a class="border-color-darker" href="portfolio-with-texts.html">Portfolio Style 3</a></li>
            <li><a class="border-color-darker" href="portfolio-details.html">Portfolio Detail</a></li>
            <li><a class="border-color-darker" href="portfolio-details-slider.html">Portfolio With Slider</a></li>
            <li><a class="border-color-darker" href="portfolio-details-vimeo.html">Portfolio With Vimeo</a></li>
            <li><a class="border-color-darker" href="portfolio-details-youtube.html">Portfolio With Youtube</a></li>
        </ul> -->

    </div><!-- Sub Level ENDS -->

    <div class="rightSide">

        <div class="row">

            <div class="twelve columns">

                <div class="partners-carousel-title background-color">
                    MyBlog
                </div>

                <div class="partners-carousel-images">
                <script type="text/javascript">console.log('listSlide',<?php echo json_encode($subMenu);?>);</script>
                    <?php foreach($listSlide as $listSlide): ?>
                        <img class="an-item" src="<?php echo $listSlide->imgCover ?>" alt="partner" />
                    <?php endforeach; ?>

                   <!--  <img class="an-item" src="photos/partner-1.png" alt="partner" />
                    <img class="an-item" src="photos/partner-2.png" alt="partner" />
                    <img class="an-item" src="photos/partner-3.png" alt="partner" />
                    <img class="an-item" src="photos/partner-4.png" alt="partner" />
                    <img class="an-item" src="photos/partner-5.png" alt="partner" />
                    <img class="an-item" src="photos/partner-1.png" alt="partner" />
                    <img class="an-item" src="photos/partner-2.png" alt="partner" />
                    <img class="an-item" src="photos/partner-3.png" alt="partner" />
                    <img class="an-item" src="photos/partner-4.png" alt="partner" />
 -->
                </div>

                <div class="background-color partners-carousel-controls">

                    <div id="carousel-directioner-prev" class="partners-carousel-control deactive to-left-icon"></div>
                    <div id="carousel-directioner-next" class="partners-carousel-control to-right-icon"></div>

                </div>

            </div>

        </div><!-- Partners Carousel ENDS -->

        <div class="row">

            <div class="three columns">
            <script type="text/javascript">console.log('isi',<?php echo json_encode($sortcutView);?>);</script>
            <?php foreach($sortcutView as $sortcutView): ?>
                <?php if ($sortcutView->id == $detailContent[0]->id) {
                                    $pointer = 'random-blog-item background-color';
                                    $url = '#';
                                }else{
                                    $pointer = 'random-blog-item';
                                    $url = site_url('FrontView/contentSelect/'.$sortcutView->id);
                                    } 
                ?>
                 <div class="<?php echo $pointer; ?>">
                    <img src="<?php echo $sortcutView->imgCover ?>" alt="<?php echo $sortcutView->title ?>" class="random-blog-img">
                    <a href="<?php echo $url; ?>" title="<?php echo $sortcutView->title ?>" class="random-blog-title"><?php echo $sortcutView->title ?></a>
                    <div class="random-blog-descr" style="width: 142px;display: block;text-overflow: ellipsis;word-wrap: break-word;overflow: hidden;max-height: 3.6em;line-height: 1.2;"><?php echo $sortcutView->isiContent ?></div>
                    <div class="random-blog-item-bg background-color"></div>
                </div>
            <?php endforeach ?>
                <!-- <div class="random-blog-item">
                    <img src="photos/random-blog-1.png" alt="random blog post" class="random-blog-img">
                    <a href="blog.html" title="random blog post" class="random-blog-title">Responsive Layout</a>
                    <div class="random-blog-descr">Lorem ipsum dolor sit amet, conse tetur adipisicing...</div>
                    <div class="random-blog-item-bg background-color"></div>
                </div>

                <div class="random-blog-item">
                    <img src="photos/random-blog-2.png" alt="random blog post" class="random-blog-img">
                    <a href="blog.html" title="random blog post" class="random-blog-title">Unique Pages</a>
                    <div class="random-blog-descr">Lorem ipsum dolor sit amet, conse tetur adipisicing...</div>
                    <div class="random-blog-item-bg background-color"></div>
                </div>

                <div class="random-blog-item">
                    <img src="photos/random-blog-3.png" alt="random blog post" class="random-blog-img">
                    <a href="blog.html" title="random blog post" class="random-blog-title">Full Width</a>
                    <div class="random-blog-descr">Lorem ipsum dolor sit amet, conse tetur adipisicing...</div>
                    <div class="random-blog-item-bg background-color"></div>
                </div>

                <div class="random-blog-item background-color">
                    <img src="photos/random-blog-4.png" alt="random blog post" class="random-blog-img">
                    <a href="blog.html" title="random blog post" class="random-blog-title">Seo Friendly Design</a>
                    <div class="random-blog-descr">Lorem ipsum dolor sit amet, conse tetur adipisicing...</div>
                    <div class="random-blog-item-bg background-color"></div>
                </div>

                <div class="random-blog-item">
                    <img src="photos/random-blog-5.png" alt="random blog post" class="random-blog-img">
                    <a href="blog.html" title="random blog post" class="random-blog-title">Metro Design</a>
                    <div class="random-blog-descr">Lorem ipsum dolor sit amet, conse tetur adipisicing...</div>
                    <div class="random-blog-item-bg background-color"></div>
                </div>

                <div class="random-blog-item">
                    <img src="photos/random-blog-1.png" alt="random blog post" class="random-blog-img">
                    <a href="blog.html" title="random blog post" class="random-blog-title">Clean Style</a>
                    <div class="random-blog-descr">Lorem ipsum dolor sit amet, conse tetur adipisicing...</div>
                    <div class="random-blog-item-bg background-color"></div>
                </div>

                <div class="random-blog-item">
                    <img src="photos/random-blog-2.png" alt="random blog post" class="random-blog-img">
                    <a href="blog.html" title="random blog post" class="random-blog-title">HTML5 & CSS3</a>
                    <div class="random-blog-descr">Lorem ipsum dolor sit amet, conse tetur adipisicing...</div>
                    <div class="random-blog-item-bg background-color"></div>
                </div>

                <div class="random-blog-item">
                    <img src="photos/random-blog-3.png" alt="random blog post" class="random-blog-img">
                    <a href="blog.html" title="random blog post" class="random-blog-title">Amazing Sliders</a>
                    <div class="random-blog-descr">Lorem ipsum dolor sit amet, conse tetur adipisicing...</div>
                    <div class="random-blog-item-bg background-color"></div>
                </div>

                <div class="random-blog-item">
                    <img src="photos/random-blog-4.png" alt="random blog post" class="random-blog-img">
                    <a href="blog.html" title="random blog post" class="random-blog-title">Responsive Layout</a>
                    <div class="random-blog-descr">Lorem ipsum dolor sit amet, conse tetur adipisicing...</div>
                    <div class="random-blog-item-bg background-color"></div>
                </div>

                <div class="random-blog-item">
                    <img src="photos/random-blog-2.png" alt="random blog post" class="random-blog-img">
                    <a href="blog.html" title="random blog post" class="random-blog-title">Unique Pages</a>
                    <div class="random-blog-descr">Lorem ipsum dolor sit amet, conse tetur adipisicing...</div>
                    <div class="random-blog-item-bg background-color"></div>
                </div>

                <div class="random-blog-item">
                    <img src="photos/random-blog-3.png" alt="random blog post" class="random-blog-img">
                    <a href="blog.html" title="random blog post" class="random-blog-title">Full Width</a>
                    <div class="random-blog-descr">Lorem ipsum dolor sit amet, conse tetur adipisicing...</div>
                    <div class="random-blog-item-bg background-color"></div>
                </div>

                <div class="random-blog-item">
                    <img src="photos/random-blog-4.png" alt="random blog post" class="random-blog-img">
                    <a href="blog.html" title="random blog post" class="random-blog-title">Seo Friendly Design</a>
                    <div class="random-blog-descr">Lorem ipsum dolor sit amet, conse tetur adipisicing...</div>
                    <div class="random-blog-item-bg background-color"></div>
                </div>
 -->
                <div class="blog-paging">
                    <a class="background-color" href="#">First</a>
                    <a class="background-color" href="#">...</a>

                    <a class="background-color" href="#">6</a>
                    <a class="background-color" href="#">7</a>
                    <a class="background-color" href="#">8</a>

                    <a class="background-color" href="#">...</a>
                    <a class="background-color" href="#">Last</a>
                </div>

            </div>

            <div class="six columns">
               
                <?php 
                    foreach($detailContent as $detailContent){
                        $title = $detailContent->title;
                        $imageUrl = $detailContent->imgCover;
                        $dateTime = $detailContent->dateTime;
                        $isi = $detailContent->isiContent;
                        $sub = $detailContent->subTitle;
                    }
                ?>
                 <script type="text/javascript">console.log('detailContent',<?php echo json_encode($imageUrl);?>);</script>
                <div class="background-color blog-post-title">

                    <a href="blog.html" class="blog-post-link"><?php echo $title; ?></a>

                    <div class="team-member-icons connection-w deactive"></div>

                    <div class="blog-post-date"><?php echo $dateTime; ?></div>

                </div>

                <a href="blog.html" title="<?php echo $title; ?>"><img src="<?php echo $imageUrl; ?>" alt="blog post img" class="blog-post-img"/></a>

                <b><?php echo $sub; ?></b><br><br>

                <p class="text"><?php echo $isi; ?></p>
                <!-- <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in mi ut erat tempus mattis. Nulla sit amet libero id quam fringilla consequat. Vestibulum laoreet est a nulla scelerisque ac accumsan nunc dictum. Donec nibh mauris, aliquet a egestas a, porta eu dolor. Proin gravida dignissim ullamcorper. Ut bibendum, eros id molestie consectetur, elit elit interdum nunc, in tempus sapien dolor sed ante. Sed porta enim at massa facilisis consectetur.
                    <br><br>
                    Ut accumsan nibh vel nulla consectetur ultrices. Etiam turpis libero, pulvinar sed convallis nec, convallis eget diam. Aenean eu lacus ligula, vel molestie nibh. Quisque ultricies massa vel lorem consectetur volutpat. Nunc quis dui nisi. Nunc sit amet felis eu erat convallis ornare. Curabitur cursus, neque in porttitor iaculis, lorem arcu ornare felis, at tempus odio erat quis ligula. Nullam sed eros lorem, sed suscipit ante.
                    <br><br>
                    Donec leo orci, consequat ut cursus ac, pellentesque nec leo. In lectus libero, dictum vitae dapibus at, aliquam sit amet diam. Sed rutrum, nisi quis eleifend gravida, risus eros rutrum nunc, ac vehicula massa lectus nec nisl. Nulla rutrum mauris quis diam adipiscing rutrum. Nam adipiscing libero a metus euismod eget condimentum nulla ultricies.
                    <br><br>
                    Proin venenatis commodo urna sit amet imperdiet. Suspendisse nisi tellus, faucibus id bibendum eu, malesuada ut neque. Ut elit felis, posuere nec cursus quis, facilisis sed ante. Maecenas cursus sagittis facilisis. Nullam ac urna lectus. </p> -->

                <div class="blog-post-comments">

                    <div class="comments-nav">

                        <div id="comments" class="comment-title deactive">Comments</div>
                        <div id="comment-form" class="comment-title">Send a Comment</div>

                        <div class="blog-comments-toggler"></div>

                    </div>

                    <div class="comments">

                        <div class="comment">
                            <script type="text/javascript">console.log('comment',<?php echo json_encode($comment);?>);</script>
                           <?php foreach($comment as $comment): ?>
                            <div class="comment">

                                <img src="<?php echo base_url('assets/green/css/img/content/user1.png');?>" class="comment-poster-pic" alt="comment poster">
                                <div class="name-and-message">
                                    <div class="comment-poster"><?php echo $comment->name; ?></div>
                                    <div class="comment-message" style="width:250px;"><?php echo $comment->commentText; ?></div>
                                </div>

                            </div>
                               
                            
                         <?php endforeach; ?>
                        </div>

                    </div>

                   <form class="comment-form" method="post" action="<?php echo site_url('FrontView/addComment');?>">
                    <input type="hidden" name="contentPost_id" value="<?php echo $detailContent->id;?>" />
                        <input type="text" name="name" class="gray-box-input comment-text" placeholder="Your Name" required="">
                        <input type="input" name="email" class="gray-box-input comment-text" placeholder="Your E-Mail Address (Won't be shared with public)">
                        <textarea name="commentText" class="comment-textarea" placeholder="Your Comment" required=""></textarea>
                        <input type="submit" value="Send Comment" class="background-color gray-box-submit comment-sender">

                    </form>

                </div>

            </div>

            <div class="three columns">

                <div class="title grid">Categories</div>

                <script type="text/javascript">console.log('categories',<?php echo json_encode($categories);?>);</script>
                <ul class="blog-categories">
                    <?php foreach($categories as $categories) : ?>
                        <li><div class="blog-cat-anim background-color"></div><a href="blog.html" title="<?php echo $categories->title; ?>"><?php echo $categories->title; ?></a></li>
                    <?php endforeach; ?>
                    <!-- <li><div class="blog-cat-anim background-color"></div><a href="blog.html" title="blog category">Design</a></li> -->
                    <!-- <li><div class="blog-cat-anim background-color"></div><a href="blog.html" title="blog category">Photography</a></li>
                    <li><div class="blog-cat-anim background-color"></div><a href="blog.html" title="blog category">Videos</a></li>
                    <li><div class="blog-cat-anim background-color"></div><a href="blog.html" title="blog category">Wordpress</a></li>
                    <li><div class="blog-cat-anim background-color"></div><a href="blog.html" title="blog category">Development</a></li>
                    <li><div class="blog-cat-anim background-color"></div><a href="blog.html" title="blog category">Software</a></li>
                    <li><div class="blog-cat-anim background-color"></div><a href="blog.html" title="blog category">Magazines</a></li> -->
                </ul>

                <div class="blog-posts-tab">

                    <div class="comments-nav background-color margin-tb-10">

                        <div id="popular-blogs" class="comment-title deactive">Popular</div>
                        <div id="recent-blogs" class="comment-title">Recent</div>

                    </div>

                    <div class="popular-blogs">
                        <?php foreach($popularPost as $popularPost): ?>
                             <?php if ($popularPost->id == $detailContent->id) {
                                $url = '#';
                            } else{
                                $url= site_url('FrontView/contentSelect/'.$popularPost->id);
                            }
                            ?>
                            <div class="random-blog-item">
                                <img src="<?php echo $popularPost->imgCover; ?>" alt="<?php echo $popularPost->title; ?>" class="random-blog-img">
                                <a href="<?php echo $url; ?>" title="<?php echo $popularPost->title; ?>" class="random-blog-title"><?php echo $popularPost->title; ?></a>
                                <div class="random-blog-descr" style="width: 142px;display: block;text-overflow: ellipsis;word-wrap: break-word;overflow: hidden;max-height: 3.6em;line-height: 1.2;"><?php echo $popularPost->isiContent; ?></div>
                                <div class="random-blog-item-bg background-color"></div>
                            </div>
                        <?php endforeach; ?>
                         <div class="random-blog-item" style="margin-top: -9px;width: 202px;background: #0AA!important;">
                           <a href="#" class="random-blog-title">see all</a>
                           <!-- <span style="font-size: small;font-style: italic;">see all</span> -->
                        </div>

                       <!--  <div class="random-blog-item">
                            <img src="photos/random-blog-1.png" alt="random blog post" class="random-blog-img">
                            <a href="blog.html" title="random blog post" class="random-blog-title">Responsive Layout</a>
                            <div class="random-blog-descr">Lorem ipsum dolor sit amet, conse tetur adipisicing...</div>
                            <div class="random-blog-item-bg background-color"></div>
                        </div>

                        <div class="random-blog-item">
                            <img src="photos/random-blog-2.png" alt="random blog post" class="random-blog-img">
                            <a href="blog.html" title="random blog post" class="random-blog-title">Unique Pages</a>
                            <div class="random-blog-descr">Lorem ipsum dolor sit amet, conse tetur adipisicing...</div>
                            <div class="random-blog-item-bg background-color"></div>
                        </div>

                        <div class="random-blog-item">
                            <img src="photos/random-blog-3.png" alt="random blog post" class="random-blog-img">
                            <a href="blog.html" title="random blog post" class="random-blog-title">Full Width</a>
                            <div class="random-blog-descr">Lorem ipsum dolor sit amet, conse tetur adipisicing...</div>
                            <div class="random-blog-item-bg background-color"></div>
                        </div>
 -->
                    </div>

                    <div class="recent-blogs">
                        <?php foreach($recentPost as $recentPost): ?>
                             <?php if ($recentPost->id == $detailContent->id) {
                                $url = '#';
                            } else{
                                $url= site_url('FrontView/contentSelect/'.$recentPost->id);
                            }
                            ?>
                            <div class="random-blog-item">
                                <img src="<?php echo $recentPost->imgCover; ?>" alt="<?php echo $recentPost->title; ?>" class="random-blog-img">
                                <a href="<?php echo $url; ?>" title="<?php echo $recentPost->title; ?>" class="random-blog-title"><?php echo $recentPost->title; ?></a>
                                <div class="random-blog-descr" style="width: 142px;display: block;text-overflow: ellipsis;word-wrap: break-word;overflow: hidden;max-height: 3.6em;line-height: 1.2;"><?php echo $recentPost->isiContent; ?></div>
                                <div class="random-blog-item-bg background-color"></div>
                            </div>
                        <?php endforeach; ?>
                         <div class="random-blog-item" style="margin-top: -9px;width: 202px;background: #0AA!important;">
                           <a href="#" class="random-blog-title">see all</a>
                           <!-- <span style="font-size: small;font-style: italic;">see all</span> -->
                        </div>

                       <!--  <div class="random-blog-item">
                            <img src="photos/random-blog-4.png" alt="random blog post" class="random-blog-img">
                            <a href="blog.html" title="random blog post" class="random-blog-title">Creativity</a>
                            <div class="random-blog-descr">Lorem ipsum dolor sit amet, conse tetur adipisicing...</div>
                            <div class="random-blog-item-bg background-color"></div>
                        </div>

                        <div class="random-blog-item">
                            <img src="photos/random-blog-5.png" alt="random blog post" class="random-blog-img">
                            <a href="blog.html" title="random blog post" class="random-blog-title">High From the Ground</a>
                            <div class="random-blog-descr">Lorem ipsum dolor sit amet, conse tetur adipisicing...</div>
                            <div class="random-blog-item-bg background-color"></div>
                        </div>

                        <div class="random-blog-item">
                            <img src="photos/random-blog-1.png" alt="random blog post" class="random-blog-img">
                            <a href="blog.html" title="random blog post" class="random-blog-title">Unexpected</a>
                            <div class="random-blog-descr">Lorem ipsum dolor sit amet, conse tetur adipisicing...</div>
                            <div class="random-blog-item-bg background-color"></div>
                        </div>

                        <div class="random-blog-item">
                            <img src="photos/random-blog-2.png" alt="random blog post" class="random-blog-img">
                            <a href="blog.html" title="random blog post" class="random-blog-title">Welcome</a>
                            <div class="random-blog-descr">Lorem ipsum dolor sit amet, conse tetur adipisicing...</div>
                            <div class="random-blog-item-bg background-color"></div>
                        </div> -->

                    </div>

                    <div class="clear"></div>

                </div>

                <div class="title tag-cloud">Tag Cloud</div>

                <div class="tag-list margin-tb-10">
                    <a href="#" title="tag" class="tag-normal">architecture</a>
                    <a href="#" title="tag" class="tag-medium tag-bold">art</a>
                    <a href="#" title="tag" class="tag-bigger">autumn</a>
                    <a href="#" title="tag" class="tag-biggest color tag-bold">band</a>
                    <a href="#" title="tag" class="tag-normal">barcelona</a>
                    <a href="#" title="tag" class="tag-medium tag-bold">HTML5</a>
                    <a href="#" title="tag" class="tag-bigger">css3</a>
                    <a href="#" title="tag" class="tag-biggest color tag-bold">web master</a>
                    <a href="#" title="tag" class="tag-bigger">photoshop</a>
                    <a href="#" title="tag" class="tag-biggest color tag-bold">Fireworks</a>
                    <a href="#" title="tag" class="tag-normal">awasome template</a>
                    <a href="#" title="tag" class="tag-medium tag-bold">themeforest</a>
                    <a href="#" title="tag" class="tag-biggest tag-bold color">envato</a>
                    <a href="#" title="tag" class="tag-biggest tag-bold">coding</a>
                </div>

            </div>

        </div>


        <div class="row footer background-color">

            <div class="twelve columns">

                <div class="footer-menu">
                <?php foreach($menuFooter as $menuFooter): ?>
                     <a href="index.html" class="left" title="<?php echo $menu->title; ?>"><?php echo $menuFooter->title ?></a>
                <?php endforeach; ?>
                  <!--   <a href="index.html" class="left" title="Home">Home</a>
                    <a href="aboutus.html" class="left" title="About Us">About Us</a>
                    <a href="services.html" class="left" title="Services">Services</a>
                    <a href="portfolio-full-images.html" class="left" title="Solutions">Solutions</a>
                    <a href="portfolio.html" class="left" title="Portfolio">Portfolio</a>
                    <a href="blog.html" class="left" title="Blog">Blog</a>

                    <a href="portfolio-with-texts.html" class="right" title="Portfolio 3">Portfolio 3</a>
                    <a href="contactus.html" class="right" title="Contact Us">Contact Us</a> -->

                </div>

            </div>

        </div>

    </div><!-- RightSide ENDS -->

</div><!-- Page Wrap ENDS -->

<div id="toTop"></div>

<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url('assets/green/js/isotope.js');?>"></script>

<script src="<?php echo base_url('assets/green/js/caroufredsel.js');?>"></script>
<script src="<?php echo base_url('assets/green/js/nivo.js');?>"></script>
<script src="<?php echo base_url('assets/green/js/jquery.mousewheel.js');?>"></script>
<script src="<?php echo base_url('assets/green/js/tinyscrollbar.js');?>"></script>
<script src="<?php echo base_url('assets/green/js/custom.js');?>"></script>
<!--[if lte IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->
</body>
</html>