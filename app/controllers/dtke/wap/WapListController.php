<?php
class WapListController extends BaseController{
	//主页
	public function index(){
			/*//首页特卖精选by联盟精选库产品
			$recommendObj = new tkRecommend('TbkUatmFavoritesItemGetRequest');
			$recommend = $recommendObj->execute(TGWID, '1081074');

			//首页滚动
			$result = $recommendObj->execute(TGWID, '421150');

			//首页折扣优品直播
			$zhegouyoupin = $recommendObj->execute(TGWID, '1081047');


			$this->view = View::make('dtke.index')->with('slide', $result)
			->withTeMai($recommend)
			->withZheKou($zhegouyoupin);*/
			$this->view = View::make('dtke.wap.list')->with('slide', '1231233');
	}
}
