<!DOCTYPE HTML lang="zh-CN">
<html>

<head>
    <title><?php echo $head?></title>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="运动社交平台">
    <meta name="keywords" content="运动,健康,社交,交友">    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php
    $this->load->view('common/common_css');
    ?>

</head>

<body>
<div id="page-wrapper">
    <?php
    require 'common/header.inc.php';
    ?>
    <!-- Nav -->
    <?php
    require 'common/navigator.php';
    ?>
    <!-- Main -->
    <div id="main-wrapper">
        <div id="main" class="container">
            <div class="row">
                <!--<div class="3u 12u(mobile)">-->
                <div class="col-md-2">
                    <div class="sidebar">
                        <!-- Sidebar -->
                        <section>
                            <h2 class="major"><span>活动</span></h2>
                            <ul class="divided">
                                <li<?php echo ' class="chosen"';?>>
                                    <a href="<?php base_url('admin/all')?>">所有活动</a>
                                </li>
                                <li>
                                    <a href="<?php base_url('admin/mycreate')?>">我创建的</a>
                                </li>
                            </ul>
                        </section>
                        <section>
                            <h2 class="major"><span>用户</span></h2>
                            <ul class="divided">
                                <li>
                                    <a href="<?php base_url('admin/user')?>">所有用户</a>
                                </li>
                                <li>
                                    <a href="<?php base_url('admin/forbid')?>">已禁用</a>
                                </li>
                            </ul>
                        </section>
                    </div>

                </div>
                <!--<div class="9u 12u(mobile)">-->
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="content">
                        <!-- Content -->

                        <div class="page-content">
                            <div class="profile_pinfo" id="pl_content_account">

                                <div class="infoblock">
                                    <h2 class="major text-left"><span>活动管理</span>
                                    </h2>
                                </div>

                            </div>
                            <?php if (isset($activities)){
                                foreach ($activities as $a){
                                    require 'admin/act_item.php';
                                }
                            }
                            ?>
                        </div>
                        <?php require 'common/pagination.php';?>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <?php
        require 'common/footer.php';
        ?>
    </div>

    <?php
    require 'common/common_js.php'
    ?>
<script>
    function stdPost (url,args)
        {
            var myForm = document.createElement("form");
            myForm.method = "post";
            myForm.action = url;
            for ( var k in args) {
                var myInput = document.createElement("input");
                myInput.setAttribute("name", k);
                myInput.setAttribute("value", args[k]);
                myForm.appendChild(myInput);
            }
            document.body.appendChild(myForm);
            myForm.submit();
            document.body.removeChild(myForm);
        }
        $('.delete').click(function () {
            var detUrl="<?php echo base_url('admin/delete')?>";
            var data={'aid':this.value,
            'url':'admin/index'};
            alert('成功删除');
            stdPost(detUrl,data);
        });
        $('.edit').click(function () {
            var editUrl="<?php echo base_url('admin/edit')?>";
            var data={'aid':this.value};
            stdPost(editUrl,data);
        });
</script>
</body>

</html>