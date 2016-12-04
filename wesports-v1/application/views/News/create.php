<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/6
 * Time: 上午12:10
 */
?>
<h2><?php
echo $title
    ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('news/create'); ?>
<label for="name">Name</label>
<input type="input" name="name" /><br />

<label for="address">Address</label>
<input type="input" name="address" /><br />

<input type="submit" name="submit" value="create news" />
</form>