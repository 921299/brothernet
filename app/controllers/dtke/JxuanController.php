<?php
class JxuanController extends BaseController{
	//精选
	public function index(){
		//特卖精选（阿里妈妈选品库）
		$resultObj = new tkRecommend('TbkUatmFavoritesItemGetRequest');
		$resultList = $resultObj->execute(TGWID, '1081436');
		$this->view = View::make('dtke.jxuan')->with('resultList', $resultList)
		->withIsSearch('0');
	}

	//查询
	public function search(){
		$resultObj = new tkSearch('TbkItemGetRequest');
		$resultObj->q($_POST['key']); 	//查询关键字
		$resultList = $resultObj->execute();
		$this->view = View::make('dtke.jxuan')->with('resultList', $resultList)
		->withIsSearch('1')->withSearchField($_POST['key']);
	}

}
