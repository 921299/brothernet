<?php
class WapKeyWordController extends BaseController{
	//主页
	public function index(){
		$urlKey = '';
		$url_info = geturl($_SERVER['QUERY_STRING'],URLENCRY);	//接收url所有参数
		$urlKey=$url_info['key'];
		$this->view = View::make('dtke.wap.keyword')->with('urlKey', $urlKey);
	}
}
