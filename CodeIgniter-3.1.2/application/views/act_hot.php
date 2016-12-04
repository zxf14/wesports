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
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <meta name="description" content="运动社交平台">
    <meta name="keywords" content="运动,健康,社交,交友">
    <?php
    require 'common/common_css.php';
    ?>
    <link rel="stylesheet" href="<?php echo base_url('asset/stylesheet/slider.css');?>">
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

    <div class="photoSlider" style="height: 600px;overflow: hidden;">
        <div class="slider-container">
          <div class="slider-control left inactive"></div>
          <div class="slider-control right"></div>
          <ul class="slider-pagi"></ul>
          <div class="slider">
            <div class="slide slide-0 active">
              <div class="slide__bg"></div>
              <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                  <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                </svg>
                <div class="slide__text">
                  <h2 class="slide__text-heading">台湾线上马拉松</h2>
                  <p class="slide__text-desc">台北留给人们的印象是文艺，清醒，悠闲...然而今年，一场马拉松，一场激情的奔跑，将带给台北别样的韵味。现经组委会授权，台北线上马拉松已在wesports与线下赛事同步启动，爱跑马的你，让我们相约12.19，来一场大约在冬季的跑马约会，体验不一样到宝岛风情。</p>
                  <a class="slide__text-link">现在报名</a>
                </div>
              </div>
            </div>
            <div class="slide slide-1 ">
              <div class="slide__bg"></div>
              <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                  <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                </svg>
                <div class="slide__text">
                  <h2 class="slide__text-heading">泉州湾国际自行车赛</h2>
                  <p class="slide__text-desc">悠久的历史让这里充满了古香古韵<br/>铸就了一座文化古城<br/>放松的奔跑是我们身心充满愉悦<br/>铸就了你的生活习惯</p>
                  <a class="slide__text-link">现在报名</a>
                </div>
              </div>
            </div>
            <div class="slide slide-2">
              <div class="slide__bg"></div>
              <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                  <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                </svg>
                <div class="slide__text">
                  <h2 class="slide__text-heading">曼谷十千米线上跑</h2>
                  <p class="slide__text-desc">异国风情，在寒冷的冬日再来体验热带国家的温暖拥抱吧，在这里在热情的曼谷，完成你的又一次突破。</p>
                  <a class="slide__text-link">现在报名</a>
                </div>
              </div>
            </div>
            <div class="slide slide-3">
              <div class="slide__bg"></div>
              <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                  <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                </svg>
                <div class="slide__text">
                  <h2 class="slide__text-heading">摩洛哥塔拉菲特十公里跑</h2>
                  <p class="slide__text-desc">这是一场午夜的狂欢party<br/>这是一场公益性极强的马拉松运动盛会<br/>人们在这里狂欢，奔跑<br/>只为心中的那个一个梦...<br/>如果你是夜跑狂人<br/>来这里，没错！</p>
                  <a class="slide__text-link">现在报名</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- Main -->
    <div id="main-wrapper">
        <div id="main">
                <!-- Content -->

                <div class="box page-content">
                <div class="head">
                    <div class="actType btn-toolbar">
                        <div class="btn-group">
                          <a class="btn btn-primary" href="#"><i class="fa fa-clock-o"></i>参与活动</a>
                          <a class="btn btn-primary" href="#"><i class="fa fa-bicycle"></i>骑行活动</a>
                          <a class="btn btn-primary active" href="#"><i class="fa fa-building">热门活动</i></a>
                          <a class="btn btn-primary" href="#"><i class="fa fa-flag"></i>竞赛单元</a>
                        </div>
                    </div>
                    <a href="<?php echo base_url("activity/add");?>" class="add"><i class="fa fa-plus-circle"></i></a>
                </div>
                    
                    <hr/>
                    <div class="clearfix"></div>
                    <?php
                    if ($activities!=null){
                        foreach ($activities as $item){
                            require 'activityComponents/actItem.php';
                        }
                    }
                    else{
                        echo '当前没有活动';
                    }
                    ?>


                </div>
                <?php require 'common/pagination.php';?>
                <div class="clearfix"></div>
                <div class="center-block" style="text-align: center;">
                    <div class="pagination">
                    <ul class="pagination">
                      <li class="previous"><a href="#"><img src="<?php echo base_url('asset/images/previous.png');?>"></a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">6</a></li>
                      <li><a href="#">7</a></li>
                      <li class="next"><a href="#"><img src="<?php echo base_url('asset/images/next.png');?>"></a></li>
                    </ul>
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
<script src="<?php echo base_url('asset/javascript/slider.js');?>"></script>
</body>

</html>
