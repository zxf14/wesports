<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/5
 * Time: 上午10:51
 */
$speed=ceil($sports["distance"]/$sports["duration"]*60*1000)/1000;
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
        <div id="main">
            <div class="row">
                
                <!--<div class="9u 12u(mobile)">-->

                    <div class="col-md-12 col-sm-12 col-xs-12 content">
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
                                    <div id="speed-linechart" style="min-width: 400px;height: 300px;">
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
                        <div class="changeDate">
                <a href="#" id="previous"><i class="fa fa-chevron-left"></i>前一天</a>
                <h2 class="sportsTitle"><?php echo human_time($sports['createdAt'])?></h2>
                <a href="#" id="next">后一天<i class="fa fa-chevron-right"></i></a>

            </div>
        <section class="box sportsAmount">
            <section class="box">      
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                        <div class="ring"></div>
                        <div class="circle_process">
                            <div class="wrapper right">
                                <div class="circle rightcircle" id="rightcircle-1"></div>
                            </div>
                            <div class="wrapper left">
                                <div class="circle leftcircle" id="leftcircle-1"></div>
                            </div>
                        </div>
                            <div class="inner sport">
                                <h3 id="distance"><?php echo $sports["distance"]?></h3>

                                <p>运动距离（千米）</p>
                            </div>
                            <div class="icon blue">
                                <i class="fa fa-flag"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                        <div class="ring"></div>
                        <div class="circle_process">
                            <div class="wrapper right">
                                <div class="circle rightcircle" id="rightcircle-2"></div>
                            </div>
                            <div class="wrapper left">
                                <div class="circle leftcircle" id="leftcircle-2"></div>
                            </div>
                        </div>
                            <div class="inner sport">
                                <h3 id="duration"><?php echo $sports["duration"]?></h3>

                                <p>运动时间（分钟）</p>
                            </div>
                            <div class="icon green">
                                <i class="fa fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                        <div class="ring"></div>
                        <div class="circle_process">
                            <div class="wrapper right">
                                <div class="circle rightcircle" id="rightcircle-3"></div>
                            </div>
                            <div class="wrapper left">
                                <div class="circle leftcircle" id="leftcircle-3"></div>
                            </div>
                        </div>
                            <div class="inner sport">
                                <h3 id="speed"><?php echo $speed;?></h3>

                                <p>速度（km/h）</p>
                            </div>
                            <div class="icon yellow">
                                <i class="fa fa-bolt"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="ring sport"></div>
                            <div class="circle_process">
                                <div class="wrapper right">
                                    <div class="circle rightcircle" id="rightcircle-4"></div>
                                </div>
                                <div class="wrapper left">
                                    <div class="circle leftcircle" id="leftcircle-4"></div>
                                </div>
                            </div>
                            <div class="inner sport">
                                <h3 id="cal"><?php echo $speed*20?></h3>
                                <p>消耗卡路里（大卡）</p>
                            </div>
                            <div class="icon red">
                                <i class="fa fa-fire"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
            </section>
        </section>
                    
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
  var getNum=function(){
    return Math.random();
  };
  $(function () {
    // $(".rightcircle").css("transform","rotate("+(num-135)+"deg)");
    $(".small-box").css("height","350px");
    var circles=document.getElementsByClassName("rightcircle");
    for (var i=0;i<circles.length;i++){
        circles[i].setAttribute("transform","rotate("+(Math.random()*180-135)+"deg)");
    }
    $("#next").click(function(){
        $("#distance").text("7.15");
        $("#duration").text("40");
        $("#speed").text("14.25");
        $("#cal").text("410");
    });
  });
    
  </script>
<script src="<?php echo base_url('asset/javascript/highcharts.js');?>"></script>
<script src="<?php echo base_url('asset/javascript/speedLineChart.js');?>"></script>

</body>

</html>
