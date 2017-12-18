<?php

/* admin/user/finance_management.html */
class __TwigTemplate_b90dffa786ee8cb9e779c000bfe138882c937d6af30e7250ccb8279f0721d9d4 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/user/finance_management.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/user/finance_management.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/user/finance_management.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
\t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>
\t<a class=\"layui-btn layui-btn-danger layui-btn-mini\" lay-event=\"del\">删除</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"examine\">审批</a>
</script>
<script>
\tykp.defineClass(['element', \"jquery\"], {
\t\tinit: function() {
\t\t\tvar it = this;
\t\t\t//初始化列表
\t\t\tit.initTabel();
\t\t},
\t\tinitTabel: function() {
\t\t\thm.load(function(option) {
\t\t\t\tvar table = option.table;
\t\t\t\tvar public = option.public;
\t\t\t\tpublic.showTable({
\t\t\t\t\ttopTool: {
\t\t\t\t\t\tbtnArr: [{title: \"添加\",type: \"add\",}, 
\t\t\t\t\t\t{title: \"高级搜索\",type: \"hSearch\",},
\t\t\t\t\t\t{title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
//\t\t\t\t\t\t{title: \"导入\",type: \"improt\",},
\t\t\t\t\t\t{title: \"导出\",type: \"export\",}
\t\t\t\t\t\t]
\t\t\t\t\t},
\t\t\t\t\tcols: [{checkbox: true,},
\t\t\t\t\t\t{field: \"om_refund-id\",width: 80,sort: true,title: \"主键\",type: \"\",sear: \"om_refund-id\"},
\t\t\t\t\t\t{field: \"um_user-username\",width: 80,title: \"用户名\",type: \"select\",sear: \"om_refund-uid\",url:'/admin/api_user/grid',colKey:\"uid\",colName:\"username\"},
\t\t\t\t\t\t{field: \"om_refund-oid\",width: 80,title: \"订单号\",type: \"\",sear: \"om_refund-oid\"},
\t\t\t\t\t\t{field: \"om_refund-status\",width: 150,title: \"退款状态\",type: \"\",sear: \"om_refund-status\"},
\t\t\t\t\t\t{field: \"am_admin-username\",width: 150,title: \"管理员\",type: \"select\",sear: \"om_refund-aid\",url:'/admin/am/api_admin/grid',colKey:\"am_admin.aid\",colName:\"am_admin.username\"},
\t\t\t\t\t\t{field: \"om_refund-remark\",width: 150,title: \"备注\",type: \"\",sear: \"om_refund-remark\"},
\t\t\t\t\t\t{field: \"om_refund-status\",width: 150,title: \"审核状态\",type: \"select\",sear: \"om_refund-status\",enum:{0:\"未审核\",1:\"审核成功\",2:\"审核失败\"},examine:true},
\t\t\t\t\t\t{field: \"om_refund-apply_at\",width: 150,title: \"申请时间\",type: \"time\",sear: \"om_refund-apply_at\"},
\t\t\t\t\t\t{field: \"om_refund-deal_at\",width: 150,title: \"处理时间\",type: \"time\",sear: \"om_refund-deal_at\"},
\t\t\t\t\t\t{field: \"right\",width: 220,title: \"操作\",toolbar: ykp.\$('#barDemo'),align: \"center\",fixed: 'right'}
\t\t\t\t\t],
\t\t\t\t\treader: {
\t\t\t\t\t\telem: \"#tabel_user\",
\t\t\t\t\t\turl: \"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/am/api_refund/grid\",
\t\t\t\t\t\tmethod: \"post\",
\t\t\t\t\t\tid: 'tabel_user',
\t\t\t\t\t\tdata: getData
\t\t\t\t\t},
\t\t\t\t\tautoCol: true, //自定义列表,
\t\t\t\t\ttool: {
\t\t\t\t\t\tid: \"om_refund-id\",  //该行id字段名
\t\t\t\t\t\t//是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
\t\t\t\t\t\tEvent: [{type: \"edit\",url: '";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/editActive?id='},
\t\t\t\t\t\t\t{type: \"detail\",url: '";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/infoActive?id='},
\t\t\t\t\t\t\t{type: \"del\",url: '";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/api_product/del'},
\t\t\t\t\t\t\t {type: \"examine\", url: '/admin/am/api_refund/change_status'},
\t\t\t\t\t\t]
\t\t\t\t\t},
\t\t\t\t\ttopBtnActive: {
\t\t\t\t\t\tEvent: [{type: \"add\",url: '";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/user/addActive'},
\t\t\t\t\t\t\t{type: \"pldel\",url: '";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/am/api_refund/delete'}, 
\t\t\t\t\t\t\t//{type: \"improt\",url: \"/upload\"},
\t\t\t\t\t\t\t//{type: \"export\",url: \"/upload\"}
\t\t\t\t\t\t]
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t\t
\t\t\tfunction getData(res,callback) {
\t\t\t\tconsole.log(res);
\t\t\t\tif(typeof callback == 'function') {
\t\t\t\t\tcallback(res.data);
\t\t\t\t}
\t\t\t\tconsole.log(res.data);
\t\t\t}
\t\t}
\t});
</script>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "admin/user/finance_management.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 62,  98 => 61,  90 => 56,  86 => 55,  82 => 54,  70 => 45,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/* 	<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
/* 	<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>*/
/* 	<a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>*/
/* 	<a class="layui-btn layui-btn-mini" lay-event="examine">审批</a>*/
/* </script>*/
/* <script>*/
/* 	ykp.defineClass(['element', "jquery"], {*/
/* 		init: function() {*/
/* 			var it = this;*/
/* 			//初始化列表*/
/* 			it.initTabel();*/
/* 		},*/
/* 		initTabel: function() {*/
/* 			hm.load(function(option) {*/
/* 				var table = option.table;*/
/* 				var public = option.public;*/
/* 				public.showTable({*/
/* 					topTool: {*/
/* 						btnArr: [{title: "添加",type: "add",}, */
/* 						{title: "高级搜索",type: "hSearch",},*/
/* 						{title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/* //						{title: "导入",type: "improt",},*/
/* 						{title: "导出",type: "export",}*/
/* 						]*/
/* 					},*/
/* 					cols: [{checkbox: true,},*/
/* 						{field: "om_refund-id",width: 80,sort: true,title: "主键",type: "",sear: "om_refund-id"},*/
/* 						{field: "um_user-username",width: 80,title: "用户名",type: "select",sear: "om_refund-uid",url:'/admin/api_user/grid',colKey:"uid",colName:"username"},*/
/* 						{field: "om_refund-oid",width: 80,title: "订单号",type: "",sear: "om_refund-oid"},*/
/* 						{field: "om_refund-status",width: 150,title: "退款状态",type: "",sear: "om_refund-status"},*/
/* 						{field: "am_admin-username",width: 150,title: "管理员",type: "select",sear: "om_refund-aid",url:'/admin/am/api_admin/grid',colKey:"am_admin.aid",colName:"am_admin.username"},*/
/* 						{field: "om_refund-remark",width: 150,title: "备注",type: "",sear: "om_refund-remark"},*/
/* 						{field: "om_refund-status",width: 150,title: "审核状态",type: "select",sear: "om_refund-status",enum:{0:"未审核",1:"审核成功",2:"审核失败"},examine:true},*/
/* 						{field: "om_refund-apply_at",width: 150,title: "申请时间",type: "time",sear: "om_refund-apply_at"},*/
/* 						{field: "om_refund-deal_at",width: 150,title: "处理时间",type: "time",sear: "om_refund-deal_at"},*/
/* 						{field: "right",width: 220,title: "操作",toolbar: ykp.$('#barDemo'),align: "center",fixed: 'right'}*/
/* 					],*/
/* 					reader: {*/
/* 						elem: "#tabel_user",*/
/* 						url: "{{base_url}}admin/am/api_refund/grid",*/
/* 						method: "post",*/
/* 						id: 'tabel_user',*/
/* 						data: getData*/
/* 					},*/
/* 					autoCol: true, //自定义列表,*/
/* 					tool: {*/
/* 						id: "om_refund-id",  //该行id字段名*/
/* 						//是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/* 						Event: [{type: "edit",url: '{{base_url}}admin/user/editActive?id='},*/
/* 							{type: "detail",url: '{{base_url}}admin/user/infoActive?id='},*/
/* 							{type: "del",url: '{{base_url}}admin/api_product/del'},*/
/* 							 {type: "examine", url: '/admin/am/api_refund/change_status'},*/
/* 						]*/
/* 					},*/
/* 					topBtnActive: {*/
/* 						Event: [{type: "add",url: '{{base_url}}admin/user/addActive'},*/
/* 							{type: "pldel",url: '{{base_url}}admin/am/api_refund/delete'}, */
/* 							//{type: "improt",url: "/upload"},*/
/* 							//{type: "export",url: "/upload"}*/
/* 						]*/
/* 					}*/
/* 				});*/
/* 			});*/
/* 			*/
/* 			function getData(res,callback) {*/
/* 				console.log(res);*/
/* 				if(typeof callback == 'function') {*/
/* 					callback(res.data);*/
/* 				}*/
/* 				console.log(res.data);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
/* */
