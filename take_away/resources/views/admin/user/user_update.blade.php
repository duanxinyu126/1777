@include('layouts.admin.header');
<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
      <div class="page_title">
       <h2 class="fl">用户修改</h2>
       <!-- <a href="adjust_funding.html" class="fr top_rt_btn money_icon">资金管理</a> -->
      </div>
      <ul class="ulColumn2">
       <li>
        <span class="item_name" style="width:120px;">上传头像：</span>
        <label class="uploadImg">
         <input type="file"/>
         <span>上传头像</span>
        </label>
       </li>
       <li>
        <span class="item_name" style="width:120px;">用户名称：</span>
        <input type="text" class="textbox textbox_225" value="" placeholder="会员账号..."/>
       </li>
       <li>
        <span class="item_name" style="width:120px;">登陆密码：</span>
        <input type="password" class="textbox textbox_225" value="" placeholder="会员密码..."/>
       </li>
       <li>
        <span class="item_name" style="width:120px;">电子邮箱：</span>
        <input type="email" class="textbox textbox_225" value="" placeholder="电子邮件地址..."/>
       </li>
       <li>
        <span class="item_name" style="width:120px;">手机号码：</span>
        <input type="tel" class="textbox textbox_225" value="" placeholder="手机号码..."/>
       </li>
       <li>
        <span class="item_name" style="width:120px;">详细地址：</span>
        <input type="text" class="textbox textbox_295" value="" placeholder="详细地址..."/>
       </li>
       <li>
        <span class="item_name" style="width:120px;"></span>
        <input type="submit" class="link_btn" value="更新"/>
       </li>
      </ul>
 </div>
</section>
@include('layouts.admin.footer');