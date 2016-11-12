<?php
//推荐商品查询 by选品库ID
class tkRecommend extends tkBase{
    private $extensionId;   //推广位ID
    private $uPinKuId;      //选品库ID
    //推荐商品结果  传推广ID， 选品库ID
    public function execute($extensionId, $uPinKuId){
        $this->extensionId = $extensionId;
        $this->uPinKuId = $uPinKuId;
        $this->recommend();     //商品
        return parent::objectToArray($this->tkBaseObj->execute($this->useIngObj));
    }

    //推荐商品
    private function recommend()
    {
        $this->useIngObj->setAdzoneId($this->extensionId);  //推广位ID
        $this->useIngObj->setFavoritesId($this->uPinKuId); //选品库ID
        $this->useIngObj->setPageSize("100");
        $this->useIngObj->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick,shop_title,zk_final_price_wap,event_start_time,event_end_time,tk_rate,status,type");
    }
}
