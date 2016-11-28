<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/4
 * Time: 下午5:07
 */
if($activities[0]!==null){
    $month=date("m",$activities[0]['startTime']);
}
else
    $month=date("m",now());
?>
<!DOCTYPE HTML>
<html lang="zh-CN">

<head>
    <title><?php echo $head?></title>
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
    require 'common/header.inc.php';
    ?>
    <!-- Nav -->
    <?php
    require 'common/navigator.php';
    ?>
    <!-- Main -->
    <div id="main-wrapper">
        <div id="main" class="container">
            <div class="row">
                <!--<div class="3u 12u(mobile)">-->
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <?php
                    require 'activityComponents/sliderbar.php';
                    ?>
                </div>
                <!--<div class="9u 12u(mobile)">-->
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="content">
                        <!-- Content -->

                        <div class="box page-content">

                            <h2><?php echo $month?>月</h2>
                            <hr/>
                            <?php
                            if ($activities!=null){
                                foreach ($activities as $item){
                                    if (date("m",$item['startTime'])!==$month){
                                        $month=date("m",$item['startTime']);
                                        echo '<h2>'.$month.'月</h2><hr/>';
                                    }
                                    require 'activityComponents/actItem.php';
                                }
                            }
                            else{
                                echo '当前没有活动';
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
    require 'common/footer.php';
    ?>
</div>

<!-- Scripts -->
<?php
require 'common/common_js.php';
?>
</body>

</html>
