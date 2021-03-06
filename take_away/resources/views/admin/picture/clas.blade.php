@include('layouts.admin.header');
<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
      <div class="page_title">
       <h2 class="fl">分类列表</h2>
       <a href="clas_detail" class="fr top_rt_btn add_icon">分类添加</a>
      </div>
      <section class="mtb">
       
       <input type="text" class="textbox textbox_225" placeholder="输入订单编号或收件人姓名/电话..."/>
       <input type="button" value="查询" class="group_btn"/>
      </section>
      <table class="table">
       <tr>
        <th>ID</th>
        <th>分类名称</th>
        <th>描述</th>
        <th>创建时间</th>
        <th>状态</th>
        <th>操作</th>
       </tr>
       <tr>
        <td class="center"></td>
        <td></td>
        <td></td>
        <td>
         <address></address>
        </td>
        <td class="center"></td>
        <td class="center">
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