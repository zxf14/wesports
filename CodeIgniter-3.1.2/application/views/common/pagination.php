<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/14
 * Time: 下午10:27
 */
?>
<ul class="pagination pull-right">
    <?php
    if($page_amount>1){
        echo '<li><a href="#">&laquo;</a></li>';
        for ($i=0;$i<$page_amount;$i++){
            if ($page_num==($i+1)){
                echo '<li class="active"><a href="'.$url.($i+1).'">'.($i+1).'</a></li>';
            }
            else{
                echo '<li><a href="'.$url.($i+1).'">'.($i+1).'</a></li>';
            }
        }
        echo '<li><a href="#">&raquo;</a></li>';
   }?>

</ul>