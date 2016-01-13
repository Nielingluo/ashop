<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Bootstrap Admin Template</title>
    <link href="__CSS__/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
    <!-- <load href="__JS__/jquery.js">  //标签不闭合 随能正常引用 但下面的alert（）不能正常弹出 -->
    <script>
        $(function(){
            $('input[name="username"]').blur(function(){
              //alert(1);
              var username=$(this).val();
              //alert(username);
              $.get('__URL__/checkName',{'username':username},function(data){
                  alert(data);

              });
            });
        });
    </script>

</head>

<body>
    <div class="row">
        <div class="col-md-5 col-md-offset-3">
        	<h1>用户注册页面</h1> 
        	<a href="__ROOT__/index.php/User/index"><input class="btn btn-info btn-sm" type="button"  value="返回首页"></a><br/><br/>
            <form action='__URL__/user_register' method='post' name='myForm'>
                <div class="form-group">
                  <label for="email">邮箱</label>
                  <input type="text" class="form-control" name="email" placeholder="email">
                </div>
                <div class="form-group">
                  <label for="username">用户名</label>
                  <input type="text" class="form-control" name="username" placeholder="username">
                </div>
                <div class="form-group" >
                  <label for="exampleInputPassword1">密码</label>
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="row">
                  <div class="col-lg-8">
                      <div class="form-group" >
                        <label for="exampleInputPassword1">验证码</label>
                        <input type="text" class="form-control" name="code">
                      </div>
                  </div>
                  <div class="col-lg-4">
                      <div class="form-group" style="margin-top:20px;">
                        <img src="__APP__/Public/code" onclick='this.src=this.src+"?"+Math.random()' width="90" height="40"/>
                      </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-default">提交</button>
                <a href="__URL__/index"><button type="button" class="btn btn-default">登陆</button></a>
            </form>
                    
        </div>
    </div>
</body>
</html>