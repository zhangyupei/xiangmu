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
                        <h3 class="panel-title">注册</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="账号" name="user" id="user">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="密码" name="password" type="password" value="" id="pwd">
                                </div>
								<div class="form-group">
                                    <input class="form-control" placeholder="确认密码" name="password" type="password" value="" id="qpwd">
                                </div>
								
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="#" class="btn btn-lg btn-success btn-block" id="zhu">注册</a>
                               
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
 $("#zhu").on("click",function(){
    var user = $("#user").val();
    var pwd = $("#pwd").val();
    var qpwd = $("#qpwd").val();
        if(pwd==qpwd)
        {
           $.ajax({
              type:"post",
              url:"http://localhost/week9/huya_h/web/index.php?r=hu/registeradd",
              data:{user:user,pwd:pwd},
              success:function(r){
                  if(r==1)
                  {
                    alert("注册成功");
                    location.href = "http://localhost/week9/huya_h/web/index.php?r=hu/index";
                  }else{
                    alert("注册失败");
                  }
              }
           })
        }else{
            alert("两次密码输入不一致");
        }
 })

</script>
</html>
