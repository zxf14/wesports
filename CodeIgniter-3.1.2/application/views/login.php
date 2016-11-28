<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/7
 * Time: 下午7:41
 */
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title></title>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/stylesheet/styles.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/stylesheet/login.css');?>" />
</head>

<body>

<h2><span>by</span> Fanfan</h2>
<div class="bg-panel absolute-Center">
    <div class="login-box">

        <div class="panel-head">
            <p class="login-box-msg">注册</p>
        </div>
        <?php echo form_open('user/login');?>
        <form action="index.html" method="post">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" name="email" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" value="remember"> 记住密码
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="<?php echo base_url('asset/javascript/jquery-1.12.0.min.js');?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url('asset/assets/js/jquery.transit.min.js');?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url('asset/javascript/bg.js');?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url('asset/javascript/bootstrap.min.js');?>" type="text/javascript" charset="utf-8"></script>

</body>

</html>
