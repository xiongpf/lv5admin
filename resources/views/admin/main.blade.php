<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{$site->misname}}-{{$menu_info->name}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/assets/font-awesome/4.5.0/css/font-awesome.min.css"/>

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="/assets/css/bootstrap-duallistbox.min.css"/>
    <link rel="stylesheet" href="/assets/css/bootstrap-multiselect.min.css"/>
    <link rel="stylesheet" href="/assets/css/select2.min.css"/>
    <link rel="stylesheet" href="/assets/bt-select/css/bootstrap-select.min.css"/>
    <!-- text fonts -->
    <link rel="stylesheet" href="/assets/css/fonts.googleapis.com.css"/>
    <!-- ace styles -->
    <link rel="stylesheet" href="/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style"/>

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/assets/css/ace-part2.min.css" class="ace-main-stylesheet"/>
    <![endif]-->
    <link rel="stylesheet" href="/assets/css/ace-skins.min.css"/>
    <link rel="stylesheet" href="/assets/css/ace-rtl.min.css"/>

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/assets/css/ace-ie.min.css"/>
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="/assets/js/ace-extra.min.js"></script>
    <!-- HTML5shiv and Respond.js')}} for IE8 to support HTML5 elements and media queries -->
    <!--[if lte IE 8]>
    <script src="/assets/js/html5shiv.min.js"></script>
    <script src="/assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- basic scripts -->
    <!--[if !IE]> -->
    <script src="/assets/js/jquery-2.1.4.min.js"></script>
    <!-- <![endif]-->
    <!--[if IE]>
    <script src="/assets/js/jquery-1.11.3.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        if ('ontouchstart' in document.documentElement)
            document.write("<script src='/assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <!-- page specific plugin scripts -->

    <script src="/assets/js/jquery.bootstrap-duallistbox.min.js"></script>
    <script src="/assets/js/jquery.raty.min.js"></script>
    <script src="/assets/js/bootstrap-multiselect.min.js"></script>
    <script src="/assets/js/select2.min.js"></script>
    <script src="/assets/js/jquery-typeahead.js"></script>
    <script src="/assets/js/laydate/laydate.js"></script>
    <script src="/assets/js/tree.min.js"></script>
    <script src="/assets/js/dropzone.min.js"></script>
    <script src="/assets/bt-select/js/bootstrap-select.min.js"></script>


    <!-- ace scripts -->
    <script src="/assets/js/ace-elements.min.js"></script>
    <script src="/assets/js/ace.min.js"></script>


    <script src="/assets/fileinput/js/plugins/sortable.js" type="text/javascript"></script>
    <link href="/assets/fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="/assets/fileinput/themes/explorer/theme.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="/assets/fileinput/js/fileinput.js" type="text/javascript"></script>
    <script src="/assets/fileinput/js/locales/zh.js" type="text/javascript"></script>
    <script src="/assets/fileinput/themes/explorer/theme.js" type="text/javascript"></script>
    <style>
        .select-input {
            font-size: 0;
        }

        .select-input .input-group {
            margin-top: 10px;
            margin-left: 10px;
        }
    </style>
</head>
<body class="no-skin">

<div id="navbar" class="navbar navbar-default  ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">



        <div class="navbar-header pull-left" style="width:190px">
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="/" class="navbar-brand">
                <small>
                    <i class="fa  fa-home"></i>
                    {{$site->misname}}
                    {{--[{{m('City')->where('id',session('city_id'))->value('name')}}]--}}
                </small>
            </a>
        </div>
        <!--
        <div style="float:left">
            <ul class="nav ace-nav" >
            <li onclick="show('menu1');">1234</li>
            <li onclick="show('menu2');">1234</li>
            <li onclick="show('menu3');">1234</li>
            <li onclick="show('menu4');">1234</li>

            </ul>
        </div>
        -->
        <div class="navbar-buttons navbar-header pull-right hidden-sm hidden-xs" role="navigation">
            <ul class="nav ace-nav">
                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="/assets/images/avatars/user.jpg" alt="Jason's Photo"/>
                        <span class="user-info">
				    <small>Welcome,</small>
                            {{$login_user->realname}}
				</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

                        <li>
                            <a href="/admin/adminHome/publicInfo">
                                <i class="ace-icon fa fa-user"></i>
                                更新资料
                            </a>
                        </li>

                        <li class="divider"></li>
                        <li>
                            <a href="/admin/adminHome/publicChangePwd">
                                <i class="ace-icon fa fa-cog"></i>
                                更新密码
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="/admin/login/logout">
                                <i class="ace-icon fa fa-power-off"></i>
                                退出系统
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

    </div><!-- /.navbar-container -->
</div>

<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.loadState('main-container')
        } catch (e) {
        }
    </script>

    <div id="sidebar" class="sidebar  responsive   ace-save-state">
        <script type="text/javascript">
            try {
                ace.settings.loadState('sidebar')
            } catch (e) {
            }
        </script>
        <!--
        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <button class="btn btn-success">
                    <i class="ace-icon fa fa-signal"></i>
                </button>

                <button class="btn btn-info">
                    <i class="ace-icon fa fa-pencil"></i>
                </button>

                <button class="btn btn-warning">
                    <i class="ace-icon fa fa-users"></i>
                </button>

                <button class="btn btn-danger">
                    <i class="ace-icon fa fa-cogs"></i>
                </button>
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div>
        -->

        <!-- /.nav-list -->
        <ul class="nav nav-list">

            {!!m('Menu')->myMenuHtml()!!}

        </ul>

        <!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"
               data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>

    <div class="main-content">
        <div class="main-content-inner">


            <!-- /.page-content -->
        @yield("content")
        <!-- /.page-content -->


        </div>

    </div><!-- /.main-content -->


    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div>
<!-- /.main-container -->


<script>
    var u = $(".active").parent('ul');

    var uc = u.attr("class"); //

    if (uc == 'submenu') {
        u.parent().attr("class", "open active");
        if (u.parent().parent().attr('class') == 'submenu') {
            u.parent().parent().parent().attr("class", "open active");
        }
    }
    function show(id) {
        $("#" + id).siblings().attr('class', 'hide');
        $("#" + id).attr('class', 'open');
    }

    //获取分类
    function getCategorys(obj) {
        var parentid = $(obj).val();
        if (parentid) {
            var url = '/admin/category/lists?parentid=' + parentid;
            $.ajax({
                url: url,
                type: "get",
                dataType: "json",
                success: function (msg) {
                    var str = '<option value="" selected="">--请选择二级分类--</option>';
                    for (var k = 0; k < msg.length; k++) {
                        str += '<option value="' + msg[k].id + '">' + msg[k].name + '</option>';
                    }
                    $("select[name='ccate']").html(str);
                }
            });
        }
    }

    $(function () {
        laydate.render({
            elem: '#start_time',
            calendar: true,
            type: 'datetime'
        });
        laydate.render({
            elem: '#end_time',
            calendar: true,
            type: 'datetime'

        });
        laydate.render({
            elem: '#date',
            calendar: true,
            type: 'date'
        });
    })

</script>
</body>
</html>
