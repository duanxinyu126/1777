@include('layouts.admin.header');
<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
      <div class="page_title">
       <h2 class="fl">分类添加</h2>
       <a class="fr top_rt_btn">返回产品列表</a>
      </div>
     <section>
      <ul class="ulColumn2">
       <li>
        <span class="item_name" style="width:120px;">分类名称：</span>
        <input type="text" name="c_name" class="textbox textbox_295" placeholder="分类名称..."/>
       </li>
       <li>
        <span class="item_name" style="width:120px;">分类说明：</span>
        <textarea name="content" id="" cols="40" rows="10"></textarea>
       </li>
       <li>
        <span class="item_name" style="width:120px;">分类状态：</span>
        <input type="radio" name="none" value="1">显示
        <input type="radio" name="none" value="0">隐藏
       </li>
       <li>
        <span class="item_name" style="width:120px;"></span>
        <input type="submit" class="link_btn btn"/>
       </li>
      </ul>
     </section>
 </div>
</section>
<script src="{{asset('admin/js/ueditor.config.js')}}"></script>
<script src="{{asset('admin/js/ueditor.all.min.js')}}"> </script>
<script type="text/javascript">
$(".btn").click(function(){
    alert(1);
})
</script>
@include('layouts.admin.footer');