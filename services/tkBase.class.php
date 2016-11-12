<?php
class tkBase{
	protected $appKey = APPKEY;

	protected $appSecret = APPSECRET;

    protected $tkBaseObj;

    protected $useIngObj;

	public function __construct($useIngObj){
        $this->tkBaseObj = new TopClient;
		$this->tkBaseObj->appkey = $this->appKey;
		$this->tkBaseObj->secretKey = $this->appSecret;
        $this->useIngObj = new $useIngObj;
    }

	//对象转化数组
    protected function objectToArray($object){
        $result = array();
        $object = is_object($object) ? get_object_vars($object) : $object;
        foreach ($object as $key => $val) {
            $val = (is_object($val) || is_array($val)) ? $this->objectToArray($val) : $val;
            $result[$key] = $val;
        }
        return $result;
    }

}
