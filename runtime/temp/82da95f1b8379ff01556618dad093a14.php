<?php /*a:1:{s:77:"D:\phpstudy_pro\WWW\tp51\application\index\view\index\activity\turntable.html";i:1627489509;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title><?php echo htmlentities($web_title); ?>-<?php echo L('幸运转盘'); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($web_tplpath); ?>css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($web_tplpath); ?>css/iconfont.css">
<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($web_tplpath); ?>css/style.css">
<link rel="stylesheet" href="<?php echo htmlentities($web_tplpath); ?>bootstrap/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($web_tplpath); ?>css/shoujisc.css">

<link href="<?php echo htmlentities($web_tplpath); ?>activity/turntable/css/style.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo htmlentities($web_tplpath); ?>js/jQuery.js"></script>
<script type="text/javascript" src="<?php echo htmlentities($web_tplpath); ?>js/woxiangyao.js"></script>
<script type="text/javascript" src="<?php echo htmlentities($web_tplpath); ?>js/TouchSlide.1.1.js"></script>
<script type="text/javascript" src="<?php echo htmlentities($web_tplpath); ?>js/foot.js"></script>
</head>

<body>
    <style>
        .activity-tips{width:100px;text-align: center;padding:5px;margin:10px;margin-left:250px;border-radius:15px;background:#e74e5d;color:#fff;}
        .layui-layer.rule{background-color:none !important;}
        .rule .layui-layer-title{ background-color:#e74e5d;color:#fff; border-radius:10px 10px 0 0; border:1px solid #e74e5d}
        .rule .layui-layer-content{ background-color:skyblue; font-size:20px;}
        .rule .content{padding: 0 15px; background-color: skyblue; margin:20px 10px;}
        .mask-black{ height:100%;}
        .mask-lock{ display:block;height:100%;background:#000000bb;border-radius:50%;z-index:5;text-align:center;padding-top:50px;}
        .mask-lock i{font-size:10rem;color:#888; }
        .time-box .countDiv span{ font-size:4rem;}
        .rule .content .mode p {line-height: 22px;}
		.abs {position:absolute;top:0;left:0;width:100%;height:300px;}
    </style>
  <include file="<?php echo htmlentities($web_tplpath); ?>header.html" />
    <div class="container">
	<form id="form" method="POST">
	    <div class="banner1">
	        <div class="activity-tips"><?php echo L('活动规则'); ?></div>
	    </div>
        <!--活动规则-->
        <div class="rule">
        	<div class="cent">
	            <!--转盘-->
	            <img src="<?php echo htmlentities($web_tplpath); ?>activity/turntable/images/1.png" id="shan-img" style="display:none;" />
			    <img src="<?php echo htmlentities($web_tplpath); ?>activity/turntable/images/2.png" id="sorry-img" style="display:none;" />
			    <img src="<?php echo htmlentities($web_tplpath); ?>activity/turntable/images/3.png" id="card1-img" style="display:none;" />
			    <img src="<?php echo htmlentities($web_tplpath); ?>activity/turntable/images/4.png" id="card2-img" style="display:none;" />
				<div class="banner" style="margin-bottom:0">
				    
					<div class="turnplate" style="background-image:url(<?php echo htmlentities($web_tplpath); ?>activity/turntable/images/turnplate-bg.png); background-repeat:no-repeat;background-size:100%;">
						<canvas class="item" id="wheelcanvas" width="422px" height="422px"></canvas>
						<img class="pointer" src="<?php echo htmlentities($web_tplpath); ?>activity/turntable/images/turnplate-pointer.png"/>
					
					<gt name="difftime" value="0">
					<div class="abs">
    					<div class="mask-black">
    				        <span class="mask-lock">
    				            <i class="iconfont wenzi_iconfont">&#xe64c;</i>
                                <div class="time-box">
                                    <div class="countdown" style="display:none;"><?php echo htmlentities($difftime); ?></div>
                                    <div class="countDiv"></div>
                                </div>
    				        </span>
    				    </div>
					</div>
				    </gt>
					</div>
				</div>
				
			</div>
        	<div class="tip">
	                <p><?php echo L('每天有3次抽奖机会'); ?></p>
					<present name="Think.session.user_auth">
					    <gt name="turntable" value="0">
					        <p><?php echo L('您当前拥有N次机会',['n'=>$turntable]); ?></p>
					    <else/>
					        <p><?php echo L('您的抽奖机会已用完'); ?><br>
					        <a href="<?php echo U('user/invite'); ?>" class="btn btn-xs btn-warning">去邀请</a></p>
					    </gt>
				
					<else/>
					<p id="LoginStatus0"><a href="<?php echo U('public/login'); ?>" style="color:#F7FFB6">您好请先登录</a></p>
					</present>
					<ul class="redme">
						<li class="text">分享到：</li>
						<li class="bdsharebuttonbox">
							<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
							<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
							<a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
							<a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
							<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
						</li>
					</ul>
	            </div>
            <!--<h2 class="title h68 auto">活动规则</h2>-->
            
        </div>
        <div class="last_content">
            <div class="win_title">获奖名单</div>
            <div class="win_list">
                <div class="winner" id="win1">
                    <ul>
                        <volist name=":R('Activity/turntable_list')" id="list">
							<li><?php echo htmlentities($list['add_time']); ?>  --  <?php echo htmlentities($list['uname'][0]); ?><i style="color:#bbb61b;font-size:12px;">***</i><?php echo htmlentities($list['uname'][1]); ?> 获得『<?php echo htmlentities($list['price']); ?>』奖励. </li>
						</volist>
                    </ul>
                </div>
            </div>
        </div>
    </form>
    </div>
    
<div class="clear"></div>
<include file="<?php echo htmlentities($web_tplpath); ?>footer.html" />
<script src="<?php echo htmlentities($web_tplpath); ?>js/jquery.min.js"></script>
<script src="<?php echo htmlentities($web_tplpath); ?>activity/turntable/js/awardRotate.js"></script>
<script src="<?php echo htmlentities($web_tplpath); ?>js/layer/layer.js"></script>
<script type="text/javascript">
var turnplate={
		restaraunts:[],				//大转盘奖品名称
		colors:[],					//大转盘奖品区块对应背景颜色
		outsideRadius:192,			//大转盘外圆的半径
		textRadius:155,				//大转盘奖品位置距离圆心的距离
		insideRadius:68,			//大转盘内圆的半径
		startAngle:0,				//开始角度
		bRotate:false				//false:停止;ture:旋转
},uid=<?php echo htmlentities(); ?>,getTurntable=0;

$(document).ready(function(){
	//动态添加大转盘的奖品与奖品区域背景颜色
	turnplate.restaraunts = ["<?php echo L('必中卡'); ?>", "<?php echo L('谢谢参与'); ?>", "10<?php echo L('积分'); ?>", "5<?php echo L('积分'); ?>", "1<?php echo L('积分'); ?>", "<?php echo L('不中卡'); ?>", "<?php echo L('谢谢参与'); ?>", "10<?php echo L('积分'); ?>", "5<?php echo L('积分'); ?>", "1<?php echo L('积分'); ?>"];
	turnplate.colors = ["#FFAAAA", "#FFFFFF", "#FFF8D6", "#FFFFFF","#FFE4E6", "#FFAAAA", "#FFFFFF", "#FFF8D6","#FFFFFF", "#FFE4E6"];

	//旋转转盘 item:奖品位置; txt：提示语;
	var rotateFn = function (item, txt){
		var angles = item * (360 / turnplate.restaraunts.length) - (360 / (turnplate.restaraunts.length*2));
		if(angles<270){
			angles = 270 - angles; 
		}else{
			angles = 360 - angles + 270;
		}
		$('#wheelcanvas').stopRotate();
		$('#wheelcanvas').rotate({
			angle:0,
			animateTo:angles+1800,
			duration:8000,
			callback:function (){
				if(txt=="<?php echo L('必中卡'); ?>"  || txt=="<?php echo L('不中卡'); ?>"){
					layer.msg("<?php echo L('恭喜您获得'); ?>『" + txt + "』,在个人菜单 > 我的卡片 中查看", {icon: 6,time:0 ,btn: [ '我的卡片', '确认'],
						yes: function(index,layero){
					        location.href = "<?php echo U('wallet/card'); ?>";
					    },btn2: function(index, layero){
					        layer.close(index);
					        location.reload();
					    }
					});
				}else if(txt.indexOf("<?php echo L('积分'); ?>")>0){
				    layer.msg(txt, {icon: 6,time:0 ,btn: [ "<?php echo L('确认'); ?>"],
						yes: function(index, layero){
							layer.close(index);
							location.reload();
					    }
					});
				}else{
					layer.msg(txt, {icon: 5},function(){
					    location.reload();
					});
					
				}
				turnplate.bRotate = !turnplate.bRotate;
			}
		});
	};

	$('.pointer').click(function (){
		if(!uid){
			layer.msg("<?php echo L('请先登录'); ?>", {icon: 5});
			return ;
		}
		if(turnplate.bRotate)return;
		turnplate.bRotate = !turnplate.bRotate;
		$.get("<?php echo U('activity/getPrize'); ?>",function(item){
		    if(item.turntable_time > 0){
		        layer.msg( "คุณสามารถดำเนินการในครั้งต่อไปหลังจาก " + item.turntable_time + "วินาที", {icon: 5});
				turnplate.bRotate = !turnplate.bRotate;
		    }else if(item.turntable > 0){
				$('#integral').html(parseInt($('#integral').html())-1);
				rotateFn(item['v']+1, turnplate.restaraunts[item['v']]);
			}else{
				layer.msg('您今天的配额'+ item.turntable +'已经使用完！分享好友可获得更多配额！', {icon: 5});
				turnplate.bRotate = !turnplate.bRotate;
			}
		});
	});

	$('[data-cmd]').click(function(){
		if(getTurntable<1){
			$.ajax("<?php echo U('activity/getTurntable'); ?>").success(function(data){
				getTurntable=1;
				$('#integral').html(parseInt($('#integral').html())+1);
			});	
		}
	})

	var text="1元就买了个腰子6，不信你就往前走，别回头。只要1元，进来了就不后悔，进来了就不上当。大到家用电器，小到针头线脑一律只要1元。1元就能实现梦想，走向人生巅峰迎娶百富美。";
	window._bd_share_config={"common":{"bdText":text,"bdDesc":text,"bdUrl":"<?php echo htmlentities($web_url); ?>/activity/content/id/57/uid/"+uid,"bdPic":"<?php echo htmlentities($web_url); ?>/wx-logo.png","bdSnsKey":{},"bdMini":"1","bdMiniList":false,"bdStyle":"0","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
});

//页面所有元素加载完毕后执行drawRouletteWheel()方法对转盘进行渲染
window.onload=function(){
	drawRouletteWheel();
};

function drawRouletteWheel() {    
  var canvas = document.getElementById("wheelcanvas");    
  if (canvas.getContext) {
	  //根据奖品个数计算圆周角度
	  var arc = Math.PI / (turnplate.restaraunts.length/2);
	  var ctx = canvas.getContext("2d");
	  //在给定矩形内清空一个矩形
	  ctx.clearRect(0,0,422,422);
	  //strokeStyle 属性设置或返回用于笔触的颜色、渐变或模式  
	  ctx.strokeStyle = "#FFBE04";
	  //font 属性设置或返回画布上文本内容的当前字体属性
	  ctx.font = '16px Microsoft YaHei';      
	  for(var i = 0; i < turnplate.restaraunts.length; i++) {       
		  var angle = turnplate.startAngle + i * arc;
		  ctx.fillStyle = turnplate.colors[i];
		  ctx.beginPath();
		  //arc(x,y,r,起始角,结束角,绘制方向) 方法创建弧/曲线（用于创建圆或部分圆）    
		  ctx.arc(211, 211, turnplate.outsideRadius, angle, angle + arc, false);    
		  ctx.arc(211, 211, turnplate.insideRadius, angle + arc, angle, true);
		  ctx.stroke();  
		  ctx.fill();
		  //锁画布(为了保存之前的画布状态)
		  ctx.save();   
		  
		  //----绘制奖品开始----
		  ctx.fillStyle = "#E5302F";
		  var text = turnplate.restaraunts[i];
		  var line_height = 17;
		  //translate方法重新映射画布上的 (0,0) 位置
		  ctx.translate(211 + Math.cos(angle + arc / 2) * turnplate.textRadius, 211 + Math.sin(angle + arc / 2) * turnplate.textRadius);
		  
		  //rotate方法旋转当前的绘图
		  ctx.rotate(angle + arc / 2 + Math.PI / 2);
		  
		  /** 下面代码根据奖品类型、奖品名称长度渲染不同效果，如字体、颜色、图片效果。(具体根据实际情况改变) **/
		  if(text.indexOf("M")>0){
			  var texts = text.split("M");
			  for(var j = 0; j<texts.length; j++){
				  ctx.font = j == 0?'bold 20px Microsoft YaHei':'16px Microsoft YaHei';
				  if(j == 0){
					  ctx.fillText(texts[j]+"M", -ctx.measureText(texts[j]+"M").width / 2, j * line_height);
				  }else{
					  ctx.fillText(texts[j], -ctx.measureText(texts[j]).width / 2, j * line_height);
				  }
			  }
		  }else if(text.indexOf("M") == -1 && text.length>6){
			  text = text.substring(0,6)+"||"+text.substring(6);
			  var texts = text.split("||");
			  for(var j = 0; j<texts.length; j++){
				  ctx.fillText(texts[j], -ctx.measureText(texts[j]).width / 2, j * line_height);
			  }
		  }else{
			  //在画布上绘制填色的文本。文本的默认颜色是黑色
			  //measureText()方法返回包含一个对象，该对象包含以像素计的指定字体宽度
			  ctx.fillText(text, -ctx.measureText(text).width / 2, 0);
		  }
		  
		  //添加对应图标
		  if(text.indexOf("积分")>0){
			  var img= document.getElementById("shan-img");
			  img.onload=function(){  
				  ctx.drawImage(img,-15,10);      
			  }; 
			  ctx.drawImage(img,-15,10);  
		  }else if(text.indexOf("谢谢参与")>=0){
			  var img= document.getElementById("sorry-img");
			  img.onload=function(){  
				  ctx.drawImage(img,-15,10);      
			  };  
			  ctx.drawImage(img,-15,10);  
		  }else if(text == "必中卡" || text == '不中卡'){
			  var img= document.getElementById("card2-img");
			  img.onload=function(){  
				  ctx.drawImage(img,-15,10);      
			  };  
			  ctx.drawImage(img,-15,10);  
		  }
		  //把当前画布返回（调整）到上一个save()状态之前 
		  ctx.restore();
		  //----绘制奖品结束----
	  }     
  } 
}

$('.activity-tips').click(function(){
    layer.open({
        type: 1,
        skin: 'rule', //样式类名
        title: false,
        area: ['90%', 'auto'], //宽高
        content: '<br><div class="content"><div class="mode rule1"><span class="iconfont wenzi_iconfont" style="font-size:3rem;float:left;margin:-5px 5px auto -45px">&#xe6c7;</span> <h3>活动时间：</h3><p><span><?php echo time_format($info["end_time"],"Y-m-d"); ?>截止</span></p></div><div class="mode rule2"><span class="iconfont wenzi_iconfont" style="font-size:3rem;float:left;margin:-5px 13px auto -45px;">&#xe640;</span><h3>活动规则：</h3><p><span>1、会员必须<em>登录成功</em>后才可进行转盘抽奖活动</span><br> <span>2、每位会员每天<em>有三次抽奖机会</em>,每次抽奖间隔半小时以上。</span><br><span>3、活动中奖结果均以系统自动下发的中奖通知为准</span><br> <span>4、<em>中奖以后，系统会自动将积分或道具卡发送至您的平台账户中</em></span></p></div><div class="mode rule4"><span class="iconfont wenzi_iconfont" style="font-size:3rem;float:left;margin:-5px 13px auto -45px;">&#xe763;</span><h3>注意事项：</h3> <p> <span>1、禁止任何不正当手段参与活动，一经发现，活动发起人有权取消用户的获奖资格</span><br><span>2、本次活动最终解释权归<?php echo htmlentities($web_title); ?>网所有！</span><br></p></div></div><br>'
    });
})
 function startmarquee(lh, speed, delay, index) {
    var t;
    var p = false;
    var o = document.getElementById("win" + index);
    o.innerHTML += o.innerHTML;
    o.onmouseover = function () { p = true; };
    o.onmouseout = function () { p = false; };
    o.scrollTop = 0;
    function start() {
        t = setInterval(scrolling, speed);
        if (!p) { o.scrollTop += 1; }
    }
    function scrolling() {
        if (o.scrollTop % lh != 0) {
            o.scrollTop += 1;
            if (o.scrollTop >= o.scrollHeight / 2) o.scrollTop = 0;
        } else {
            clearInterval(t);
            setTimeout(start, delay);
        }
    }
    setTimeout(start, delay);
}
startmarquee(40, 40, 1000, 1);

</script>
<script>
    function countdown(){
        $('.time-box').each(function(i){
            var num = parseInt($(this).find('.countdown').html());
            if(num > 0){
                num = num -1;
                minutes = Math.floor(num % 3600 / 60);
                seconds = Math.floor(num % 60);
                $(this).find('.countdown').html(num);
                
                $(this).find(".countDiv").html("<span class='position'>" + updateDuo(minutes) + "<span class='bdfh'>:</span>" + updateDuo(seconds) + "</span>");
            }else{
                $(".mask-black").hide();
            }
        })
    }
            
    function updateDuo(value){
        return '<span>'+Math.floor(value/10)%10+'</span><span>'+value%10+'</span>';
    }
    var int=setInterval("countdown()", 1000);
</script>
</body>
</html>