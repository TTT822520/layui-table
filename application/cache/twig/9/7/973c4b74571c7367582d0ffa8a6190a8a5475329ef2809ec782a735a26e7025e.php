<?php

/* admin/im/edit_channel.html */
class __TwigTemplate_992a7f822ccf7ae4886a54d1615526c1017a72a44a36f4b671dadaeaa0d57ac4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("admin/iheader.html", "admin/im/edit_channel.html", 1)->display($context);
        // line 2
        echo "<style>
\tbody {margin: 10px;}
\t.demo-carousel {height: 200px;line-height: 200px;text-align: center;}
\t.layui-table-view .layui-table {width: 100%}
\t.model {padding: 20px;}
\t.layui-upload-img {width: 100px;height: 100px;border: 1px solid transparent;}
</style>
";
        // line 9
        $this->loadTemplate("admin/crumbs1.html", "admin/im/edit_channel.html", 9)->display($context);
        // line 10
        echo "<form class=\"layui-form\" action=\"\" style=\"width: 720px; padding-bottom: 30px;\">
</form>
<script src=\"/resource/admin/js/jslib/citys.js\"></script>
<!--<script src=\"/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js\"></script>-->
<script>
\tykp.defineClass(['element', \"jquery\"], {
\t\tinit: function() {
\t\t\tvar it = this;
\t\t\t//初始化列表
\t\t\tit.initFrom();
\t\t},
\t\tinitFrom: function() {
\t\t\thm.showAddEdit({
\t\t\t\tel: \".layui-form\",
\t\t\t\tlist: [{type: \"text\",name: \"id\",verify:\"\",display:true,field: \"im_channel.id\"},
\t\t\t\t\t{type: \"text\",name: \"渠道名称\",field: \"im_channel.name\",verify:\"\"},
\t\t\t\t\t{type: \"select\",name: \"渠道类型\",field: \"im_channel_cate.id\",verify:\"\",sOption: {0: \"代理服务商\",1: \"项目招商\",2: \"招商外包\",3: \"供应链\",4: \"媒介\",5: \"展会\"}},
\t\t\t\t\t{type: \"text\",name: \"行业ID\",field: \"pm_industry.id\",verify:\"\"},
\t\t\t\t\t{type: \"text\",name: \"城市ID\",field: \"pm_regions.name\",verify:\"\"},//url:'/admin/im/Api_channel/grid',colKey:'id',colName:'pm_regions.name'
\t\t\t\t\t{type: \"text\",name: \"logo地址\",field: \"im_channel.logo\",verify:\"\"},
\t\t\t\t\t{type: \"text\",name: \"描述\",field: \"im_channel.description\",verify:\"\"},
\t\t\t\t\t{type: \"text\",name: \"特色信息\",field: \"im_channel.special_info\",verify:\"\"},
\t\t\t\t\t{type: \"text\",name: \"推荐理由\",field: \"im_channel.recommend_reason\",verify:\"\"},
\t\t\t\t\t{type: \"text\",name: \"主体内容\",field: \"im_channel.content\",verify:\"\"}
\t\t\t\t],
\t\t\t\tselectKey:\"im_channel.id\",   //列字段id   例: id, product_id
\t\t\t\t/*verifyData:{
\t\t\t\t\toption: [{
\t\t\t\t\t\tverifyDate: \"password\"
\t\t\t\t\t}, {
\t\t\t\t\t\tverifyDate: \"tel\"
\t\t\t\t\t},{
\t\t\t\t\t\tverifyDate: \"test\",
\t\t\t\t\t\tmatch:[/\\d+\\.\\d+\\.\\d+\\.\\d+ /, '请填写正确的ip']
\t\t\t\t\t}],
\t\t\t\t\tel: \".layui-form\"
\t\t\t\t},*/  //检索  默认  ''  要检索时  添加检索
\t\t\t\tinfoUrl:\"/admin/im/Api_channel/info\",   //编辑详情接口
\t\t\t\taddEditUrl:'/admin/im/Api_channel/update_or_add', //添加的接口 
\t\t\t\tprevUrl:'";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/admin/auser/channel'   //添加成功返回的页面
\t\t\t});
\t\t},
\t});
</script>
</body>
</html>







";
    }

    public function getTemplateName()
    {
        return "admin/im/edit_channel.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 49,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* <style>*/
/* 	body {margin: 10px;}*/
/* 	.demo-carousel {height: 200px;line-height: 200px;text-align: center;}*/
/* 	.layui-table-view .layui-table {width: 100%}*/
/* 	.model {padding: 20px;}*/
/* 	.layui-upload-img {width: 100px;height: 100px;border: 1px solid transparent;}*/
/* </style>*/
/* {% include 'admin/crumbs1.html' %}*/
/* <form class="layui-form" action="" style="width: 720px; padding-bottom: 30px;">*/
/* </form>*/
/* <script src="/resource/admin/js/jslib/citys.js"></script>*/
/* <!--<script src="/resource/admin/js/jslib/bootstrap-3.3.5/js/bootstrap.min.js"></script>-->*/
/* <script>*/
/* 	ykp.defineClass(['element', "jquery"], {*/
/* 		init: function() {*/
/* 			var it = this;*/
/* 			//初始化列表*/
/* 			it.initFrom();*/
/* 		},*/
/* 		initFrom: function() {*/
/* 			hm.showAddEdit({*/
/* 				el: ".layui-form",*/
/* 				list: [{type: "text",name: "id",verify:"",display:true,field: "im_channel.id"},*/
/* 					{type: "text",name: "渠道名称",field: "im_channel.name",verify:""},*/
/* 					{type: "select",name: "渠道类型",field: "im_channel_cate.id",verify:"",sOption: {0: "代理服务商",1: "项目招商",2: "招商外包",3: "供应链",4: "媒介",5: "展会"}},*/
/* 					{type: "text",name: "行业ID",field: "pm_industry.id",verify:""},*/
/* 					{type: "text",name: "城市ID",field: "pm_regions.name",verify:""},//url:'/admin/im/Api_channel/grid',colKey:'id',colName:'pm_regions.name'*/
/* 					{type: "text",name: "logo地址",field: "im_channel.logo",verify:""},*/
/* 					{type: "text",name: "描述",field: "im_channel.description",verify:""},*/
/* 					{type: "text",name: "特色信息",field: "im_channel.special_info",verify:""},*/
/* 					{type: "text",name: "推荐理由",field: "im_channel.recommend_reason",verify:""},*/
/* 					{type: "text",name: "主体内容",field: "im_channel.content",verify:""}*/
/* 				],*/
/* 				selectKey:"im_channel.id",   //列字段id   例: id, product_id*/
/* 				/*verifyData:{*/
/* 					option: [{*/
/* 						verifyDate: "password"*/
/* 					}, {*/
/* 						verifyDate: "tel"*/
/* 					},{*/
/* 						verifyDate: "test",*/
/* 						match:[/\d+\.\d+\.\d+\.\d+ /, '请填写正确的ip']*/
/* 					}],*/
/* 					el: ".layui-form"*/
/* 				},*//*   //检索  默认  ''  要检索时  添加检索*/
/* 				infoUrl:"/admin/im/Api_channel/info",   //编辑详情接口*/
/* 				addEditUrl:'/admin/im/Api_channel/update_or_add', //添加的接口 */
/* 				prevUrl:'{{base_url}}/admin/auser/channel'   //添加成功返回的页面*/
/* 			});*/
/* 		},*/
/* 	});*/
/* </script>*/
/* </body>*/
/* </html>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
