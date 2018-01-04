@include('layouts.admin.header');
<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
      <div class="page_title">
       <h2 class="fl">广告添加</h2>
       <a class="fr top_rt_btn">返回产品列表</a>
      </div>
     <section>
      <ul class="ulColumn2">
       <li>
        <span class="item_name" style="width:120px;">分类名称：</span>
        <input type="text" class="textbox textbox_295" placeholder="分类名称..."/>
       </li>
       <li>
        <span class="item_name" style="width:120px;">分类说明：</span>
        <textarea name="" id="" cols="30" rows="10" class="textbox textbox_295"></textarea>
       </li>
       <li>
        <span class="item_name" style="width:120px;">分类状态：</span>
        <input type="text" class="textbox textbox_295" placeholder="分类状态..."/>
       </li>
       <li>
        <span class="item_name" style="width:120px;"></span>
        <input type="submit" class="link_btn"/>
       </li>
      </ul>
     </section>
 </div>
</section>
<script src="{{asset('admin/js/ueditor.config.js')}}"></script>
<script src="{{asset('admin/js/ueditor.all.min.js')}}"> </script>
<script type="text/javascript">

</script>
@include('layouts.admin.footer');