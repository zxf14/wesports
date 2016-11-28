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
<div class="detail_sports_date_list">
    <div class="detail_sports_date">

        <div class="detail_sports_date_month"><?php echo $month?>月</div>
        <div class="detail_sports_date_day"><?php echo date("d",$item['startTime'])?></div>

    </div>
    <div class="col-md-10 col-sm-10 col-xs-12 detail_sports_content">
        <p><?php echo $item['title']?>
            <?php if($item['isOnline']===1) echo '<small class="label label-danger"><i class="fa fa-clock-o"></i>线上</small>'?>
            <?php if($item['isOffline']===1) echo '<small class="label label-success"><i class="fa fa-clock-o"></i>线下</small>'?>
        </p>
        <div class="act_info" onclick="location.href='<?php echo base_url("activity/info/$id")?>'" id="<?php echo $item['activityId']?>">
            <div >
                <img class="imgBlock" src="<?php echo base_url('asset/images/ride'.'2'.'.png')?>">
            </div>
            <div class="detail_sports_info">
                <span>倒计时：<?php echo $countdown?></span>
                <span>报名人数: </span><span class=""><?php if (!$item['amount']) echo 0;else echo $item['amount']?></span>  </td>
            </div>
        </div>
    </div>
</div>


<div class="clearfix"></div>
