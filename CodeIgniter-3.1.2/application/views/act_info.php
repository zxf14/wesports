<!DOCTYPE HTML lang="zh-CN">
<html>

<head>
    <title><?php echo $head?></title>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php
    $this->load->view('common/common_css');
    ?>

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
    <!-- Main -->
    <div id="main-wrapper">
        <div id="main" class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-12">
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="content">

                        <div class="page-content">
                            <h2 class="major"><span><?php echo $act_info['title']?></span></h2>
                            <img src="<?php echo $act_info['photoUri']?>"/>
                            <div class="pull-right editable">
                                <?php if($edit_enable===true)
                                    echo '<button class="btn-danger" id="delete">删除</button><button id="edit" class="btn-warning" id="edit">修改活动</button>'; ?>

                            </div>
                            <article>
                                <h3 class="major">赛事信息</h3>
                                <p>
                                    比赛时间：<?php echo human_time($act_info['endTime']);?><br>
                                    报名截止时间：<?php echo human_time($act_info['startTime']);?><br>
                                    <div>
                                    <?php if($join) echo '<button id="join" class="btn">退出报名</button>';
                                    else echo '<button id="join" class="btn-warning">报名活动</button>温馨提示：
                                    名额有限，先到先得；';?>
                                    </div>

                                </p>

                            </article>
                            <article>
                                <h3 >比赛路线</h3>
                                <p>
                                    <?php echo $act_info['content'];?>
                                </p>

                            </article>
                            <article>
                                <h3 >竞赛说明</h3>
                                <p>
                                    (一)按中国田径协会审定的最新田径竞赛规则执行。<br/>

                                    (二)检录时间
                                    <br/>
                                    所有参赛选手按竞赛项目在规定时间及区域进行检录，检录时间为12月17日上午7:30至8:30。9:00比赛一枪发令后所有参赛项目依次起跑。
                                    <br/>
                                    (三)起跑顺序<br/>

                                    按全程马拉松、半程马拉松、10公里跑、迷你马拉松、亲子跑的先后顺序排列，各项目方队在指定的地点集合；起跑时，马拉松项目特邀、注册选手在马拉松方队最前面。
                                    <br/>
                                    (四)关门时间<br/>

                                    为了保证参赛选手比赛安全、顺利，比赛期间比赛路线各段实行限时交通封闭，关门时间到后，相应路段将逐段恢复开放社会交通。参赛选手在规定的关门时间内，未跑完对应的距离者须立即停止比赛，退出赛道，以免发生危险。退出比赛的选手可乘坐组委会提供的收容车到终点处。各项目关门时间见下表：
                                </p>

                            </article>
                        </div>
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
        var joinAct=function () {
            jbutton.className='btn';
            jbutton.innerHTML="取消报名";
            alert("报名成功");
        };
        var cancel=function () {
            jbutton.className='btn-warning';
            jbutton.innerHTML="报名活动";
            alert("报名成功");
        };
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
        $('#delete').click(function () {
            var detUrl="<?php echo base_url('activity/delete')?>";
            var data={'aid':<?php echo $act_info['activityId']?>};
            stdPost(detUrl,data);
        });
        $('#edit').click(function () {
            var editUrl="<?php echo base_url('activity/edit')?>";
            var data={'aid':<?php echo $act_info['activityId']?>};
            stdPost(editUrl,data);
        });
        $("#join").click(function(){
            var jbutton=document.getElementById("join");
            if(jbutton.className=='btn-warning'){
                $.post({
                    url:'<?php echo site_url('activity/join');?>',
                    data: {"act_id":<?php echo $act_info['activityId'];?>},
                    success: function (data,status) {
                        if(data==='1'){
                            jbutton.className='btn';
                            jbutton.innerHTML="取消报名";
                            $("#join").blur();
                            alert("成功加入");
                        }
                        else{
                            alert(data);
                        }

                    }
                });
            }
            else {
                $.post({
                    url:'<?php echo site_url('activity/cancel_join');?>',
                    data: {"act_id":<?php echo $act_info['activityId'];?>},
                    success: function (data,status) {
                        if(data==='1'){
                            jbutton.className='btn-warning';
                            jbutton.innerHTML="报名活动";
                            $("#join").blur();
                            alert("已经取消报名");
                        }
                        else{
                            alert(data);
                        }

                    }
                });
            }

        });
    </script>
</body>

</html>