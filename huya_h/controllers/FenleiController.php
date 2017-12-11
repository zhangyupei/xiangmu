<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use DfaFilter\SensitiveHelper;

class FenleiController extends Controller
{
	public $enableCsrfValidation=false;//在类里面方法外面加上此句话
 

     //展示
    public function actionShow(){
    	 $command = \Yii::$app->db->createCommand('SELECT * FROM fenlei');
         $po = $command->queryAll();
    	
    	return $this->render("show",['data'=>$po]);
    }

    //添加分类
    public function actionAdd(){
    	return $this->render("add");
    }

    public function actionAdd_do(){
    	 $req = \Yii::$app->request;
         $name = $req->post('name');
         $paixv = $req->post('paixv');
         // echo $name.$paixv;
          $res = \Yii::$app->db->createCommand()->insert('fenlei', ['name' => $name,'paixv' => $paixv])->execute();
          if($res){
          	echo 1;
          }else{
          	echo 0;
          }
    }


    //删除
    public function actionDel(){
    	$req = \Yii::$app->request;
         $id = $req->post('id');

         $res = \Yii::$app->db->createCommand()->delete('fenlei', "id = ".$id)->execute();

         if($res){
         	echo 1;
         }else{
         	echo 0;
         }
    }

    


}