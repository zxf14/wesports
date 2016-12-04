<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/5
 * Time: 上午11:01
 */
?>
<ul class="detail_sports_date_list">
    
    <!-- <div class="col-md-10 col-sm-10 col-xs-12"> -->
        <li class="detail_sports_content">

            <p><?php echo human_time($item['createdAt'])?> 由<span>wesport</span>上传</p>

            <table class="detail_sports_info">
                <tbody>
                <tr>
                    <td>
                        <div class="center-block">
                            <img src="<?php echo base_url('asset/images/run.png');?>">
                        </div>
                    </td>
                    <td>
                        <span>距离</span><br><span class=""><?php echo number_format($item['distance'],2)?>公里</span>
                    </td>
                    <td>
                        <span>运动时长</span><br><span class=""><?php echo number_format($item['duration'],2)?>分钟</span>
                    </td>
                    <td>
                        <span>平均速度</span><br><span class=""><?php echo number_format($item['distance']/$item['duration']*60,2)?>公里/小时</span>
                    </td>
                    <td>
                        <span>燃烧</span><br><span class=" ">275.0</span>大卡
                    </td>
                </tr>
                </tbody>
            </table>

        </li>

    <!-- </div> -->
</ul>
<div class="clearfix"></div>
