<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/24
 * Time: 14:52
 */
namespace app\admin\controller;

use cmf\controller\AdminBaseController;

class BranchesController extends AdminBaseController
{
    public static $lang_arr=array();
    public function _initialize()
    {
        if(empty(self::$lang_arr)){
            //self::$lang_arr=$this->read('zh-us');
        }
    }
    public function index(){
        //读取语言包
        $a['0']='活动新闻';
        $a['1']='产品';
       print_r($this->changeLang($a,self::$lang_arr)) ;
    }

}