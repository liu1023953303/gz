﻿<?php
error_reporting(0); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/> 
<title>高考准考证生成器2_<?php include('../mc.php');?></title>
<link type="text/css" rel="stylesheet" href="frozen.css" />
<style>
body{color:#a6a6a6; font-size:16px; padding-top:45px;}
body b{color: #00A5E3}
body>a{display:none;}
h2.title {line-height: 45px;font-size: 20px;color: #FF0000;position: fixed;top: 0;height: 45px;-webkit-box-sizing: border-box;width: 100%;z-index: 99;background-color: #f8f9fa;text-align:center;}
.pr5{padding-bottom:45px;}
.pr5 p{margin-bottom:5px;}
.ui-list{background-color:#f8f9fa;padding-bottom:5px}
#mcover{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0, 0, 0, 0.7);display:none;z-index:20000;}
#mcover img{position:fixed;right: 18px;top:5px;width:260px;height:180px;z-index:20001;}
</style>
</head>
<body ontouchstart="">
<?php if($_GET['name']){?>
	<header class="ui-header ui-header-positive ui-border-b">
	<h1>长按下方图片点选保存图片</h1>
</header>
<div class="wrapper">
	<img src="bjlm123.taobao.com.php?name=<?=$_GET['name']?>&sex=<?=$_GET['sex']?>&xuexiao=<?=$_GET['xuexiao']?>&kemu=<?=$_GET['kemu']?>" width="100%"/>
</div>
<?php  include("../ad.php");?>
<?php }else{ ?>

<header class="ui-header ui-header-positive ui-border-b">
<h1>高考准考证生成器2</h1></header>
<div class="wrapper">
	<img src="icon.jpg" width="50%" style="margin:30px 25% 30px 25%;"/>
		<form action="">
<div class="ui-form-item ui-border-b">
    <label>姓名</label>
    <input type="text" name="name" maxlength="10" required="required" placeholder="输入姓名">
</div>
<div class="ui-form-item ui-border-b">
    <label>所在高中</label>
    <input type="text" name="xuexiao" maxlength="20" required="required" placeholder="输入所在高中名称">
</div>
<div class="ui-form-item ui-border-b">
    <label>科目</label>
    <div class="ui-select">
        <select name="kemu">
            <option value="文科综合">文科</option>
            <option value="理科综合">理科</option>
            <option value="艺术类">艺术类</option>
        </select>
    </div>
</div>
 <div class="ui-form-item ui-border-b">
    <label>性别</label>
    <div class="ui-select">
        <select name="sex">
            <option value="男">男</option>
            <option value="女">女</option>
        </select>
    </div>
</div>


			<div class="ui-btn-wrap">
    			<button class="ui-btn-lg ui-btn-danger">确定</button>
			</div>
    	</form>
	</div>
	
		<?php  include("../ad.php");?>

</div>
<style>
.follow{font-size:20px;line-height:30px;color:#fff;text-align:center;padding-top:30%;z-index:2000;position:fixed;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,.9);display:none;}
.follow span{font-size:40px;position:absolute;top:10px;left:10px;}
.follow img{width:180px;margin-top:10px;}
</style>
<footer class="ui-footer ui-footer-btn">
	<ul class="ui-tiled ui-border-t">
		<li class="ui-border-r"><a href="../"><div>更多装逼神器</div></a></li>
		<li class="ui-border-r"><a onClick="show()"><div>关注<?php include('../mc.php');?></div></a></li>
	</ul>
</footer>
<div id="follow" class="follow">
	<span class="close" onClick="hide()">×</span>
	<p>长按下方二维码图片</p>
	<p>点选识别图中二维码</p>
	<?php include('../ewm.php');?>
</div>
<script type="text/javascript">
function show(){
	document.getElementById("follow").style.display = "block"; 
}
function hide(){
	document.getElementById("follow").style.display = "none"; 
}
</script>
<div style="display:none;"><?php include('../tongji.php');?></div>

<?php } ?>
</body>
</html>