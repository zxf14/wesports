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
    <meta name="description" content="">
    <?php
    require (__DIR__).'/common/commo_css.php';
    ?>

</head>

<body class="homepage">
<div id="page-wrapper">

    <!-- Header -->
    <?php
    require (__DIR__).'/common/header.inc.php';
    ?>


    <!-- Nav -->
    <?php
    require (__DIR__).'/common/navigator.php';
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
    require (__DIR__).'/common/homeFooter.php';
    ?>
</div>

<!-- Scripts -->

<?php
require (__DIR__).'/common/common_js.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/3.2.3/echarts.common.min.js" type="text/javascript" charset="utf-8"></script>
<script src="dist/javascripts/creatChart.js" type="text/javascript" charset="utf-8"></script>
<script >
    $(document).ready(function () {
        $('#nav li:eq(0)').attr('class','current');
        $('#nav li:eq(0) a').attr('href','#');
    })
</script>
</body>

</html>
