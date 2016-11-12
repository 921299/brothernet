<?php
class ListController extends BaseController{
	//list
	public function index(){
		//根据传的的ID获取关联商品
		$slide = new tkRelation('TbkItemRecommendGetRequest');
		$relation = $slide->execute($_GET['spid']); //获取关联商品信息

		$info = new tkList('TbkItemInfoGetRequest');
		$commodityInfo = $info->execute($_GET['spid']); //获取商品详情信息

		$recommendObj = new tkRecommend('TbkUatmFavoritesItemGetRequest');
		$recommend = $recommendObj->execute(TGWID, '1081360');	//推荐也商品

		$this->view = View::make('dtke.list')->with('relation', $relation)
		->withInfo($commodityInfo)
		->withRecommend($recommend);
	}

}
