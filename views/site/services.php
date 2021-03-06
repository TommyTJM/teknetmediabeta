<?php
use yii\helpers\Html;
use app\assets\HomeAsset;

/* @var $this yii\web\View */
$this->title = 'Teknet Media, Inc.';

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
        <title>Teknet Media, Inc. - Services</title>

        
        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/ie-fixes.js"></script>
        <link rel="stylesheet" href="css/ie-fixes.css">
        <![endif]-->

        <meta name="description" content="Teknetmedia Inc - Services">

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
         <script>  !function(d,s,id){

             var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
             
            if(!d.getElementById(id)){
                  js=d.createElement(s);
                  js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
                 fjs.parentNode.insertBefore(js,fjs);
                }
            }(document,"script","twitter-wjs");
          
		</script>
        
    </head>
    <body>
    <?php $this->beginBody() ?>

        <div id="wrapper"  >

            <div class="top_wrapper">
                <div class="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-10">

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
                                            <a href="#" target="_blank" class="social-media-icon facebook-icon" data-original-title="facebook">facebook</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon twitter-icon" data-original-title="twitter">twitter</a>
                                        </li>                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="call-us top-bar-block">
                                    <!-- i class="icon-phone"></i -->
                                    <span>
                                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/register">Sign Up </a>
                                    </span>
                                </div>
                                <div class="mail-us top-bar-block">
                                    <!-- i class="icon-email"></i-->                            
                                    <span>
                                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/login">Login</a>
                                    </span>                            
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
                                    <img src="<?php echo $imgLoc;?>images/main_logo.png" alt="Kanzi HTML5 Template"/>
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
                                            <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/index" >
                                                <span class="label-nav">
                                                    Home
                                                </span>
                                            </a>                                          
                                        </li>
                                        <li>
                                            <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/about">
                                                <span class="label-nav">
                                                    About Us
                                                </span>
                                            </a>                                          
                                        </li>
                                        <li>
                                             <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/services" class="activelink">
                                                <span class="label-nav">
                                                    Services
                                                </span>
                                            </a>         
                                        </li>
                                        <li>
                                           <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/contact">
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
                                                <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/index">Home</a>
                                            </li>
                                            <li class="active">Services</li>
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


           
            <div class="body-wrapper">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-12 col-sm-12 animated" 
                                 data-animrepeat="0"
                                 data-speed="1s"
                                 data-delay="0.4s">
                                <h2 class="h2-section-title">Services</h2>
                                <div class="i-section-title">
                                    <i class="icon-cloud">

                                    </i>
                                </div>
                            </div>
                        </div>
                        <div class="space-sep20"></div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4"> 
                                <div class="content-box style5 small  animated"
                                     data-animtype="fadeIn"
                                     data-animrepeat="0"
                                     data-animspeed="1s"
                                     data-animdelay="0.2s"
                                     >
                                     <h4 class="h4-body-title">
                                        <i class="fa fa-film"></i>
 												<strong>Inventory Management </strong> System 
                                    </h4>
                                    <div class="content-box-text">
									The process of managing and locating object or materials can be a tremendous effort.
									We provide innovative solutions to handle your inventory. 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4"> 
                                <div class="content-box style5 small  animated"
                                     data-animtype="fadeIn"
                                     data-animrepeat="0"
                                     data-animspeed="1s"
                                     data-animdelay="0.2s"
                                     >
                                    <h4 class="h4-body-title">
                                        <i class="icon-ipad"></i>
                                        <strong>Asset Tracking </strong> Solutions  
                                    </h4>
                                    <div class="content-box-text">
                                       Track your assets with our top of line RFID solution.
                                       Record the location and usage of the assets and generate various reports.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4"> 
                                <div class="content-box style5 small  animated"
                                     data-animtype="fadeIn"
                                     data-animrepeat="0"
                                     data-animspeed="1s"
                                     data-animdelay="0.2s"
                                     >
                                    <h4 class="h4-body-title">
                                        <i class="icon-painting-roll-streamline"></i>
                                         <strong>Workflow </strong> Management   
                                    </h4>
                                    <div class="content-box-text">
                                       We provide quality workflow management systems that deals with routine or repetitive processes, reusable and re-applicable in other aspects or 
                                       departments of an organization. It allows  management to have a means of measuring and predicting the timelines of their production processes

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="space-sep40"></div>

                        <div class="row">
                        <div class="col-md-4 col-sm-4"> 
                                <div class="content-box style5 small  animated"
                                     data-animtype="fadeIn"
                                     data-animrepeat="0"
                                     data-animspeed="1s"
                                     data-animdelay="0.2s"
                                     >
                                    <h4 class="h4-body-title">
                                        <i class="icon-ipad"></i>
                                        <strong>CRM </strong> Solutions  
                                    </h4>
                                    <div class="content-box-text">
                                       Teknet Media offers Microsoft Dynamics CRM user adoption for small business.
                                        Our expert staff make the transition to Dynamics CRM a seamless process.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4"> 
                                <div class="content-box style5 small  animated"
                                     data-animtype="fadeIn"
                                     data-animrepeat="0"
                                     data-animspeed="1s"
                                     data-animdelay="0.2s"
                                     >
                                       <h4 class="h4-body-title">
		                                        <i class="icon-eye"></i>
                                                <strong>Ad-hoc </strong> Reporting                                                
                                            </h4>
                                            <div class="content-box-text">
                                                  Our ad-hoc reporting goal is to empower end-users to query company data, without IT 
                                                  creating a myriad of reports.
                                            </div> 
                                    
                                </div>
                            </div>                          
                            <div class="col-md-4 col-sm-4"> 
                                <div class="content-box style5 small  animated"
                                     data-animtype="fadeIn"
                                     data-animrepeat="0"
                                     data-animspeed="1s"
                                     data-animdelay="0.2s"
                                     >
                                     <h4 class="h4-body-title">
                                        <i class="icon-eye"></i>
                                        <strong>Custom </strong> Deveploment  
                                    </h4>
                                    <div class="content-box-text">
                                        We solve business challenges using enterprise-level custom software development solutions. Our end-to-end software development services  
                                        include expert strategic technology consulting and development all the way through to launch, production support and marketing.
                                    </div>
                                </div>
                            </div>
                        </div>         
                        <div class="space-sep40"></div>
                        
                        <div style=" width: 720; padding:4%; border:3px #3357A3 solid; float:center; margin-bottom:15px;">
						<h1 style="margin: 0px; padding: 0px 0px 15px; font-family:'Open Sans', Arial; font-size: 24px; color: #3357A3; line-height: normal; font-weight:100;">Our Process Analysis</h1>
								<p>Improving your logistics process is our business. With our experience in the industry. 
								Using our extensive warehouse and inventory management experience, our designated professionals
								 will spend time to review and evaluate the current process used to conduct daily operations.  								
								  <br /><br />   			
								</p>
								
								<div style="text-align:center;">
								<img src="<?php echo $imgLoc;?>images/processimage.png"  border="0" alt="visual-logistics-consulting-warehouse-management" height="150" width="800" style="border: 0px;" />
								
								</div>
								<br/>
							<div style="font-size: 28px; text-align: center; font-family: 'Open Sans', Arial; color: #04244d; padding: 10px 20px 25px 20px; float:center font-weight:100;">Strengthening your technology! 
							</div>
						    
						    <p><br /> After completing the assessment, we will plan and strategize on improvements based on the information
								   gathered using proven methods and successful process enhancements.
								    These improvements will be compiled into a proposal which we will present
								     to you as process recommendations ensuring your future success. .
							</p>
						</div>
                        
                        
                    </div>
					
					
                     <div class="container">
                       
                    </div>
                </div>        
                <div class="testimonial-big">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-sm-10">
                                <div class="testimonial-big-text animated" 
                                     data-animrepeat="1"
                                     data-speed="1s"
                                     data-delay="0s">
                                    Customizing and developing applications can drain IT budgets and resources. Our flexible development methods provide scalable solutions that address short-term business
                                    requirements and long-term strategic growth objectives.
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div><!--.content-wrapper end -->
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
                                            <p>We have over 10 years of logistic technology experience. Listening to our clients and delivering quality software
                                               is the cornerstone of our success.</p>
                                            <p>We deliver flexible, scalable solutions that simultaneously address short-term business requirements and long-term
                                               strategic growth objectives</p>
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
                              			<a class="twitter-timeline" href="https://twitter.com/TeknetI" data-widget-id="594938586790764544">Tweets by @TeknetI</a>
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
                                                <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/about">About Us</a>
                                            </li>
                                            <li>
                                                 <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/services">Servies</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/contact">Contact Us</a>
                                            </li>                                             
                                            <li>
                                                <a href="http://www.logisticsit.com/">Logistics IT Magazine</a>
                                            </li>
                                            <li>
                                                <a href="http://www.enterpriseflorida.com/industries/logistics-distribution/">Florida Logistics</a>
                                            </li>                                                                                     
                                        </ul>
                                    </div>
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
