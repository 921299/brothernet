<?php
//商品详情查询
class tkList extends tkBase{
    //淘宝客API结果
    public function execute($commodityId){
        $this->commodityInfo($commodityId); //商品
        return parent::objectToArray($this->tkBaseObj->execute($this->useIngObj));
    }

    //获取商品详情
    private function commodityInfo($commodityId)
    {
        $this->useIngObj->setPlatform(1);           //链接形式：1：PC，2：无线，默认：１
        $this->useIngObj->setNumIids($commodityId);  //商品Id
        $this->useIngObj->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,volume");
    }

}
