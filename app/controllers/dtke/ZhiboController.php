<?php
class ZhiboController extends BaseController{
	private $url = [
		'0' => '中秋月饼',
		'1' => '中秋贺卡',
		'2' => '中秋礼品',
		'3' => '中秋灯笼',
		'4' => '月饼包邮',
	];

	//领圈直播
	public function index(){
		//搜索商品
		$url_info = geturl($_SERVER['QUERY_STRING'],URLENCRY);	//接收url所有参数
		$urlKey=$url_info['key'];
		if($urlKey == '0'){
			//特卖精选（阿里妈妈选品库）
			$resultObj = new tkRecommend('TbkUatmFavoritesItemGetRequest');
			$resultList = $resultObj->execute(TGWID, '1081519');
			$urlKey = 0;
		}else{
			$resultObj = new tkSearch('TbkItemGetRequest');
			$resultObj->q($urlKey); 	//查询关键字
			$resultList = $resultObj->execute();
		}

		$this->view = View::make('dtke.zhibo')->with('resultList', $resultList)
		->withGetUrl($this->url)
		->withUrlKey($urlKey);
	}



	//搜索商品
	public function search(){
		//翻页url
		//$url_info = geturl($_SERVER['QUERY_STRING'],URLENCRY);	//接收url所有参数
		//echo $urlKey=$url_info['key'];
		//echo $urlpage = $url_info['page'];
		//搜索商品
		$resultObj = new tkSearch('TbkItemGetRequest');
		$resultObj->q($_POST['key']); 			//查询关键字
		$postSearch = $_POST['postSearch'];		//查询参数传到模板页面
		$urlKey = $_POST['key'];
		$resultList = $resultObj->execute();
		$this->view = View::make('dtke.zhibo')->with('resultList', $resultList)
		->withGetUrl($this->url)
		->withUrlKey($urlKey)
		->withPostSearch($postSearch);  //头部查询

	}

}
