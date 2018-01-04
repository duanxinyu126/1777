@include('layouts.admin.header');
<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
      <div class="page_title">
       <h2 class="fl">用户列表</h2>
       <a href="user_detail" class="fr top_rt_btn add_icon">添加新用户</a>
      </div>
      <section class="mtb">
       <!-- <select class="select">
        <option>会员等级</option>
        <option>普通会员</option>
        <option>高级会员</option>
       </select> -->
       <input type="text" class="textbox textbox_225" placeholder="输入用户名/手机/电子邮件查询..."/>
       <input type="button" value="查询" class="group_btn"/>
      </section>
      <table class="table">
       <tr>
        <th>Id</th>
        <th>用户头像</th>
        <th>用户账号</th>
        <th>手机号码</th>
        <th>电子邮件</th>
        <th>验证</th>
        <th>操作</th>
       </tr>
       <tr>
        <td class="center">001</td>
        <td class="center"><img src="upload/user_002.png" width="50" height="50"/></td>
        <td>DeathGhost</td>
        <td class="center">18300000000</td>
        <td class="center">deathghost@sina.cn</td>
        <td class="center"><a title="已验证" class="link_icon">&#89;</a></td>
       
        <td class="center">
         <a href="user_update" title="编辑" class="link_icon">&#101;</a>
         <a href="#" title="删除" class="link_icon">&#100;</a>
        </td>
       </tr>
      </table>
      <aside class="paging">
       <a>第一页</a>
       <a>1</a>
       <a>2</a>
       <a>3</a>
       <a>…</a>
       <a>1004</a>
       <a>最后一页</a>
      </aside>
 </div>
</section>
@include('layouts.admin.footer');