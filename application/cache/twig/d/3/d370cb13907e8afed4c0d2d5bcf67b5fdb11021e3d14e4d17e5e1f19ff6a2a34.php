<?php

/* admin/im/express.html */
class __TwigTemplate_9b1c49fb2febc51c732f10566b61cb90bc2e59ea02c8e368f42ffe9fdde34552 extends Twig_Template
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
        $this->loadTemplate("admin/iheader.html", "admin/im/express.html", 1)->display($context);
        // line 2
        $this->loadTemplate("admin/crumbs.html", "admin/im/express.html", 2)->display($context);
        // line 3
        echo "<table class=\"layui-hide\" id=\"tabel_user\" lay-filter=\"tabel_user\"></table>
";
        // line 4
        $this->loadTemplate("admin/import.html", "admin/im/express.html", 4)->display($context);
        // line 5
        echo "<script type=\"text/html\" id=\"barDemo\">
 \t<a class=\"layui-btn layui-btn-primary layui-btn-mini\" lay-event=\"detail\">查看</a>
\t<a class=\"layui-btn layui-btn-mini\" lay-event=\"edit\">编辑</a>
\t<a class=\"layui-btn layui-btn-danger layui-btn-mini\" lay-event=\"del\">删除</a>
</script>
<script>
    ykp.defineClass(['element', \"jquery\", 'laytpl'], {
        init: function () {
            var it = this;
            //初始化列表
            it.initTabel();
        },
        initTabel: function () {
            hm.load(function (option) {
                var table = option.table;
                var public = option.public;
                public.showTable({
                    topTool: {
                        btnArr: [{title: \"添加\",type: \"add\"},
                        \t\t{title: \"批量删除\",type: \"plDel\",class: \"layui-btn-danger\"},
                            \t{title: \"高级搜索\", type: \"hSearch\"},
                            \t{title: \"导入\", type: \"improt\"},
                            \t{title: \"导出\", type: \"export\"}]
                    },
                    cols: [{checkbox: true, },
                        {field: \"id\", width: 80, sort: true, title: \"编号\", type: \"\", sear: \"id\"},
                        {field: \"title\", width: 80, title: \"标题\", type: \"\", sear: \"title\"},
                        {field: \"author\", width: 80, title: \"作者\", type: \"\", sear: \"author\",},
                        {field: \"ishot\", width: 150, title: \"是否热门\", type: \"select\", sear: \"ishot\",enum: {0:\"是\",1:\"否\"}},
                        {field: \"create_at\", width: 80, title: \"创建时间\", type: \"time\", sear: \"create_at\"},
                        {field: \"content\", width: 150, title: \"详细介绍\", type: \"\", sear: \"content\"},
                        {field: \"right\", width: 180, title: \"操作\", toolbar: \$('#barDemo'), align: \"center\", fixed: 'right'}
                    ],
                    reader: {
                        elem: \"#tabel_user\",
                        url: \"/admin/im/Api_express/grid\",
                        method: \"post\",
                        id: 'tabel_user',
                        where: {
                            filter: \"\"
                        },
                    },
                    autoCol: true, //自定义列表,
                    tool: {
                        id: \"id\", //该行id字段名
                        //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false
                        Event: [{type: \"edit\",url: '";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/auser/editExpress?id='},
                            {type: \"detail\", url: '/admin/auser/infoExpress/?id='},
                            {type: \"del\", url: '/admin/im/Api_express/delete'}
                        ]
                    },
                    topBtnActive: {
                        Event: [{type: \"add\",url: '";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/auser/addExpress'},
                        \t\t{type: \"plDel\",url: '";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "admin/im/Api_express/delete'},
                            \t{type: \"improt\", url: \"/upload\"},
                            \t{type: \"export\", url: \"/upload\"}
                        ]
                    }
                });
            });

        }
    });
</script>
</body>

</html>





";
    }

    public function getTemplateName()
    {
        return "admin/im/express.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 58,  85 => 57,  76 => 51,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'admin/iheader.html' %}*/
/* {% include 'admin/crumbs.html' %}*/
/* <table class="layui-hide" id="tabel_user" lay-filter="tabel_user"></table>*/
/* {% include 'admin/import.html' %}*/
/* <script type="text/html" id="barDemo">*/
/*  	<a class="layui-btn layui-btn-primary layui-btn-mini" lay-event="detail">查看</a>*/
/* 	<a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>*/
/* 	<a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>*/
/* </script>*/
/* <script>*/
/*     ykp.defineClass(['element', "jquery", 'laytpl'], {*/
/*         init: function () {*/
/*             var it = this;*/
/*             //初始化列表*/
/*             it.initTabel();*/
/*         },*/
/*         initTabel: function () {*/
/*             hm.load(function (option) {*/
/*                 var table = option.table;*/
/*                 var public = option.public;*/
/*                 public.showTable({*/
/*                     topTool: {*/
/*                         btnArr: [{title: "添加",type: "add"},*/
/*                         		{title: "批量删除",type: "plDel",class: "layui-btn-danger"},*/
/*                             	{title: "高级搜索", type: "hSearch"},*/
/*                             	{title: "导入", type: "improt"},*/
/*                             	{title: "导出", type: "export"}]*/
/*                     },*/
/*                     cols: [{checkbox: true, },*/
/*                         {field: "id", width: 80, sort: true, title: "编号", type: "", sear: "id"},*/
/*                         {field: "title", width: 80, title: "标题", type: "", sear: "title"},*/
/*                         {field: "author", width: 80, title: "作者", type: "", sear: "author",},*/
/*                         {field: "ishot", width: 150, title: "是否热门", type: "select", sear: "ishot",enum: {0:"是",1:"否"}},*/
/*                         {field: "create_at", width: 80, title: "创建时间", type: "time", sear: "create_at"},*/
/*                         {field: "content", width: 150, title: "详细介绍", type: "", sear: "content"},*/
/*                         {field: "right", width: 180, title: "操作", toolbar: $('#barDemo'), align: "center", fixed: 'right'}*/
/*                     ],*/
/*                     reader: {*/
/*                         elem: "#tabel_user",*/
/*                         url: "/admin/im/Api_express/grid",*/
/*                         method: "post",*/
/*                         id: 'tabel_user',*/
/*                         where: {*/
/*                             filter: ""*/
/*                         },*/
/*                     },*/
/*                     autoCol: true, //自定义列表,*/
/*                     tool: {*/
/*                         id: "id", //该行id字段名*/
/*                         //是否执行跳转页面操作    true 不跳转  false 跳转  默认为false*/
/*                         Event: [{type: "edit",url: '{{base_url}}admin/auser/editExpress?id='},*/
/*                             {type: "detail", url: '/admin/auser/infoExpress/?id='},*/
/*                             {type: "del", url: '/admin/im/Api_express/delete'}*/
/*                         ]*/
/*                     },*/
/*                     topBtnActive: {*/
/*                         Event: [{type: "add",url: '{{base_url}}admin/auser/addExpress'},*/
/*                         		{type: "plDel",url: '{{base_url}}admin/im/Api_express/delete'},*/
/*                             	{type: "improt", url: "/upload"},*/
/*                             	{type: "export", url: "/upload"}*/
/*                         ]*/
/*                     }*/
/*                 });*/
/*             });*/
/* */
/*         }*/
/*     });*/
/* </script>*/
/* </body>*/
/* */
/* </html>*/
/* */
/* */
/* */
/* */
/* */
/* */
