<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/4
 * Time: 上午10:58
 */
?>
<section class="box sportsAmount">
    <h2 class="major"><span>运动量统计</span></h2>
    <div>
        <section class="box">
            <header>
                <h2 class="text-center">相当于</h2>
                <br/>
                <br/>
            </header>
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3><?php echo ceil($calories/1100)?></h3>

                            <p>为手机充电（次）</p>
                        </div>
                        <div class="icon blue">
                            <i class="fa fa-battery-full"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><?php echo ceil($calories/170)?></h3>

                            <p>消耗冰淇淋甜筒（个）</p>
                        </div>
                        <div class="icon green">
                            <i class="ion-icecream"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3><?php echo ceil($calories/470)?></h3>

                            <p>省93＃汽油（升）</p>
                        </div>
                        <div class="icon yellow">
                            <i class="fa fa-car"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3><?php echo ceil($calories/110)?></h3>

                            <p>60W灯泡亮（小时）</p>
                        </div>
                        <div class="icon red">
                            <i class="fa fa-lightbulb-o"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </section>
    </div>
</section>

