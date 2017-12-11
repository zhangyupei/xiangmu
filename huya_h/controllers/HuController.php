<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use DfaFilter\SensitiveHelper;

class HuController extends Controller
{
	public $enableCsrfValidation=false;//在类里面方法外面加上此句话
 

     //展示
    public function actionLogin(){
    	
    	return $this->render("login");
    }

    public function actionLogin_do(){
       $req = \Yii::$app->request;
        $user = $req->post('user');
        $pwd = $req->post('pwd');
        
        $command = \Yii::$app->db->createCommand("SELECT * FROM user WHERE user=$user");
         $pos = $command->queryOne();

         if($pos){
            echo 1;
         }else{
            echo 0;
         }
    }


    //注册页面
    public function actionRegister(){
        return $this->render("register");
    }

    //注册添加
    public function actionRegisteradd(){
        $req = \Yii::$app->request;
        $user = $req->post('user');
        $pwd = $req->post('pwd');

        $res = \Yii::$app->db->createCommand()->insert('user', ['user' => $user,'pwd' => $pwd,])->execute();
        if($res)
        {
              echo 1;
        }else{
            echo 0;
        }
    }


    //后台首页
    public function actionIndex(){
        return $this->render("index");
    }



    


}