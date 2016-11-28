<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/4
 * Time: 上午11:30
 */
$pkItems=array("one","two","three","four");
$title=array("ACTIVITIES","参与到更多的活动中去吧");
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>PK - wesports</title>
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
    require 'common/navigator.php'
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

                        <div class="page-content">
                            <div class="pull-right">
                                <button type="button" class="btn btn-default">创建竞赛</button>
                            </div>

                            <div class="">
                                <?php
                                foreach ($pkItems as $pkItem)
                                {
                                    require 'activityComponents/pkItem.php';
                                }

                                ?>

                            </div>
                        </div>
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
<script >
    $(document).ready(function () {
        $('#nav li:eq(2)').attr('class','current');
        $('#nav li:eq(2) a').attr('href','#');
    })
</script>
</body>

</html>
