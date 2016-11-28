<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/14
 * Time: 下午10:27
 */

$amount=$page_amount;
?>

<ul class="pagination pull-right">
    <?php
    if($amount>1){
        echo '<li><a href="#">&laquo;</a></li>';
        for ($i=0;$i<$amount;$i++){
            if ($page_num==($i+1)){
                echo '<li class="active"><a href="'.base_url('activity/index/hot/'.($i+1)).'">'.($i+1).'</a></li>';
            }
            else{
                echo '<li><a href="'.base_url('activity/index/hot/'.($i+1)).'">'.($i+1).'</a></li>';
            }
        }
        echo '<li><a href="#">&raquo;</a></li>';
   }?>

</ul>