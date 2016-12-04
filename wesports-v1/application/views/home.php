<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/4
 * Time: 上午10:22
 */
$title=array("Wesport","运动社交平台");
?>
<!DOCTYPE HTML>
<html lang="zh-CN">

<head>
    <title>wesport 主页</title>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="运动社交平台">
    <meta name="keywords" content="运动,健康,社交,交友">
    <?php
    require 'common/common_css.php';
    ?>

</head>

<body class="homepage">
<div id="page-wrapper">

    <!-- Header -->
    <?php
    require 'common/header.inc.php';
    ?>


    <!-- Nav -->
    <?php
    require 'common/navigator.php';
    ?>

    <!-- Banner -->
    <div id="banner-wrapper">
        <section id="banner">
            <h2>欢迎来到we sport</h2>
            <p>看看最近您的运动情况</p>
            <a href="#main-wrapper" class="button">Alright let's go</a>
        </section>
    </div>

    <!-- Main -->
    <div id="main-wrapper">
        <div id="main" class="container">
            <div class="row 200%">
                <div class="12u">

                    <!-- daySteps -->
                    <?php
                    require 'indexComponents/daysteps.php';
                    ?>
                </div>
            </div>
            <div class="row 200%">
                <div class="12u">

                    <!-- daySteps -->
                    <?php
                    require 'indexComponents/daychart.php';
                    ?>
                </div>
            </div>
            <div class="row 200%">
                <div class="12u">

                    <!-- awards -->
                    <?php
                    require 'indexComponents/awards.php';
                    ?>
                </div>
            </div>
            <div class="row 200%">
                <div class="12u">

                    <!-- runRecords -->
                    <?php
                    require 'indexComponents/runRecords.php';
                    ?>

                </div>
            </div>
            <div class="row 200%">
                <div class="12u">

                    <!-- sportsAmount -->
                    <?php
                    require 'indexComponents/sportsAmount.php';
                    ?>
                </div>
            </div>
            <div class="row 200%">
                <div class="12u">

                    <!-- rank -->
                    <?php
                    require 'indexComponents/rank.php';
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php
    require 'common/homeFooter.php';
    ?>
</div>

<!-- Scripts -->

<?php
require 'common/common_js.php';
?>
<script src="<?php echo base_url('asset/javascript/highcharts.js')?>" type="text/javascript" charset="utf-8"></script>
<script src="http://cdn.hcharts.cn/highcharts/modules/exporting.js"></script>
<script src="http://cdn.hcharts.cn/highcharts/modules/heatmap.js"></script>
<script src="<?php echo base_url('asset/javascript/stepBlockChart.js')?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url('asset/javascript/runBarChart.js')?>" type="text/javascript" charset="utf-8"></script>
</body>

</html>
