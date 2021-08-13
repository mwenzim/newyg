<?php /*a:3:{s:64:"D:\phpstudy_pro\WWW\tp51\application\index\view\index\index.html";i:1627566957;s:65:"D:\phpstudy_pro\WWW\tp51\application\index\view\index\header.html";i:1627566835;s:65:"D:\phpstudy_pro\WWW\tp51\application\index\view\index\footer.html";i:1627566530;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title><?php echo htmlentities($web_title); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($web_tplpath); ?>css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($web_tplpath); ?>css/iconfont.css">
<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($web_tplpath); ?>css/style.css">
<link rel="stylesheet" href="<?php echo htmlentities($web_tplpath); ?>bootstrap/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($web_tplpath); ?>css/shoujisc.css">
<script type="text/javascript" src="<?php echo htmlentities($web_tplpath); ?>js/jQuery.js"></script>
<script type="text/javascript" src="<?php echo htmlentities($web_tplpath); ?>js/woxiangyao.js"></script>
<script type="text/javascript" src="<?php echo htmlentities($web_tplpath); ?>js/TouchSlide.1.1.js"></script>
<script type="text/javascript" src="<?php echo htmlentities($web_tplpath); ?>js/foot.js"></script>
<script type="text/javascript" src="<?php echo htmlentities($web_tplpath); ?>js/jquery.cookie.js"></script>
</head>

<body>
	<style>
	    .notice{box-sizing: border-box; }
	    .notice h3{ margin-top:0 !important;}
        .media-body p{margin-bottom:0;}
        .media-body a{color:#fff;}
        .media-price{margin-bottom:5px; color:#e74e5d;}
        .media-price small{ color:#222;}
        .media-price .huise{font-size:12px;}
        .media-heading{ min-height:40px; line-height:20px; border-bottom: .5px solid #eee;}
        .media-heading a{ color:#888}
        .groupon_block{ width:100%;height:45px;line-height:20px;padding-top:5px;border-radius:5px; color:#fff;background:url(<?php echo htmlentities($web_tplpath); ?>images/bgnnb.png) no-repeat;background-size:100%;} 
        .groupon_block p{font-size:12px;padding-left:10px; font-weight:bold;}
        .groupon-status{ font-size:12px; padding:0 5px; margin-right:5px;border-radius:3px;background:#e74e5d; color:#fff; }
        .position span {font-size:12px;color:#fff;display:inline-block;background:#e74e5d;padding:0 4px; margin-left:1px;border-radius:2px;}
        .position .bdfh { background:none;color:#e74e5d;padding:1px;font-weight:bolder;}
        .progress {margin-bottom: 0;height: 18px;}
        .progress-bar{ height:18px;}
    </style>
  	    <div class="quanbu-top">
    	<a href="<?php echo url("","",true,false);?>" class="qb-tleft f-l"><img src="<?php echo htmlentities($web_tplpath); ?>images/logo.png"></a>
    	<span class="top_search"><input type="text" class="input_search" style="width:35%;background:url('<?php echo htmlentities($web_tplpath); ?>images/search.png') no-repeat #fff;background-size:auto 100%; background-position:95%;"></span>
        <div class="qb-tright f-r">
        	<a href="javascript:;" id="top_menu_btn"><img src="<?php echo htmlentities($web_tplpath); ?>images/more.png"></a>
        </div>
        <div style="clear:both;"></div>
    </div>
    <script> 
        $('.input_search').click(function(){
            window.location.href = "<?php echo url("","",true,false);?>";
        })
        $('#top_menu_btn').click(function(){
           $('.top_menu').toggle('fast',function(){
               
           });
           
        })
    </script>
    <!--全部商品-->
    <!--手机平板-->
    <!--电脑办公-->
    <!--数码影音-->
    <!--女性时尚-->
    <!--美食天地-->
    <!--潮流新品-->
    <!--家居商品-->
    <!--其他商品-->
    <ul class="top_menu">
        <li class="current"><a href="<?php echo url("","",true,false);?>"><?php echo lang('首页'); ?></a></li>
        <li><a href="<?php echo url("","",true,false);?>"><?php echo lang('全部商品'); ?></a></li>
        <?php if(is_array($list_type) || $list_type instanceof \think\Collection || $list_type instanceof \think\Paginator): $i = 0; $__LIST__ = $list_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li><a href="<?php echo url("","",true,false);?>"><?php echo lang($vo); ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <li>
        <div class="row" style="padding:5px;">
            <span class="col-xs-4" >
                <a href="javascript:;" onclick="changeLang('zh-cn')" style="border-bottom:none;">
                    <img class="center-block" src="<?php echo htmlentities($web_tplpath); ?>images/zh.png" style="height:25px;">
                </a>
            </span>
            <span class="col-xs-4">
                <a href="javascript:;" onclick="changeLang('en-us')" style="border-bottom:none;">
                    <img class="center-block" src="<?php echo htmlentities($web_tplpath); ?>images/usa.png" style="height:25px;">
                </a>
            </span>
            <span class="col-xs-4">
                <a href="javascript:;" onclick="changeLang('th-th')" style="border-bottom:none;">
                    <img class="center-block" src="<?php echo htmlentities($web_tplpath); ?>images/tai.png" style="height:25px;">
                </a>
            </span>
        </div>
        </li>
        <li>&nbsp;</li>
        <div style="clear:both;"></div>
    </ul>
    
    <div class="banner1 slide" id="ban1" login="<?php echo htmlentities($login); ?>">
        <div id="focus">
            <ul class="sy-ul">
                <?php if(is_array($slider) || $slider instanceof \think\Collection || $slider instanceof \think\Paginator): $i = 0; $__LIST__ = $slider;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li><a href="<?php echo htmlentities($vo['link']); ?>"><img src="<?php echo htmlentities($vo['path']); ?>"></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <ol class="sy-ol">
            </ol>
        </div>
    </div>
    <style>
        .nav_list {margin:10px;}
        .nav_list img{ width:70%;margin:10px auto; border-radius:5px;}
        .nav_list p{ text-align:center; font-weight:600; color:#777;}
    </style>
    <div class="container nav_list">
        <div class="row">
            <div class="col-xs-3"><a href="<?php echo url('index/turntable'); ?>" ><img src="<?php echo htmlentities($web_tplpath); ?>images/gkdata3.png" /><p><?php echo lang('幸运转盘'); ?></p></a></div>
            <div class="col-xs-3"><a href="<?php echo url('wallet/card_publish'); ?>" ><img src="<?php echo htmlentities($web_tplpath); ?>images/gkdata2.png" /><p><?php echo lang('卡片广场'); ?></p></a></div>
            <div class="col-xs-3"><a href="<?php echo url('groupon/index'); ?>" ><img src="<?php echo htmlentities($web_tplpath); ?>images/gkdata6.png" /><p><?php echo lang('拼团模式'); ?></p></a></div>
            <div class="col-xs-3"><a href="<?php echo url('wallet/card'); ?>" ><img src="<?php echo htmlentities($web_tplpath); ?>images/gkdata5.png" /><p><?php echo lang('我的卡片'); ?></p></a></div>
            <!--<div class="col-xs-3"><img src="<?php echo htmlentities($web_tplpath); ?>images/gkdata4.png" /></div>-->
            <!--<div class="col-xs-3"><img src="<?php echo htmlentities($web_tplpath); ?>images/gkdata1.png" /></div>-->
            <!--<div class="col-xs-3"><img src="<?php echo htmlentities($web_tplpath); ?>images/gkdata7.png" /></div>-->
        </div>
    </div>
    
	
    <div class="ssjg" style="padding-bottom:0;">
    	<ul class="ssjg-tit1">
        	<li><h3 class="lead index_lead"><?php echo lang('热门推荐'); ?></h3></li>
            <div style="clear:both;"></div>
        </ul>
        <ul class="ssjg-ul1" style="padding-top:0;">
            <?php if(is_array($groupon) || $groupon instanceof \think\Collection || $groupon instanceof \think\Paginator): $i = 0; $__LIST__ = $groupon;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="media">
    	        <div class="container">
    	            <div class="row" style="padding-top:0">
    	                <div class="col-xs-4 huise" style="bottom:-5px;">
    	                    <div class="time-box">
                                <span class="countdown" style="display:none;"><?php echo htmlentities($vo['difftime']); ?></span>
                                <span class="countDiv"></span>
                            </div>
    	                </div>
    	                <div class="col-xs-8" style="bottom:-5px;">
    	                    <div class="progress">
                                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?php echo htmlentities($vo['jd']); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo htmlentities($vo['jd']); ?>%">

                                </div>
                                <span class="base_color"><?php echo lang('进度'); ?>:<?php echo htmlentities($vo['attend_num']); ?>/<?php echo htmlentities($vo['need_num']); ?></span>
                            </div>
    	                </div>
    	            </div>
                </div>
                <div class="media-left media-middle">
                    <a href="<?php echo url("","",true,false);?>">
                    <img style="height:120px;width:120px;" class="media-object img-thumbnail" src="<?php echo htmlentities($vo['pic']); ?>">
                    
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><a href="<?php echo url("","",true,false);?>"><span class="groupon-status"><?php echo lang('N人团',['n'=>$vo['need_num']]); ?></span><?php echo htmlentities($vo['name']); ?></a></h4>
                    <h4 class="media-price"><small><?php echo lang('拼团价'); ?> ฿</small><?php echo htmlentities($vo['price']); ?>.00 <s class="huise">฿ <?php echo htmlentities($vo['shop_price']); ?>.00</s></h4>
                    <a href="<?php echo url("","",true,false);?>" >
                        <div class="groupon_block">
                            <p><?php echo lang('X人成团Y人中奖',['x'=>$vo['need_num'],'y'=>$vo['lucky_num']]); ?></p>
                            <p><?php echo lang('返还金额',['n'=>$vo['back_price']]); ?></p></a>
                        </div>
                    </a>
                    <div style="clear:both;"></div>
                </div>
            </div>
        	<?php endforeach; endif; else: echo "" ;endif; ?>
            <div style="clear:both;"></div>
        </ul>
    </div>
    
    <div class="sy-ft">
    	<div class="sy-ftif1">
        	<table border="1" class="sy-tab1" bordercolor="#dbdbdb">
              <tr>
                <td align="center" valign="middle"><a href="<?php echo url("","",true,false);?>"><?php echo lang('首页'); ?></a></td>
                <td align="center" valign="middle"><a href="<?php echo url("","",true,false);?>"><?php echo lang('帮助'); ?></a></td>
                <td align="center" valign="middle"><a href="<?php echo url("","",true,false);?>"><?php echo lang('登录'); ?></a></td>
                <td align="center" valign="middle"><a href="<?php echo url("","",true,false);?>"><?php echo lang('注册'); ?></a></td>
              </tr>
            </table>
        </div>
    </div>
    
    <!--返回顶部-->
    <div class="sy-fanhui">
    	<a href="JavaScript:;"><img src="<?php echo htmlentities($web_tplpath); ?>images/sjsc29.gif"></a>
</div>
<div class="footer" > 
    <ul class="quanbu-ul1">
        
        <li>
            <a href="<?php echo url("","",true,false);?>">
        	<div class="qu-tu1">
            	<span class="atu1"><span class="icon wenzi_iconfont">&#xe690;</span></span>

            </div>
            <span class="qu-ul1a"><?php echo lang('首页'); ?></span>
            </a>
        </li>
        <li>
            <a href="<?php echo url("","",true,false);?>">
        	<div class="qu-tu1">
            	<span class="atu1"><span class="icon wenzi_iconfont">&#xe646;</span></span>

            </div>
            <span class="qu-ul1a"><?php echo lang('最新揭晓'); ?></span>
            </a>
        </li>
    	<li>
            <a href="<?php echo url("","",true,false);?>">
        	<div class="qu-tu1">
            	<span class="atu1"><span class="icon wenzi_iconfont">&#xe67c;</span></span>

            </div>
            <span class="qu-ul1a"><?php echo lang('购物车'); ?></span>
            </a>
        </li>
       <li>
            <a href="<?php echo url("","",true,false);?>">
        	<div class="qu-tu1">
            	<span class="atu1"><span class="icon wenzi_iconfont">&#xe61b;</span></span>

            </div>
            <span class="qu-ul1a"><?php echo lang('发现'); ?></span> 
            </a>
        </li>
    	<li>
            <a href="<?php echo url("","",true,false);?>">
                <gt name="UID" value="0">
                    <gt name="user_msg" value="0">
                    <span class="label label-warning"><?php echo htmlentities((isset($user_msg) && ($user_msg !== '')?$user_msg:'')); ?></span>
                    </gt>
                </gt>
            	<div class="qu-tu1">
                	<span class="atu1"><span class="icon wenzi_iconfont">&#xe656;</span></span>
                    
                </div>
            <span class="qu-ul1a"><?php echo lang('我的'); ?></span>
            
            </a>
            
        </li>
    
        <div style="clear:both;"></div>
    </ul>
</div>    
    
  	<script type="text/javascript" src="<?php echo htmlentities($web_tplpath); ?>layer/layer.js" ></script> 
	<script>
	    $(document).ready(function(){
	       $('.sort1').show();
	       $('.quanbu-ul1 li').eq(0).addClass('current').siblings().removeClass('current');
	       var login = "<?php echo htmlentities($login); ?>";
	       if(login == 1){
	            layer.open({
    	            title:["<?php echo lang('提示'); ?>",'background:#e74e5d;color:#fff;'],
    	            className: "notice",
                    content: "<div class='huise'><?php echo lang('欢迎回来'); ?> <span><?php echo htmlentities($username); ?></span> </div>! \n <?php echo lang('转盘次数'); ?>+3",
                    btn:['<?php echo lang("去抽奖"); ?>'],
                    time: 0,
                    yes:function(){ window.location.href="<?php echo url("","",true,false);?>";},
                    end:function(){window.location.href="<?php echo url("","",true,false);?>";}
                });
	       }
	      
	    });
	    $('.sy-ul1 li').click(function(){
	       $('.sy-ul1 li').removeClass('current');
	       $(this).addClass('current');
	       var state = $(this).find('a').attr('sort-type');
	       $('.sy-ul2').hide();
	       $(".sort"+state).show();
	    });
	    
	    function add2cart(pid){
	        $.post("<?php echo url("","",true,false);?>",{pid:pid,buycount:1},
            function(data){
                if(data.status == 1){
                    layer.open({
                        content: data.info,
                        skin: 'msg',
                        time: 1,
                        end:function(){
                            window.location.href="<?php echo url("","",true,false);?>"
                        }
                    });
                    
                }
            });
	    }
	</script>
	<script>
    
     function countdown(){
        $('.time-box').each(function(i){
            var num = parseInt($(this).find('.countdown').html());
            if(num > 0){
                num = num -1;
                hour = Math.floor(num / 3600);
             
                minutes = Math.floor(num % 3600 / 60);
                seconds = Math.floor(num % 60);
                $(this).find('.countdown').html(num);
                
                $(this).find(".countDiv").html("<span class='position'>" + updateDuo(hour) + "<span class='bdfh'>:</span>" + updateDuo(minutes) + "<span class='bdfh'>:</span>" + updateDuo(seconds) + "</span>");
            }else{
                $(this).find('.countDiv').html("<span class='time_over'><?php echo lang('已结束'); ?></span>");
            }
        })
    }
        
    function updateDuo(value){
        return '<span>'+Math.floor(value/10)%10+'</span><span>'+value%10+'</span>';
    }
    var int=setInterval("countdown()", 1000);
    
    $(".ssjg-tit select").change(function(){
        var lid = $(this).val();
        window.location.href = "/index.php?s=/list/index/id/" + lid;
    });
    
    function changeLang(lang){
        $.cookie('hx_users_think_language',lang, { path: '/' });
        console.log($.cookie('hx_users_think_language'));
        location.reload();
    }
    </script>
</body>
</html>
