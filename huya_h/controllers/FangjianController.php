<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use DfaFilter\SensitiveHelper;

class FangjianController extends Controller
{
	public $enableCsrfValidation=false;//在类里面方法外面加上此句话
 

    //  //展示
    // public function actionShow(){
    // 	 $command = \Yii::$app->db->createCommand('SELECT * FROM fangjian');
    //      $po = $command->queryAll();
    	
    // 	return $this->render("show",['fangjian'=>$po]);
    // }

    //添加分类
    public function actionAdd(){

        $c = \Yii::$app->db->createCommand('SELECT * FROM youxi');
         $po = $c->queryAll();

         $dd = \Yii::$app->db->createCommand('SELECT * FROM fenlei');
         $pop = $dd->queryAll();

    	return $this->render("add",['youxi'=>$po,'fenlei'=>$pop]);
    }

    // public function actionAdd_do(){

    // 	 $req = \Yii::$app->request;
    //      $name = $req->post('name');

    //      $fenlei = $req->post('fenlei');
         
    //       $res = \Yii::$app->db->createCommand()->insert('youxi', ['name' => $name,'fenlei' => $fenlei])->execute();
    //       if($res){
    //       	echo 1;
    //       }else{
    //       	echo 0;
    //       }
    // }


    // //删除
    // public function actionDel(){
    // 	$req = \Yii::$app->request;
    //      $id = $req->post('id');

    //      $res = \Yii::$app->db->createCommand()->delete('youxi', "id = ".$id)->execute();

    //      if($res){
    //      	echo 1;
    //      }else{
    //      	echo 0;
    //      }
    // }

    


}