<?php
use yii\helpers\Html;
use app\assets\HomeAsset;

/* @var $this yii\web\View */
$this->title = 'Teknet Media Inc';

$hmBundle = HomeAsset::register($this);

$imgLoc = $hmBundle->baseUrl.'/home/';

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
    <head>
    <?php $this->head()?>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title>Kanzi HTML5 Template</title>

        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/ie-fixes.js"></script>
        <link rel="stylesheet" href="css/ie-fixes.css">
        <![endif]-->

        <meta name="description" content="Kanzi HTML5 Template">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--- This should placed first off all other scripts -->
        
        <link href="/teknetmediabeta/web/home/css/skins/light-blue.css" rel='stylesheet' type='text/css' id="skin-file">

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600' rel='stylesheet' type='text/css'>

        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/respond.js"></script>
        <![endif]-->
    </head>
    <body>
    <?php $this->beginBody() ?>



        <div id="wrapper"  >

         
            <div class="top_wrapper">
                <div class="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="call-us top-bar-block">                                 
                                </div>
                                <div class="mail-us top-bar-block">                                                             
                                </div>

                            </div>
                            <div class="col-sm-5">

                                <!-- Search Box -->
                                <div class="searchbox">
                                    <form action="#" method="get">
                                        <input type="text" class="searchbox-inputtext" id="searchbox-inputtext" name="s" placeholder="Search.."/>
                                        <label class="searchbox-icon" for="searchbox-inputtext"></label>
                                        <input type="submit" class="searchbox-submit" value="Search"/>
                                    </form>
                                </div>
                                <!-- //Search Box// -->
                                <div class="social-icons">
                                    <ul>                                        
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon twitter-icon" data-original-title="twitter">twitter</a>
                                        </li>                                       
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Header -->
                <header id="header">
                    <div class="container">

                        <div class="row header">

                            <!-- Logo -->
                            <div class="col-xs-2 logo">
                                <a href="home-version1.html">
                                    <img src="<?php echo $imgLoc;?>images/main_logo.png" alt="Teknet Meida, Inc."/>
                                </a>
                            </div>
                            <!-- //Logo// -->


                            <!-- Navigation File -->
                            <div class="col-md-10">

                                <!-- Mobile Button Menu -->
                                <div class="mobile-menu-button">
                                    <i class="fa fa-list-ul"></i>
                                </div>
                                <!-- //Mobile Button Menu// -->




                                <nav>
                                    <ul class="navigation">
                                        <li>
                                            <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/index">
                                                <span class="label-nav">
                                                    Home
                                                </span>
                                            </a>                                          
                                        </li>
                                        <li>
                                            <a href="about-us.html">
                                                <span class="label-nav">
                                                    About Us
                                                </span>
                                            </a>
                                            <ul>

                                                <li>
                                                    <a href="sign-up.html">Sign Up </a>
                                                </li>
                                                <li>
                                                    <a href="sign-in.html">Sign In</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="services.html">
                                                <span class="label-nav">
                                                    Services
                                                </span>
                                            </a>         
                                        </li>
                                        <li>
                                            <a href="contact.html">
                                                <span class="label-nav">
                                                    Contact Us
                                                </span>
                                            </a>         
                                        </li>
                                           
                                    </ul>

                                </nav>

                                <!-- Mobile Nav. Container -->
                                <ul class="mobile-nav">
                                    <li class="responsive-searchbox">
                                        <!-- Responsive Nave -->
                                        <form action="#" method="get">
                                            <input type="text" class="searchbox-inputtext" id="searchbox-inputtext-mobile" name="s" />
                                            <button class="icon-search"></button>
                                        </form>
                                        <!-- //Responsive Nave// -->
                                    </li>
                                </ul>
                                <!-- //Mobile Nav. Container// -->
                            </div>
                            <!-- Nav -->

                        </div>



                    </div>
                </header>
                <!-- //Header// -->
                <div class="top-title-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="page-info">
                                    <h1 class="h1-page-title">About Us</h1>

                                    <h2 class="h2-page-desc">
                                        Know The Reasons Behind Our Success
                                    </h2>

                                    <!-- BreadCrumb -->
                                    <div class="breadcrumb-container">
                                        <ol class="breadcrumb">
                                            <li>
                                                <a href="home-version1.html">Home</a>
                                            </li>
                                            <li class="active">About Us</li>
                                        </ol>
                                    </div>
                                    <!-- BreadCrumb -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--.top wrapper end -->

            <div class="loading-container">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>


            <div class="content-wrapper hide-until-loading"><div class="body-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 animated" data-animtype="fadeInUp"
                                 data-animrepeat="0"
                                 data-speed="1s"
                                 data-delay="0.4s">
                                <h2 class="h2-section-title">About Us</h2>
                                <div class="i-section-title">
                                    <i class="icon-feather">

                                    </i>
                                </div>
                            </div>
                        </div>

                        <div class="space-sep20"></div>

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="title-block clearfix">
                                    <h3 class="h3-body-title">Why Choose Us</h3>
                                    <div class="title-seperator"></div>
                                </div>                <p>
                                    Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit 
                                    voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit 
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui.
                                </p>
                                <p>
                                    voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit 
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui.

                                </p>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="cycle-slideshow frame1"
                                     data-cycle-slides="> .slider-img"
                                     data-cycle-swipe="true"
                                     data-cycle-prev=".cycle-prev"
                                     data-cycle-next=".cycle-next"
                                     data-cycle-overlay-fx-out="slideUp"
                                     data-cycle-overlay-fx-in="slideDown"
                                     data-cycle-timeout=0>
                                    <div class="fa fa-chevron-right cycle-next"></div>
                                    <div class="fa fa-chevron-left cycle-prev"></div>

                                    <div class="cycle-pager"></div>

                                    <!-- slider item -->
                                    <div class="slider-img">

                                        <img src="<?php echo $imgLoc;?>images/placeholders/image-placeholder.jpg" alt="image-placeholder.jpg"/>
                                    </div>
                                    <!-- //slider item// -->
                                    <!-- slider item -->
                                    <div class="slider-img">

                                        <img src="<?php echo $imgLoc;?>images/placeholders/image-placeholder.jpg" alt="image-placeholder.jpg"/>
                                    </div>
                                    <!-- //slider item// -->
                                </div>


                            </div>               

                        </div>

                        <div class="space-sep40"></div>


                        <div class="row">

                            <div class="col-md-6 col-sm-6">

                                <div class="title-block clearfix">
                                    <h3 class="h3-body-title">Your Business Solution</h3>
                                    <div class="title-seperator"></div>
                                </div><div class="accordion" data-toggle="off" data-active-index="0">


                                    <div class="accordion-row">

                                        <div class="title">
                                            <div class="open-icon"></div>
                                            <h4>In enim justo, rhoncus ut ?</h4>
                                        </div>
                                        <div class="desc">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut.</div>
                                    </div>


                                    <div class="accordion-row">

                                        <div class="title">
                                            <div class="open-icon"></div>
                                            <h4>Cum sociis natoque penatibus ?</h4>
                                        </div>
                                        <div class="desc">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</div>
                                    </div>


                                    <div class="accordion-row">

                                        <div class="title">
                                            <div class="open-icon"></div>
                                            <h4>In hac habitasse platea dictumst. ?</h4>
                                        </div>
                                        <div class="desc">Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.</div>
                                    </div>


                                </div>            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="title-block clearfix">
                                    <h3 class="h3-body-title">Our Skills</h3>
                                    <div class="title-seperator"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar animated" role="progressbar" aria-valuenow="85%" 
                                         aria-valuemin="0" aria-valuemax="100"
                                         data-animtype="animate-progress"
                                         data-animrepeat="0">

                                        <span class="sr-only">WordPress</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar animated" role="progressbar" aria-valuenow="90%" 
                                         aria-valuemin="0" aria-valuemax="100"
                                         data-animtype="animate-progress"
                                         data-animrepeat="0">

                                        <span class="sr-only">Graphic Design</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar animated" role="progressbar" aria-valuenow="95%" 
                                         aria-valuemin="0" aria-valuemax="100"
                                         data-animtype="animate-progress"
                                         data-animrepeat="0">

                                        <span class="sr-only">Javascript</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar animated" role="progressbar" aria-valuenow="80%" 
                                         aria-valuemin="0" aria-valuemax="100"
                                         data-animtype="animate-progress"
                                         data-animrepeat="0">

                                        <span class="sr-only">HTML5 / CSS3</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="space-sep40"></div>

<!--                         <div class="row">             -->
<!--                             <div class="col-md-12 col-sm-12"> -->
<!--                                 <div class="title-block clearfix"> -->
<!--                                     <h3 class="h3-body-title">Our Team</h3> -->
<!--                                     <div class="title-seperator"></div> -->
<!--                                 </div>                <p> -->
<!--                                     Malesuada tortor, nec scelerisque lorem mattis. Nunc et rutrum consetetur sadipscing elitr, sed diam nonumy at volutpat. Sed consectetur suscipit lorem nunc.adipiscing elit. Integer commodo tristique odio, quis fringilla ligula aliquet ut. Maecenas sed justo varius velit imperdiet bibendum et rutrum. -->
<!--                                 </p> -->
<!--                             </div> -->
<!--                         </div> -->

<!--                         <div class="row"> -->
<!--                             <div class="col-md-3 col-sm-3"> -->
<!--                                 <div class="team-member"> -->
<!--                                     <div class="team-member-image img-overlay"> -->
<!--                                         <img src="images/placeholders/team-placeholder.jpg" alt="Charlie Barns"/> -->

<!--                                         <div class="item-img-overlay"> -->
<!--                                             <div class="social-icons item_img_overlay_content"> -->

<!--                                                 <a href="#" title="ember" target="_blank" class="social-media-icon ember-icon">ember</a> -->
<!--                                                 <a href="#" title="pininterest" target="_blank" class="social-media-icon pininterest-icon">pininterest</a> -->
<!--                                                 <a href="#" title="youtube" target="_blank" class="social-media-icon youtube-icon">youtube</a> -->
<!--                                                 <a href="#" title="zerply" target="_blank" class="social-media-icon zerply-icon">zerply</a> -->


<!--                                             </div> -->

<!--                                         </div> -->
<!--                                     </div> -->
<!--                                     <div class="team-member-content"> -->
<!--                                         <h3 class="team-member-name h3-body-title"> -->
<!--                                             Charlie Barns -->
<!--                                         </h3> -->

<!--                                         <div class="team-member-position"> -->
<!--                                             Project Manager -->
<!--                                         </div> -->
<!--                                         <div class="team-member-short-bio"> -->
<!--                                             At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata  -->
<!--                                             sanctus est Lorem ipsum dolor sit amet -->
<!--                                         </div> -->
<!--                                     </div> -->
<!--                                 </div> -->
<!--                             </div> -->
<!--                             <div class="col-md-3 col-sm-3"> -->
<!--                                 <div class="team-member"> -->
<!--                                     <div class="team-member-image img-overlay"> -->
<!--                                         <img src="images/placeholders/team-placeholder.jpg" alt="Fred Bloggs"/> -->

<!--                                         <div class="item-img-overlay"> -->
<!--                                             <div class="social-icons item_img_overlay_content"> -->

<!--                                                 <a href="#" title="mail" target="_blank" class="social-media-icon mail-icon">mail</a> -->
<!--                                                 <a href="#" title="reddit" target="_blank" class="social-media-icon reddit-icon">reddit</a> -->


<!--                                             </div> -->

<!--                                         </div> -->
<!--                                     </div> -->
<!--                                     <div class="team-member-content"> -->
<!--                                         <h3 class="team-member-name h3-body-title"> -->
<!--                                             Fred Bloggs -->
<!--                                         </h3> -->

<!--                                         <div class="team-member-position"> -->
<!--                                             Web Developer -->
<!--                                         </div> -->
<!--                                         <div class="team-member-short-bio"> -->
<!--                                             At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata  -->
<!--                                             sanctus est Lorem ipsum dolor sit amet -->
<!--                                         </div> -->
<!--                                     </div> -->
<!--                                 </div> -->
<!--                             </div> -->
<!--                             <div class="col-md-3 col-sm-3"> -->
<!--                                 <div class="team-member"> -->
<!--                                     <div class="team-member-image img-overlay"> -->
<!--                                         <img src="images/placeholders/team-placeholder.jpg" alt="Jecson Smith"/> -->

<!--                                         <div class="item-img-overlay"> -->
<!--                                             <div class="social-icons item_img_overlay_content"> -->

<!--                                                 <a href="#" title="blogger" target="_blank" class="social-media-icon blogger-icon">blogger</a> -->
<!--                                                 <a href="#" title="vimeo" target="_blank" class="social-media-icon vimeo-icon">vimeo</a> -->
<!--                                                 <a href="#" title="linkedin" target="_blank" class="social-media-icon linkedin-icon">linkedin</a> -->


<!--                                             </div> -->

<!--                                         </div> -->
<!--                                     </div> -->
<!--                                     <div class="team-member-content"> -->
<!--                                         <h3 class="team-member-name h3-body-title"> -->
<!--                                             Jecson Smith -->
<!--                                         </h3> -->

<!--                                         <div class="team-member-position"> -->
<!--                                             UI Specialist -->
<!--                                         </div> -->
<!--                                         <div class="team-member-short-bio"> -->
<!--                                             At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata  -->
<!--                                             sanctus est Lorem ipsum dolor sit amet -->
<!--                                         </div> -->
<!--                                     </div> -->
<!--                                 </div> -->
<!--                             </div> -->
<!--                             <div class="col-md-3 col-sm-3"> -->
<!--                                 <div class="team-member"> -->
<!--                                     <div class="team-member-image img-overlay"> -->
<!--                                         <img src="images/placeholders/team-placeholder.jpg" alt="John Doe"/> -->

<!--                                         <div class="item-img-overlay"> -->
<!--                                             <div class="social-icons item_img_overlay_content"> -->

<!--                                                 <a href="#" title="instagram" target="_blank" class="social-media-icon instagram-icon">instagram</a> -->
<!--                                                 <a href="#" title="ember" target="_blank" class="social-media-icon ember-icon">ember</a> -->
<!--                                                 <a href="#" title="blogger" target="_blank" class="social-media-icon blogger-icon">blogger</a> -->


<!--                                             </div> -->

<!--                                         </div> -->
<!--                                     </div> -->
<!--                                     <div class="team-member-content"> -->
<!--                                         <h3 class="team-member-name h3-body-title"> -->
<!--                                             John Doe -->
<!--                                         </h3> -->

<!--                                         <div class="team-member-position"> -->
<!--                                             CEO -->
<!--                                         </div> -->
<!--                                         <div class="team-member-short-bio"> -->
<!--                                             At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata  -->
<!--                                             sanctus est Lorem ipsum dolor sit amet -->
<!--                                         </div> -->
<!--                                     </div> -->
<!--                                 </div> -->
<!--                             </div> -->

<!--                         </div> -->


<!--                     </div> -->
                </div>
<!--                 <div class="section-content bottom-body clients-section"> -->
<!--                     <div class="container"> -->

<!--                         <div class="row"> -->
<!--                             <div class="col-md-12 col-sm-12"> -->
<!--                                 <ul class="bottom-body-clients"> -->
<!--                                     <li class="animated" data-animtype="bounceIn" data-animrepeat="0" data-animdelay="0.2s"><img src="images/placeholders/clients/logo1.png" alt="Logo" class="img-responsive client-image" /></li> -->
<!--                                     <li class="animated" data-animtype="bounceIn" data-animrepeat="0" data-animdelay="0.3s"><img src="images/placeholders/clients/logo3.png" alt="Logo" class="img-responsive client-image" /></li> -->
<!--                                     <li class="animated" data-animtype="bounceIn" data-animrepeat="0" data-animdelay="0.4s"><img src="images/placeholders/clients/logo4.png" alt="Logo" class="img-responsive client-image" /></li> -->
<!--                                     <li class="animated" data-animtype="bounceIn" data-animrepeat="0" data-animdelay="0.5s"><img src="images/placeholders/clients/logo2.png" alt="Logo" class="img-responsive client-image" /></li> -->
<!--                                     <li class="animated" data-animtype="bounceIn" data-animrepeat="0" data-animdelay="0.6s"><img src="images/placeholders/clients/logo5.png" alt="Logo" class="img-responsive client-image" /></li> -->
<!--                                 </ul>            </div> -->
<!--                         </div> -->

<!--                     </div> -->

<!--                 </div> -->
            </div>
            
            <!--.content-wrapper end -->
            <footer>
                <div class="footer">

                    <div class="container">
                        <div class="footer-wrapper">
                            <div class="row">


                                <!-- Footer Col. -->
                                <div class="col-md-3 col-sm-3 footer-col">
                                    <div class="footer-content">
                                        <div class="footer-content-logo">
                                            <img src="<?php echo $imgLoc;?>images/main_logo.png" alt=""/>
                                        </div>
                                        <div class="footer-content-text">
                                            <p>Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget
                                                dolor.</p>
                                            <p>Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget
                                                dolor.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- //Footer Col.// -->


                                <!-- Footer Col. -->
                                <div class="col-md-3 col-sm-3 footer-col">
                                    <div class="footer-title">
                                        Recent Tweets
                                    </div>
                                    <div class="footer-content footer-recent-tweets-container">
                                        <ul class="tweetList footer-recent-tweets">
                                            <li class="tweet_content item">
                                                <p>Grab a copy of the popular Boomerang theme for $10 until its next release! </p>
                                                <p class="timestamp">2 days ago</p>
                                            </li>
                                            <li class="tweet_content item">
                                                <p>Newest Blog Awesome post: Stacking Text and Icons <a href="http://t.co/1qRP8K1wjG">Check it</a></p>
                                                <p class="timestamp">4 days ago</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- //Footer Col.// -->


                                <!-- Footer Col. -->
                                <div class="col-md-3 col-sm-3 footer-col">
                                    <div class="footer-title">
                                        Links
                                    </div>
                                    <div class="footer-content">
                                        <ul class="footer-category-list">
                                            <li>
                                                <a href="">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="">Dolor Sit Amet</a>
                                            </li>
                                            <li>
                                                <a href="">Nullam dignissim</a>
                                            </li>
                                            <li>
                                                <a href="">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="">Lorem Ipsum</a>
                                            </li>
                                            <li>
                                                <a href="">Dolor Sit Amet</a>
                                            </li>
                                            <li>
                                                <a href="">Dolor Sit Amet</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- //Footer Col.// -->


                                <!-- Footer Col. -->
                                <div class="col-md-3 col-sm-3 footer-col">

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="copyright">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 center-text">
                                    <div class="copyright-text">&copy; 2012 - 2015 Teknet Media, Inc.</div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div><!-- wrapper end -->
        
    <?php $this->endBody() ?> 
    </body>
</html>

<?php $this->endPage() ?>