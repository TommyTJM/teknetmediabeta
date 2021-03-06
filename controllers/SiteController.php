<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\RegisterForm;
use app\models\ContactForm;
use app\models\TkntUsers;
use app\models\TkntNewsLetter;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {

    	
       $loginmodel = new LoginForm();

       if($loginmodel->load(Yii::$app->request->post())) {
             
       			$news = new TkntNewsLetter();
       
       			$news->email = $loginmodel->email;
        
		        try {
		        	
		        	$news->save();
		        	
		        	return $this->render('thankyou');
		        } catch (Exception $e) {
		        	Yii::trace("Error saving User: ".$e->getMessage);
		        }
        
        	} else
        	 {
        		return $this->render('home', [
        			'model' => $loginmodel,
        		]);
        }
        
        //return $this->renderPartial('home',array('model'=>$model));
    }
    
    public function actionNews()
    {
    	$model = new TkntNewsLetter();
    	
    	if($model->load(Yii::$app->request->post()) && $model->validate()) {

    		$model->save();
    	
    		return $this->render('thankyou');
    		
    	} else {
    		
    		$loginmodel = new LoginForm();
    		
    		return $this->render('home', [
    				'model' => $loginmodel,
    		]);
    	}    	
    	
    }
    
    public function actionLogin()
    {
    	//return $this->render('index');
    
    	$model=new LoginForm();
    	return $this->renderPartial('/login/login',array('model'=>$model));
    }

    public function actionRegister()
    {
    	//return $this->render('index');
    
    	$model=new RegisterForm();
    	return $this->renderPartial('/registration/register',array('model'=>$model));
    }    

    /*
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }
    */

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
	    $model = new ContactForm();
	        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
	           
	        	if ($model->validate()) {
	        	        						
					$model->save();				
	        	
	        		return $this->render('thankyou');        	
	        	}             
	            
	            return $this->refresh();
	        } else {
	            return $this->render('contact', [
	                'model' => $model,
	            ]);
	        }
    }

    public function actionServices()
    {
    	//return $this->render('index');
    
    	return $this->render('services');
    }
    
    public function actionAbout()
    {
        //return $this->render('about');
    	$model=new LoginForm();
    	
    	//$loginUser = new TkntUsers();
    	
    	/*
 * @property integer $user_id
 * @property string $first_nm
 * @property string $last_nm
 * @property string $email
 * @property string $password
 * @property string $user_role
 * @property string $user_created
 * @property string $dt_created
 * @property string $user_modified
 * @property string $dt_modified
    	 */
    	
    	//$loginUser->user_id = '';
    	//$loginUser->user_id = '';
    	//$loginUser->save();
    	
        return $this->renderPartial('about',array('model'=>$model));
    }
}
