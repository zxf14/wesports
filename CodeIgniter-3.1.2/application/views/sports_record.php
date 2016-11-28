<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/5
 * Time: 上午10:51
 */
$sportItems=array("one","two","three","four");
$title=array("health","了解您的健康信息");
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>运动记录 - wesports</title>
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
                                <li class="chosen">
                                    <a href="＃">运动历史记录</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('health')?>">健康管理</a>
                                </li>
                            </ul>
                        </section>

                    </div>
                </div>
                <!--<div class="9u 12u(mobile)">-->
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="content">
                        <!-- Content -->
                        <!-- Custom Tabs -->
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#speed-chart" data-toggle="tab">速度曲线图</a>
                                </li>
                                <li>
                                    <a href="#speed-table" data-toggle="tab">每公里信息</a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="speed-chart">
                                    <div id="speed-linechart" style="min-width: 400px;height: 600px;">
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="speed-table">
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- nav-tabs-custom -->
                        <div class="box page-content">
                            <h2>11月</h2>
                            <hr/>
                            <?php
                            foreach ($sportItems as $item)
                                require "sports/record.php";

                            ?>

                            <h2>10月</h2>
                            <hr/>
                            <?php
                            foreach ($sportItems as $item)
                                require "sports/record.php";
                            ?>
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
