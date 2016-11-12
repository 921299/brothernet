<?php
class BdanController extends BaseController{
	//榜单
	public function index(){
		//榜单查询
		$url = [
			'0' => '秋装新款',
			'1' => '亲子装',
			'2' => '儿童益智',
			'3' => '男装',
			'4' => '女装'
		];

		//全部榜单是特殊处理  从选品库获取 990103
		$urlKey = '';
		$url_info = geturl($_SERVER['QUERY_STRING'],URLENCRY);	//接收url所有参数
		$urlKey=$url_info['key'];
		if($urlKey == 0){
			$resultObj = new tkRecommend('TbkUatmFavoritesItemGetRequest');
			$resultList = $resultObj->execute(TGWID, '1081345');
		}else{
			$resultObj = new tkSearch('TbkItemGetRequest');
			$resultObj->q($url[$urlKey]); 	//查询关键字
			$resultList = $resultObj->execute();
		}

		$this->view = View::make('dtke.bdan')->with('resultList', $resultList)
		->withGetUrl($url)
		->withUrlKey($urlKey);
	}

}
