@extends("admin.main")
@section("content")

    <div class="page-content">
        <div class="page-header">
            <h1>
                {{$menu_info->name or ''}}
                <span class="btn btn-sm btn-primary pull-right" onclick="javascript:window.location.href = 'info'">
		        添加
            </h1>
        </div>
        <div class="operate panel panel-default">
            <div class="panel-body ">
                <form name="myform" method="GET" class="form-inline">
                    <div class="form-group select-input">
                        <div class="input-group">
                            <div class="input-group-addon">名称</div>
                            <input class="form-control" name="name" type="text" value="{{request('username')}}"
                                   placeholder="">
                        </div>
                        <div class="input-group">
                            <div class="input-group-addon">状态</div>
                            {{From::select(m('AdminUser')->status_arr,request('status'),'class="form-control" name="status"','--请选择--')}}
                        </div>
                        <div class="input-group">
                            <input type="submit" value="搜索" class="btn btn-danger btn-sm">
                            <span class="btn btn-info btn-sm" onclick="window.location.href = '?'">重置</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <div class="row">
                    <div class="col-xs-12">
                        <table id="simple-table" class="table  table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>登陆名</th>
                                <th>真实姓名</th>
                                <th>级别</th>
                                <th>角色</th>
                                <th>创建时间</th>
                                <th>修改时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($lists as $info)
                                <tr>
                                    <td>{{$info->id}}</td>
                                    <td>{{$info->name}}</td>
                                    <td>{{$info->realname}}</td>
                                    <td>{{m('AdminUser')->level_arr[$info['level']]}}</td>
                                    <td>{{$info->groups}}</td>
                                    <td>{{$info->created_at}}</td>
                                    <td>{{$info->updated_at}}</td>
                                    <td>
                                        <div class="hidden-sm hidden-xs btn-group">
                                            <a href="info?id={{$info->id}}">编辑</a>
                                            <a href="changePwd?id={{$info->id}}">修改密码</a>
                                            <a href="status?id={{$info->id}}"
                                               onclick="return confirm('确认操作吗？');return false;"> {{$info->status==1?'禁用':'恢复'}} </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <div id="page">{{$lists->appends(request()->all())->links()}}</div>
                    </div><!-- /.span -->

                </div><!-- /.row -->
                <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div>
    </div>


@endsection