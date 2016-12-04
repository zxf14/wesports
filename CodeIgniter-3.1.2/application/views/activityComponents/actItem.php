<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/5
 * Time: 上午9:28
 */
$countdown=timespan(now(),$item['startTime']);
$id=$item['activityId'];
?>
<div class="col-md-6 col-sm-6 col-xs-12">

    <div class="detail_sports_content">
        <div class="act_join">
        倒计时：<b><?php echo $countdown?></b>
        报名人数: <b><?php if (!$item['amount']) echo 0;else echo $item['amount']?></b>
        <?php if($item['isOnline']===1) echo '<small class="label label-red"><i class="fa fa-clock-o"></i>线上</small>'?>
        <?php if($item['isOffline']===1) echo '<small class="label label-green"><i class="fa fa-clock-o"></i>线下</small>'?>
        </div>  
        
        <div class="actPhoto">
        <a href="<?php echo base_url('activity/info/').$item["activityId"];?>">                
            <img class="imgBlock" src="<?php echo $item['photoUri'];?>">
            <i></i>
        </a>
                
        </div>
    </div>

</div>

<!-- <div class="clearfix"></div> -->
