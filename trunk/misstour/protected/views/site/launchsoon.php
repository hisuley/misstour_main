<html class=""><head>
<title>美途网 | 发现更广阔的世界</title>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
<meta name="keywords" content="semantic search travel,travel semantic,big data semantic search travel">
<meta name="description" content="semantic search travel">
<style>     
body
{
	background: #f1f1f1;
	background: #000000 no-repeat left top;
	background:url(images/leh2.JPG) #000000 no-repeat center center fixed;
	background-size: cover;
	height: 100%;
	font: 14px/24px "Oxygen",Arial,"Hiragino Sans GB","Microsoft YaHei","微软雅黑","STHeiti","WenQuanYi Micro Hei",SimSun,sans-serif;
	-webkit-font-smoothing: antialiased;
	-webkit-hyphens: auto;
	-moz-hyphens: auto;
	hyphens: auto;
	text-rendering: optimizeLegibility;
	overflow-wrap: break-word;
	-ms-hyphens: auto;
}   

#container
{
	height:200px;
	width:400px;
	position:relative;
}

#image
{    
	position:absolute;
	left:0;
	top:0;
}
#text
{
	z-index:100;
	position:absolute;    
	color:orange;
	font-size:14px;
	font-weight:bold;
	left:120px;
	top:0px;
}

#header{
	position: fixed;
	top:0px;
	right:20px;
}
#header ul li{
	list-style-type: none;
	float:left;
	font-weight: bold;
}
#header ul li a{
	color:white;
	font-weight: bold;
	text-shadow: black 0.1em 0.1em 0.2em;
}

#footer{text-shadow:white 0.1em 0.1em 0.2em;position: fixed;bottom: 20px;text-align: center;width: 100%;}

</style>

<style type="text/css">.fancybox-margin{margin-right:0px;}</style></head>
<body>
	<div id="header">
		<ul>
			<li>已有内测资格，马上<a href="<?php echo $this->createUrl('site/login'); ?>">登录</a></li>
		</ul>
	</div>
	<div style="text-align: center;font-size: 28px;color: #FFF; position:fixed;width:100%;top:60px;z-index:1">
		<span>探索更广阔的世界</span> 			
	</div>
	<div id="focus-area" align="center" alt="100" style="text-align: center;position:fixed;width:100%;top:20px;z-index:1">智能行程规划、线路计算</div>
	<div id="reg-email" style="text-align: center;font-size: 14px;color: #FFF; position:fixed;width:100%;top:120px;z-index:1">
		<form style="width:320px;margin:auto;">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="您的Email，内测通知将会发送到这里。">
				<span class="input-group-btn">
					<button class="btn btn-info" type="button">登记!</button>
				</span>
			</div><!-- /input-group -->
		</form>
	</div>
	<div style="">
		<div id="footer" align="center">
			© 美途网 2013
		</div>
	</div>
	
</body></html>