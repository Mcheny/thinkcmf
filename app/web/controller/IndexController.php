<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 老猫 <thinkcmf@126.com>
// +----------------------------------------------------------------------
namespace app\web\controller;
use app\portal\model\PortalPostModel;
use app\portal\service\PostService;
use cmf\controller\HomeBaseController;
class IndexController extends HomeBaseController
{
    public function index()
    {
        $param = $this->request->param();

        $categoryId = $this->request->param('category', 0, 'intval');

        $postService = new PostService();
        $data        = $postService->adminArticleList($param);
        $data->appends($param);
        echo '<pre>';
        return $this->json( '0', '请求成功',$data->items());
        echo '这里是前台接口啦啦啦1';exit;
        return $this->fetch(':index');
    }
}
