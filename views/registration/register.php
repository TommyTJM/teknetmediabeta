<?php
use app\assets\HomeAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
$this->title = 'Teknet Media Inc';

$hmBundle = HomeAsset::register($this);

$imgLoc = $hmBundle->baseUrl.'/home/';

$checkBxLbl = 'I Accept All The&nbsp;<a href="#" class="skin-text">Terms And Services</a>.';

$btnCssStyle = 'width: 126px;';

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
        <title>Teknetmedia Inc - Signup</title>

        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/ie-fixes.js"></script>
        <link rel="stylesheet" href="css/ie-fixes.css">
        <![endif]-->
        
        <link rel="icon" type="image/png" href="<?php echo $imgLoc;?>images/favicon.ico" sizes="32x32" />

        <meta name="description" content="Teknetmedia Inc.">

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
        
        <!-- Override Boostrap Styles -->
        <style type="text/css">
        
        	.form-group {
        		margin-bottom: 0px;
        	}
        	
        	html {
              position: relative;
              min-height: 100%;
            }
        
            body {
              /* Margin bottom by footer height */
              margin-bottom: 60px;
            }
        
            .footer {
              position: absolute;
              bottom: 0;
              width: 100%;
              /* Set the fixed height of the footer here */
              height: 80px;
              background-color: #f5f5f5;
            }
            
        </style>
        
        <script>
          function cancelLogin(element){	  
        	window.location.href = '<?php echo Yii::$app->request->baseUrl; ?>' + '/index.php?r=site/index';
          }
        </script>        
        
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
                                            <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/about">
                                                <span class="label-nav">
                                                    About Us
                                                </span>
                                            </a>
                                            <!-- 
                                            <ul>

                                                <li>
                                                    <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/register">Sign Up </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo Yii::$app->request->baseUrl; ?>/index.php?r=site/login">Sign In</a>
                                                </li>

                                            </ul>
                                            -->
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
                                    <h1 class="h1-page-title">Sign Up</h1>


                                    <!-- BreadCrumb -->
                                    <div class="breadcrumb-container">
                                        <ol class="breadcrumb">
                                            <li>
                                                <a href="home-version1.html">Home</a>
                                            </li>
                                            <li class="active">Sign Up Page</li>
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
                        	<!-- div class="col-md-12 col-sm-12 animated" data-animtype="flipInY" -->
                            <div class="col-md-12 col-sm-12" data-animtype="flipInY"
                                 data-animrepeat="0"
                                 data-speed="1s"
                                 data-delay="0.5s">
                                <h2 class="h2-section-title">Sign Up</h2>

                                <div class="i-section-title">
                                    <i class="icon-users-outline">

                                    </i>
                                </div>

                                <div class="space-sep20"></div>
                            </div>            
                        </div>

                        <div class="row">

                            <div class="col-md-6 col-sm-6 centered">
                                <div class="classic-form">
                                
                                	<!-- Begin Regisration Form -->                                	
                                     
									 <?php
									 $form = ActiveForm::begin([
											'id' => 'RegistrationForm',
											'action'=>'index.php?r=register/save',
											'options'=> ['method' =>'post',
													     'class'=>'form-horizontal',
													     'role'=>'form'],
											'validateOnSubmit'=>false,
											]) 
									?>	                                    
                                    
                                        <div class="form-group">
                                            <label for="name" class="col-sm-3 control-label">Name</label>
                                            <div class="col-sm-9">                                           
	                                            <?= $form->field($model, 'name',['inputOptions'=>['class'=>'form-control',
	                                            						                              'id'=>'name',
	                                            						                              'placeholder'=>'Enter Name',
	                                            						                              'type'=>'text'
	                                            													  ]])->label(false)?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="col-sm-3 control-label">Email</label>
                                            <div class="col-sm-9">
	                                            <?= $form->field($model, 'email',['inputOptions'=>['class'=>'form-control',
	                                            						                              'id'=>'name',
	                                            						                              'placeholder'=>'Enter Email',
	                                            						                              'type'=>'text'
	                                            													  ]])->input('email')->label(false)?>                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="col-sm-3 control-label">Password</label>
                                            <div class="col-sm-9">
	                                            <?= $form->field($model, 'password',['inputOptions'=>['class'=>'form-control',
	                                            						                              'id'=>'password',
	                                            						                              'placeholder'=>'Enter Password',
	                                            						                              'type'=>'password'
	                                            													  ]])->passwordInput()->label(false)?>                                                 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="rptpassword" class="col-sm-3 control-label">Repeat Password</label>
                                            <div class="col-sm-9">
	                                            <?= $form->field($model, 'rptpassword',['inputOptions'=>['class'=>'form-control',
	                                            						                                 'id'=>'rptpassword',
	                                            						                                 'placeholder'=>'Repeat Password',
	                                            						                                 'type'=>'password'
	                                            													     ]])->input('email')->label(false)?>                                                 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <div class="checkbox">
	                                            		<?= $form->field($model, 'acceptTerms')->checkbox(array('label'=>$checkBxLbl,
	                                            						                                   	    'id'=>'acceptTermsChkBx',
	                                            						                                   		'type'=>'checkbox'))?>                                          						                                   		                                                          
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <?= Html::submitButton('Submit', ['class'=> 'btn btn-block btn-primary','style'=>$btnCssStyle]) ;?>                                                
                                                <?= Html::button('Cancel', ['class'=> 'btn btn-block btn-primary','style'=>$btnCssStyle,'onclick'=>'javascript:cancelLogin(this);']) ;?> 
                                            </div>
                                        </div>

									<!-- End Registration Form -->									                                        
                                    
						            <?php ActiveForm::end(); ?>                                                             
                                                       
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!--.content-wrapper end -->                       
            
            <footer>
            	<div class="footer">
                   <div class="copyright">
                     <div class="container">
                      	<div class="center-text">
                           <div class="copyright-text" style="color: white;">&copy; 2015 TeknetMedia</div>
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
