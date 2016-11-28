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

<!--    <!-- Header -->-->
<!--    <header id="header">-->
<!--        <div class="logo container">-->
<!--            <div>-->
<!--                <h1><a href="index.html" id="logo">活动</a></h1>-->
<!--                <p>创建</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </header>-->
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
                <div class="col-md-2 col-sm-2 col-xs-12 center-block">
                </div>
                <!--<div class="9u 12u(mobile)">-->
                <div class="col-md-8 col-sm-8 col-xs-12 center-block">
                    <div class="content">
                        <!-- Content -->

                        <div class="page-content">

                            <div class="profile_pinfo" id="pl_content_account">

                                <div class="infoblock">
                                    <h2 class="major text-left"><span>活动信息</span>
                                    </h2>
                                </div>

                            </div>

                            <div class="tab-pane" id="settings">

                                <form class="form-horizontal" action="<?php echo $url;?>" method="post" onsubmit="return check(this)">
                                    <input  type="hidden" value="<?php if(isset($act)) echo $act['activityId'];?>" name="actId"/>
                                    <div class="form-group">
                                        <label for="inputTitle" class="col-sm-2 control-label">活动标题</label>
                                        <div class="col-sm-8 col-xs-10">
                                            <input type="text" class="form-control" id="inputTitle" name="title" placeholder="活动标题" <?php if(isset($act)) echo 'value="'.$act['title'].'""';?> required>
                                        </div>
                                        <span>限10字以内</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputContent" class="col-sm-2 control-label">活动详情</label>

                                        <div class="col-sm-8 col-xs-10">
                                            <textarea class="form-control" id="inputContent" name="content" placeholder="活动详情"><?php if(isset($act)) echo $act['content'];?></textarea>
                                        </div>
                                        <span>限140字以内</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="optionsRadios1" class="col-sm-2 control-label">活动类型</label>

                                        <div class="col-sm-8 col-xs-10">
                                            <div class="radio radio-inline" style="padding-left: 0;">
                                                <label>
                                                    <input type="radio" name="type" id="optionsRadios1" value="1" <?php if(isset($act)&&$act['sportType']===1) echo 'checked';?>>跑步
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" name="type" id="optionsRadios2" value="2" <?php if(isset($act)&&$act['sportType']===2) echo 'checked';?>>骑行
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputOnline" class="col-sm-2 control-label">活动范围</label>

                                        <div class="col-sm-8 col-xs-10">
                                            <div class="checkbox checkbox-inline" style="padding-left: 0;">
                                                <label>
                                                    <input type="checkbox" name="online[]" id="optionsRadios1" value="1" checked>线上
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-inline">
                                                <label>
                                                    <input type="checkbox" name="online[]" id="optionsRadios2" value="1" checked>线下
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputlocation" class="col-sm-2 control-label">活动地点</label>

                                        <div class="col-sm-8 col-xs-10">
                                            <div class="input_sel" node-type="cityselector" >
														<span>
														<select name="province" id="province" init_value="32">
															<option value="32">江苏</option><option value="34">安徽</option>
															<option value="11">北京</option><option value="50">重庆</option>
															<option value="35">福建</option><option value="62">甘肃</option>
															<option value="44">广东</option><option value="45">广西</option>
															<option value="52">贵州</option><option value="46">海南</option>
															<option value="13">河北</option><option value="23">黑龙江</option>
															<option value="41">河南</option><option value="42">湖北</option>
															<option value="43">湖南</option><option value="15">内蒙古</option>
															<option value="36">江西</option>
															<option value="22">吉林</option><option value="21">辽宁</option>
															<option value="64">宁夏</option><option value="63">青海</option>
															<option value="14">山西</option><option value="37">山东</option>
															<option value="31">上海</option><option value="51">四川</option>
															<option value="12">天津</option><option value="54">西藏</option>
															<option value="65">新疆</option><option value="53">云南</option>
															<option value="33">浙江</option><option value="61">陕西</option>
															<option value="71">台湾</option><option value="81">香港</option>
															<option value="82">澳门</option><option value="400">海外</option>
															<option value="100">其他</option>
													</select>&nbsp;</span>
                                                <span>
    														<select node-type="city" name="city" id="city" init_value="1">
	    														<option value="1">南京</option><option value="2">无锡</option>
	    														<option value="3">徐州</option><option value="4">常州</option>
	    														<option value="5">苏州</option><option value="6">南通</option>
	    														<option value="7">连云港</option><option value="8">淮安</option>
	    														<option value="9">盐城</option><option value="10">扬州</option><option value="11">镇江</option>
	    														<option value="12">泰州</option><option value="13">宿迁</option>
	    													</select>&nbsp;</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhone" class="col-sm-2 control-label">联系电话</label>
                                        <div class="col-sm-8 col-xs-10">
                                            <input type="tel" name="tel" id="inputPhone" <?php if(isset($act['tel'])) echo 'value="'.$act['tel'].'""';?>>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputStart" class="col-sm-2 control-label">开始时间</label>
                                        <div class="col-sm-8 col-xs-10">
                                            <input type="datetime-local" name="startTime" id="inputStart"/>
                                        </div>
                                        <input type="hidden" id="inputS" name="start" />
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEnd" class="col-sm-2 control-label">结束时间</label>
                                        <div class="col-sm-8 col-xs-10">
                                            <input type="datetime-local" name="endTime" id="inputEnd" />
                                        </div>
                                        <input type="hidden" id="inputE" name="end" />
                                    </div>
                                    <div class="form-group">
                                        <label for="inputActImg" class="col-sm-2 control-label">活动图片</label>
                                        <img id='inputActImg' title="点击更换" style="margin-left: 20px;cursor: pointer;width: 100px" src="<?php if(isset($act)) echo $act['photoUri'];else echo base_url('asset/images/run1.jpg');?>" />
                                    <input type="hidden" id="inputImg" name="img" value="<?php echo base_url('asset/images/run1.jpg');?>"/>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">修改活动信息</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button class="btn btn-warning">退出</button>
                                </div>
                            </div>

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
    <script src="<?php echo base_url('asset/javascript/moment.js')?>"></script>
    <script>
        $(function(){
            var timeS=moment().add(7,'days').format('YYYY-MM-DDTHH:mm');
            var timeE=moment().add(30,'days').format('YYYY-MM-DDTHH:mm');
            var end = document.getElementById("inputEnd");
            var start = document.getElementById("inputStart");
            end.value=timeE;
            end.min=moment().format();
            start.value=timeS;
            start.min=moment().format();
        });

        var photo = document.getElementById("inputActImg");
        photo.addEventListener("click", changeImg);
        var cImg=(function () {
            var i=1;
            return (function () {
                i=(i%4)+1;
                return i;
            });
        })();
        function changeImg() {
            var num=cImg();
            var srcString="http://localhost:8080/asset/images/run"+num+".jpg";
            document.getElementById("inputActImg").src = srcString;
            document.getElementById("inputImg").value=srcString;
        }
        function check(obj) {
            var sTime = document.getElementById('inputStart');
            var eTime = document.getElementById('inputEnd');
            var s = document.getElementById('inputS');
            var e = document.getElementById('inputE');
            s.value = new Date(sTime.value).getTime();
            e.value = new Date(eTime.value).getTime();
            return true;
        }
    </script>
</body>

</html>