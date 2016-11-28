<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/5
 * Time: 上午10:37
 */
$title=array("Account","密码修改");
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>密码设置 - wesports</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php
    require 'includes/commonCss.php';
    ?>
</head>

<body>
<div id="page-wrapper">

    <!-- Header -->
    <?php
    require 'includes/header.inc.php';
    ?>

    <!-- Nav -->
    <?php
    require "includes/navigator.php";
    ?>
    <!-- Main -->
    <div id="main-wrapper">
        <div id="main" class="container">
            <div class="row">
                <!--<div class="3u 12u(mobile)">-->
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="sidebar">

                        <!-- Sidebar -->

                        <!-- Recent Posts -->
                        <section>
                            <h2 class="major"><span>个人界面</span></h2>
                            <ul class="divided">
                                <li class="chosen">
                                    <a href="<?php echo base_url('account_info');?>">帐号设置</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('account_psw')?>">帐号安全</a>
                                </li>

                            </ul>
                        </section>
                    </div>
                </div>
                <!--<div class="9u 12u(mobile)">-->
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="content">
                        <!-- Content -->

                        <div class="page-content">
                            <h3 class="text-center">修改密码</h3>

                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="inputPassword" class="col-sm-2 control-label">当前密码</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="inputPassword">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputNewPassword" class="col-sm-2 control-label">新密码</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="inputNewPassword">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputNewPassword" class="col-sm-2 control-label">再输一次</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="inputNewPassword">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">确定修改</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <?php
        require 'common/footer.php';
        ?>
    </div>

    <!-- Scripts -->
    <?php
    require 'common/common_js.php';
    ?>
</body>

</html>
