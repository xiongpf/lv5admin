<?php
/**
 * 日志记录
 * @filename  AdminLogController.php
 * @author    Zhenxun Du <5552123@qq.com>
 * @date      2017/8/24 15:49
 */

namespace App\Http\Controllers\Admin;


class AdminLogController extends Controller
{

    public $M;

    public function __construct()
    {
        parent::__construct();
        $this->M = m('AdminLog');
    }

    //列表
    public function lists()
    {

        $where = [];
        if (request('start_time') && request('end_time')) {
            $where[] = ['t1.created_at', '>=', strtotime(request('start_time'))];
            $where[] = ['t1.created_at', '<=', strtotime(request('end_time'))];
        }
        if (request('name')) {
            $where[] = ['t2.name', 'like', '%' . request('name') . '%'];
        }
        if (request('admin_name')) {
            $where[] = ['t3.admin_name', request('admin_name')];
        }
        if (request('ip')) {
            $where[] = ['t1.ip', request('ip')];
        }


        $lists = $this->M->from('admin_log as t1')
            ->select('t2.name as menu_name','t2.c','t2.a','t1.id','t1.querystring','t1.ip','t1.admin_id','t1.created_at','t1.data','t3.name as admin_name','t3.realname')
            ->where($where)
            ->leftJoin('admin_menu as t2','t1.menu_id','=','t2.id')
            ->leftJoin('admin_user as t3','t1.admin_id','=','t3.id')
            ->orderBy('t1.id', 'desc')
            ->paginate(20);
        return $this->view(compact('lists'));
    }

    //详情
    public function info()
    {
        $info = $this->M->getInfo(request('id'));
        //上次信息
        $where=[];
        $where[]=['menu_id',$info->menu_id];
        $where[]=['primary_id',$info->primary_id];
        $where[] = ['id','<',$info->id];
        $last_id = $this->M->where($where)->orderBy('id','desc')->value('id');

        if($last_id){
            $last_info = $this->M->getInfo($last_id);
        }else{
            $last_info=[];
        }

        $info->data = json_decode($info->data,true);
        if($info->data && $last_info->data){
            $last_info->data = @json_decode($last_info->data,true);
            $last_info->data = $this->diffArr($info->data,$last_info->data);
        }

        return $this->view(compact('info','last_info'));

    }
    //对比
    private function diffArr($info,$last_info,$key=''){
        static $arr;
        foreach($info as $k=>$v){
            if(!is_array($v)){
                if($v!=$last_info[$k]){
                    if($key){
                        $arr[$key][$k] ='<font color="red">'.$last_info[$k].'</font>';
                    }else{
                        $arr[$k] ='<font color="red">'.$last_info[$k].'</font>';
                    }
                }else{
                    $arr[$k]=$last_info[$k];
                }
            }else{
                return $this->diffArr($v,$last_info[$k],$k);
            }
        }
        return $arr;
    }


}
