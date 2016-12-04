<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/5
 * Time: 上午10:51
 */
if($sports[0]!=null){
    $month=date("m",$sports[0]['createdAt']);
}
else
    $month=date("m",now());
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
                            <h2><?php echo $month?>月</h2>
                            <hr/>
                            <?php
                            if ($sports!=null){
                                foreach ($sports as $item){
                                    //算一下月份
                                    if (date("m",$item['createdAt'])!==$month){
                                        $month=date("m",$item['createdAt']);
                                        echo '<h2>'.$month.'月</h2><hr/>';
                                    }
                                    require 'sports/record.php';
                                }
                            }
                            else{
                                echo "当前没有运动记录，要加强锻炼哦~";
                            }
                            ?>
                        </div>
                        <?php require 'common/pagination.php';?>
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
<script>

    // var url="<?php echo base_url('health/json_data');?>";
</script>
<script src="<?php echo base_url('asset/javascript/highcharts.js');?>"></script>
<script src="<?php echo base_url('asset/javascript/speedLineChart.js');?>"></script>

</body>

</html>
