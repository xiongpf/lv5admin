@extends("admin.main")
@section("content")

    <div class="page-content">


        <div class="page-header">
            <h1>
                {{isset($info->id)?'详情':'添加'}}
                <button class="btn btn-sm btn-primary pull-right" onclick="javascript:window.location.href = 'lists'">
                    返回列表
            </h1>

        </div><!-- /.page-header -->

        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <form class="form-horizontal" role="form" method="POST" action="{{isset($info->id)?'edit':'add'}}">
                    {{csrf_field()}}
                    @if(isset($info->id))
                        <input type="hidden" name="id" value="{{$info->id}}"/>
                    @endif
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right"> 登录名称 </label>
                        <div class="col-sm-9">
                            <input type="text" name="info[name]" value="{{$info->name or ''}}"
                                   {{isset($info->id)?'disabled':''}} class="col-xs-10 col-sm-8">
                        </div>
                    </div>
                    @if(!isset($info->id))
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right"> 密码 </label>
                            <div class="col-sm-9">
                                <input type="password" name="info[password]" value=""
                                       placeholder="{{isset($info->id)?'不修改密码请保持空':''}}" class="col-xs-10 col-sm-8">
                            </div>
                        </div>
                    @endif


                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right"> 真实姓名 </label>
                        <div class="col-sm-9">
                            <input type="text" name="info[realname]" value="{{$info->realname or ''}}"
                                   class="col-xs-10 col-sm-8">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right"> 手机号 </label>
                        <div class="col-sm-9">
                            <input type="text" name="info[mobile]" value="{{$info->mobile or ''}}"
                                   class="col-xs-10 col-sm-8">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right"> 级别 </label>
                        <div class="col-sm-3">
                            {{From::select(m('AdminUser')->level_arr,isset($info->id)?$info->level:'','class="form-control" name="info[level]" class="col-xs-10 col-sm-8"','--请选择--')}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right"> 角色 </label>
                        <div class="col-sm-9">
                            {{From::checkbox(m('AdminGroup')->getIdName(),isset($info->group_ids)?$info->group_ids:'',' name="group_ids[]"')}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right"> 状态 </label>
                        <div class="col-sm-3">
                            {{From::select(m('AdminUser')->status_arr,isset($info->status)?$info->status:'','class="form-control" name="info[status]" class="col-xs-10 col-sm-8"','--请选择--')}}
                        </div>
                    </div>

                    @if (count($errors) > 0)
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="clearfix form-actions">
                        <div class="col-md-offset-3 col-md-9">
                            <button class="btn btn-info" type="submit">
                                <i class="ace-icon fa fa-check bigger-110"></i>
                                提交
                            </button>
                            <button class="btn" type="reset">
                                <i class="ace-icon fa fa-undo bigger-110"></i>
                                Reset
                            </button>
                        </div>
                    </div>


                </form>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
@endsection
