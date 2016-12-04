<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/5
 * Time: 上午10:51
 */
$title=array("health","了解您的健康信息")
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>健康信息 - wesports</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php
    require 'common/common_css.php';
    ?>
</head>

<body>
<div id="page-wrapper">

    <!-- Header -->
    <?php
    require "common/header.inc.php";
    ?>

    <!-- Nav -->
    <?php
    require "common/navigator.php";
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
                            <h2 class="major"><span>身体健康与运动</span></h2>
                            <ul class="divided">
                                <li>
                                    <a href="healthManage-sports.html">运动历史记录</a>
                                </li>
                                <li class="chosen">
                                    <a href="＃">健康管理</a>
                                </li>
                            </ul>
                        </section>

                    </div>
                </div>
                <!--<div class="9u 12u(mobile)">-->
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="content">
                        <!-- Content -->

                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <form class="form-horizontal bodyinfo" role="form" action="" method="post">
                                    <div class="form-group">
                                        <label for="height" class="col-sm-6 control-label">身高(cm)</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="height" placeholder="163">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="weight" class="col-sm-6 control-label">体重(kg)</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="weight" placeholder="50">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="weight" class="col-sm-6 control-label">目标体重(kg)</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="weight" placeholder="25">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-6 col-sm-10">
                                            <input type="submit" value="提交" />
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="bmiRound">
                                    <p class="smallFont">您属于</p>
                                    <p class="bmiType">健康</p>
                                    <p class="smallFont">bmi为 19.2</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                            </div>
                            <div class="box box-solid">
                                <div class="box-header with-border">
                                    <i class="fa fa-text-width"></i>

                                    <h3 class="box-title">健康建议</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <blockquote>
                                        <p>注意合理膳食，加强运动</p>
                                        <small>距离目标体重<b>5KG</b></small>
                                    </blockquote>
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <?php
    require "common/footer.php";
    ?>
</div>

<!-- Scripts -->
<?php
require 'common/common_js.php';
?>
</body>

</html>
