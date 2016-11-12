<?php
class tkSearch extends tkBase{
	//淘宝客API结果
    public function execute($pageSize = 100, $page = 1){
        $this->fields();
		$this->page_no($page);
		$this->page_size($pageSize);
        $this->sort();
        return parent::objectToArray($this->tkBaseObj->execute($this->useIngObj));
    }

    //查询的词
    public function q($var){
        $this->useIngObj->setQ($var);
    }

    //排序
    private function sort(){
        /**
         * 排序_des（降序），排序_asc（升序），
         * 销量（total_sales），
         * 淘客佣金比率（tk_rate），
         * 累计推广量（tk_total_sales），
         * 总支出佣金（tk_total_commi）
         */
        $this->useIngObj->setSort("tk_total_commi;tk_rate");
        //$this->useIngObj->setSort("total_sales_des");
    }

    //淘客佣金比率上限，如：1234表示12.34%
    private function start_tk_rate(){
        $this->useIngObj->setStartTkRate(9500);
    }

    //淘客佣金比率下限，如：1234表示12.34%
    private function end_tk_rate(){
        $this->useIngObj->setEndTkRate(1820);
    }

    //链接形式：1：PC，2：无线，默认：１
    private function platform(){
        $this->useIngObj->setPlatform(1);
    }

    //第页大小，默认20，1~100
    private function page_size($pageSize){
		$this->useIngObj->setPageSize($pageSize);
    }

    //第几页，默认：１
    private function page_no($page){
        $this->useIngObj->setPageNo($page);
    }

    //折扣价范围下限，单位：元
    private function start_price(){
        $this->useIngObj->setStartPrice();
    }

    //折扣价范围上限，单位：元
    private function end_price(){
        $this->useIngObj->setEndPrice();
    }

    //是否海外商品，设置为true表示该商品是属于海外商品，设置为false或不设置表示不判断这个属性
    private function is_overseas(){
        $this->useIngObj->setIsOverseas(false);
    }

    //是否商城商品，设置为true表示该商品是属于淘宝商城商品，设置为false或不设置表示不判断这个属性
    private function is_tmall(){
        $this->useIngObj->setIsTmall();
    }

    //所在地
    private function itemloc(){
        $this->useIngObj->setItemloc();
    }

    //类目ID
    private function cat(){
        $this->useIngObj->setCat();
    }

    //需返回的字段列表
    private function fields(){
        /**
         * num_iid          商品ID
         * title            商品标题
         * pict_url         商品主图URL
         * small_images     商品小图列表
         * reserve_price    商品一口价
         * zk_final_price   商品折扣价
         * user_type        卖家类型，0表示集市，1表示商城
         * provcity         宝贝所在地
         * item_url         商品地址
         * nick             卖家昵称
         * seller_id        卖家id
         * volume           30天销量
         */
        $this->useIngObj->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick");
    }

}
