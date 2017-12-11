<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css//sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />


</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">虎牙直播后台系统登录</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="账号" name="user" id="user">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="密码" name="pwd" type="password" value="" id="pwd">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">记住密码
										
                                    </label>
									 
                                </div>
								
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="#" class="btn btn-lg btn-success btn-block" id="deng">登录</a>
								<div style="text-align:right;">
									<a href="http://localhost/week9/huya_h/web/index.php?r=hu/register" class="btn ">没有账号密码？点击注册</a>
								</div>
                               
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

<script src="http://localhost/week9/basic/views/site/jquery.1.12.js"></script>
<script>
   $("#deng").on("click",function(){
       var user = $("#user").val();
       var pwd = $("#pwd").val();
        $.ajax({
            type:"post",
            url:"http://localhost/week9/huya_h/web/index.php?r=hu/login_do",
            data:{user:user,pwd:pwd},
            success:function(r){
                if(r==1)
                {
                    location.href="http://localhost/week9/huya_h/web/index.php?r=hu/index";
                }else{
                    alert("输入有误");
                }
            }
        })
   })
</script>

</html>
