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
    public function _initialize()
    {

    }
    public function index(){
        $arr=require( dirname(__FILE__).'/../lang/zh-us.php');
        print_r($arr);
        if(in_array('产品',$arr)){
            print_r($arr);
        }
    }
//    public static function read($file){
//        str_replace('，',',',$file);
//        $tmp = explode(',',$file);
//        foreach ($tmp as $v){
//            $tmp_file = BASE_PATH.'/language/'.LANG_TYPE.DS.$v.'.php';
//            if (file_exists($tmp_file)){
//                require($tmp_file);
//                if (!empty($lang) && is_array($lang)){
//                    self::$language_content = array_merge(self::$language_content,$lang);
//                }
//                unset($lang);
//            }
//        }
//        return true;
//    }
}