<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
   <div class="navbar navbar-default" id="navbar">
            <script type="text/javascript">
                try{ace.settings.check('navbar' , 'fixed')}catch(e){}
            </script>

            <div class="navbar-container" id="navbar-container">
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <i class="icon-leaf"></i>
                            直播后台管理
                        </small>
                    </a><!-- /.brand -->
                </div><!-- /.navbar-header -->

                <div class="navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
    

                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="http://localhost/week9/huya_h/public/assets/avatars/user.jpg" alt="Jason's Photo" />
                                <span class="user-info">
                                    <small>欢迎光临,</small>
                                    张玉佩
                                </span>

                                <i class="icon-caret-down"></i>
                            </a>

                            <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="#">
                                        <i class="icon-cog"></i>
                                        设置
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-user"></i>
                                        个人资料
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="#">
                                        <i class="icon-off"></i>
                                        退出
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul><!-- /.ace-nav -->
                </div><!-- /.navbar-header -->
            </div><!-- /.container -->
        </div>
        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>

            <div class="main-container-inner">
                <a class="menu-toggler" id="menu-toggler" href="#">
                    <span class="menu-text"></span>
                </a>

                <div class="sidebar" id="sidebar">
                    <script type="text/javascript">
                        try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
                    </script>

                    <div class="sidebar-shortcuts" id="sidebar-shortcuts">

                        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                            <span class="btn btn-success"></span>

                            <span class="btn btn-info"></span>

                            <span class="btn btn-warning"></span>

                            <span class="btn btn-danger"></span>
                        </div>
                    </div><!-- #sidebar-shortcuts -->

                    <ul class="nav nav-list">
                        <li class="active">
                            <a href="http://localhost/week9/huya_h/web/index.php?r=hu/index">
                                <i class="icon-dashboard"></i>
                                <span class="menu-text"> 直播后台控制台 </span>
                            </a>
                        </li>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <li>
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-desktop"></i>
                                <span class="menu-text"> 分类管理 </span>

                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="http://localhost/week9/huya_h/web/index.php?r=fenlei/show">
                                        <i class="icon-double-angle-right"></i>
                                        分类列表
                                    </a>
                                </li>

                                 <li>
                                    <a href="http://localhost/week9/huya_h/web/index.php?r=fenlei/add">
                                        <i class="icon-double-angle-right"></i>
                                        分类添加
                                    </a>
                                </li>

                                
                                
                            </ul>

                             
                        </li>
<!-- //////////////////////////////////////////// ////////////////////////////////////////////////////-->
                        <li>
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-desktop"></i>
                                <span class="menu-text"> 游戏管理 </span>

                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="http://localhost/week9/huya_h/web/index.php?r=youxi/show">
                                        <i class="icon-double-angle-right"></i>
                                        游戏列表
                                    </a>
                                </li>

                                 <li>
                                    <a href="http://localhost/week9/huya_h/web/index.php?r=youxi/add">
                                        <i class="icon-double-angle-right"></i>
                                        游戏添加
                                    </a>
                                </li>

                                
                                
                            </ul>

                             
                        </li>

   <!-- /////////////////////////////////////////////////////////////////////////////////////////////                      -->  <li>
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-desktop"></i>
                                <span class="menu-text"> 房间管理 </span>

                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="http://localhost/week9/huya_h/web/index.php?r=fangjian/show">
                                        <i class="icon-double-angle-right"></i>
                                        房间列表
                                    </a>
                                </li>

                                 <li>
                                    <a href="http://localhost/week9/huya_h/web/index.php?r=fangjian/add">
                                        <i class="icon-double-angle-right"></i>
                                        房间添加
                                    </a>
                                </li>

                                
                                
                            </ul>

                             
                        </li>
<!-- /////////////////////////////////////////////////////////////////////////////////// -->

                          <li>
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-desktop"></i>
                                <span class="menu-text"> 贡献管理 </span>

                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="http://localhost/week9/huya_h/web/index.php?r=/">
                                        <i class="icon-double-angle-right"></i>
                                        贡献列表
                                    </a>
                                </li>

                                 <li>
                                    <a href="http://localhost/week9/huya_h/web/index.php?r=">
                                        <i class="icon-double-angle-right"></i>
                                        贡献添加
                                    </a>
                                </li>

                                
                                
                            </ul>

                             
                        </li>
                        <!-- ///////////////////////////////////////// -->

                            <li>
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-desktop"></i>
                                <span class="menu-text"> 粉丝管理 </span>

                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="http://localhost/week9/huya_h/web/index.php?r=">
                                        <i class="icon-double-angle-right"></i>
                                       粉丝列表
                                    </a>
                                </li>

                                 <li>
                                    <a href="http://localhost/week9/huya_h/web/index.php?r=">
                                        <i class="icon-double-angle-right"></i>
                                        粉丝添加
                                    </a>
                                </li>

                                
                                
                            </ul>

                             
                        </li>
                        <!-- //////////////////////////////////////// -->

                    </ul><!-- /.nav-list -->

                    <div class="sidebar-collapse" id="sidebar-collapse">
                        <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
                    </div>

                    <script type="text/javascript">
                        try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
                    </script>
                </div>

                <div class="main-content">
                    <div class="breadcrumbs" id="breadcrumbs">
                        <script type="text/javascript">
                            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                        </script>

                        <ul class="breadcrumb">
                            <li>
                                <i class="icon-home home-icon"></i>
                                <a href="#">首页</a>
                            </li>
                            <li class="active">后台管理控制台</li>
                        </ul><!-- .breadcrumb -->
                    </div>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
