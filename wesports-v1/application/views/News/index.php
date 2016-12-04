<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/5
 * Time: 下午11:31
 */
?>
<h2><?php echo $title; ?></h2>
<?php foreach ($news as $news_item): ?>
    <h3><?php echo $news_item['NAME'];?></h3>
    <div class="main">
        <?php
        echo $news_item['ADDRESS'];
        ?>
    </div>
    <p><a href="<?php echo site_url('news/'.$news_item['AGE']); ?>">View article</a></p>

<?php endforeach; ?>

