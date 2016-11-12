<?php
//关联商品查询
class tkRelation extends tkBase{
    //淘宝客API结果
    public function execute($commodityId){
        $this->setShop($commodityId);       //关联商品
        return parent::objectToArray($this->tkBaseObj->execute($this->useIngObj));
    }

    //根据商品ID获取关联商品
    private function setShop($commodityId)
    {
        $this->useIngObj->setPlatform(1);      //链接形式：1：PC，2：无线，默认：１
        $this->useIngObj->setNumIid($commodityId);  //商品Id
        $this->useIngObj->setCount("8");             //返回数量，默认20，最大值40
        $this->useIngObj->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,volume");
    }

}
