<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>后台管理系统</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/style.css')}}">
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
<script src="{{asset('admin/js/jquery.js')}}"></script>
<script src="{{asset('admin/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script>

  (function($){
    $(window).load(function(){
      
      $("a[rel='load-content']").click(function(e){
        e.preventDefault();
        var url=$(this).attr("href");
        $.get(url,function(data){
          $(".content .mCSB_container").append(data); //load new content inside .mCSB_container
          //scroll-to appended content 
          $(".content").mCustomScrollbar("scrollTo","h2:last");
        });
      });
      
      $(".content").delegate("a[href='top']","click",function(e){
        e.preventDefault();
        $(".content").mCustomScrollbar("scrollTo",$(this).attr("href"));
      });
      
    });
  })(jQuery);
</script>
</head>
<body>
<!--header-->
<header>
 <h1><img src="images/admin_logo.png"/></h1>
 <ul class="rt_nav">
  <li><a href="http://www.mycodes.net" target="_blank" class="website_icon">站点首页</a></li>
  <li><a href="#" class="clear_icon">清除缓存</a></li>
  <li><a href="#" class="admin_icon">DeathGhost</a></li>
  <li><a href="#" class="set_icon">账号设置</a></li>
  <li><a href="login.html" class="quit_icon">安全退出</a></li>
 </ul>
</header>
<!--aside nav-->
<!--aside nav-->
<aside class="lt_aside_nav content mCustomScrollbar">
 <h2><a href="index">起始页</a></h2>
 <ul>
  <li>
   <dl>
    <dt>菜品管理</dt>
    <!--当前链接则添加class:active-->
    <dd><a href="product" class="active">菜品列表</a></dd>
    <dd><a href="product_detail">菜品添加</a></dd>
    <dd><a href="recycle_bin">菜品回收站</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>买家管理</dt>
    <!--当前链接则添加class:active-->
    <dd><a href="consumption" class="active">消费记录</a></dd>
    <dd><a href="evaluate">评价记录</a></dd>
    <dd><a href="message">留言记录</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>订单信息</dt>
    <dd><a href="order_list">订单列表</a></dd>
    <!-- <dd><a href="order_detail">订单详情示例</a></dd> -->
   </dl>
  </li>
  <li>
   <dl>
    <dt>广告为设置</dt>
    <dd><a href="adver">广告管理</a></dd>
    <dd><a href="clas">分类管理</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>后台用户管理</dt>
    <dd><a href="user_list">用户列表</a></dd>
    <dd><a href="user_detail">添加用户</a></dd>
    <!-- <dd><a href="user_rank.html">用户等级示例</a></dd>
    <dd><a href="adjust_funding.html">用户资金管理示例</a></dd> -->
   </dl>
  </li>
  <li>
   <dl>
    <dt>配送与支付设置</dt>
    <dd><a href="express_list">配送方式</a></dd>
    <dd><a href="pay_list">支付方式</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>在线统计</dt>
    <dd><a href="sales_volume">销售额统计</a></dd>
   </dl>
  </li>
  <li>
   <p class="btm_infor">© DeathGhost.cn 版权所有</p>
  </li>
 </ul>
</aside>

<style>
.dataStatistic{width:400px;height:200px;border:1px solid #ccc;margin:0 auto;margin:10px;overflow:hidden}
#cylindrical{width:400px;height:200px;margin-top:-15px}
#line{width:400px;height:200px;margin-top:-15px}
#pie{width:400px;height:200px;margin-top:-15px}
</style>