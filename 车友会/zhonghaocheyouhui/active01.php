<?php  
require_once 'include.php';
$id=$_GET['id'];
$sql="select * from car_act where id={$id}";
$oneAct=fetchOne($sql);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>众豪车友会——爱车人士俱乐部</title>
<meta name="baidu-site-verification" content="OSrFPGZNUK" />
<meta name="keywords" content="众豪车友会、车友会、车友、车友群、车友俱乐部"/>
<meta name="description" content="众豪车友会是提供给广大车主以及汽车爱好者进行技术交流、学习、娱乐休闲、情感交流的一个虚拟网络社区，一般以讨论车辆使用情况、自驾游及生活信息为主，旨在服务广大车主以及汽车爱好者，给每个车友会一个高大上的家。"/>
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link href="style/flexslider.css" rel="stylesheet" type="text/css" />
<script  type="text/javascript"  src="js/jquery-3.0.0.min.js" ></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script>
$(function() { 
    $(".flexslider").flexslider({
		animation: "slide", //滚动方式
		slideshow: true,  //自动播放
		slideshowSpeed: 4000, //展示时间间隔ms
		animationSpeed: 500, //滚动时间ms
		touch: true //是否支持触屏滑动	
		}); 
});    
</script>
</head>

<body>
	<div id="wrap">
    	<!--header-->
    	<header id="mainheader">
        	<div class="top">
            	<h1>众豪车友会</h1>
                 <div class="onload"><img src="images/erweima.gif" alt=""></div>
            </div>
          
            <nav class="nav">
            	<ul>
                	<li><a target="_blank" href="index.html">首页</a></li>
                    <li><a target="_blank" href="active.html">车友活动</a></li>
                    <li><a href="">活动图片</a></li>
                    <li><a target="_blank" href="company.html">推荐企业</a></li>
                    <li><a target="_blank" href="contect.html">联系方式</a></li>
                </ul>
            </nav>
            <!-- 轮播图-->
            <section class="bonner">
				<div class="act_m">
					<img src="images/bonner04.jpg" alt="" />
				</div>
            </section>
			 <!--// 轮播图-->
        </header>
        <!--// header-->
        <!--section-->
       <section id="constent">
			<!--车友活动-->
        	<div class="act_lis">
				<div class="act_brief">
					<ul>
						<li><a href="index.php">首页</a>>></li>
						<li><a href="active.php">车友活动</a>>></li>
						<li><a href="#">活动详情</a></li>
						
					</ul>
				</div>
				<div class="left">           	
					<div class="act_case" >

						<dl class="picTxt">
							<dt>
								 <?php echo $oneAct['pName'];?> 
								
							</dt>
							<p style="padding-left:10px; font-size:12px; color:#D0C7C7">发布时间： <?php echo date("Y-m-d H:i:s",$oneAct['pubTime']);?></p>
							<dd>
								<?php echo $oneAct['pDesc'];?>				
							</dd>
						</dl>	
					</div>
				</div>
			<div class="right">		
				<div class="contect">
					<h2>联系我们</h2>     
					<ul>
						<li>联系人：张生付</li>
						<li>电话：13012345678</li>
						<li>QQ：8439284302</li>
						<li>微信公众号：众豪车友会</li>
					</ul>
				</div>	
				<div class=" contect recom">
					<h2>企业推荐</h2>
					<ul>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
						<li><span>软件</span><a href="#">长春信航科技</a></li>
					</ul>
				</div>	
			</div>
          </div>
            <!--车友活动-->
			<div class="pages">
			</div>
        </section>
        <!--// section-->
        <!--footer-->
        <footer id="mainfooter">
        	<div class="footer_t">
				<ul>
					<li><a>网站优化</a> |</li>
					<li><a>网站优化</a> |</li>
					<li><a>网站优化</a> |</li>
					<li><a>网站优化</a> |</li>
					<li><a>网站优化</a> |</li>
					<li><a>网站优化</a> </li>	
				</ul>
			</div>
			<div class="footer_b" >
				<ul>
					<li>未经授权禁止转载 </li>
					<li>营业许可证：7954795789</li>
					<li>网站备案号：27384729387498237</li>
					<li>联系电话：13078782345</li>
					<li>孚办事所以要在道孚呆一</li>
				</ul>
			</div>
        </footer>
        <!--// footer-->
    </div>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
