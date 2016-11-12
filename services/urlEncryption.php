<?php
function keyED($txt,$encrypt_key){
    $encrypt_key =    md5($encrypt_key);
    $ctr=0;
    $tmp = "";
    for($i=0;$i<strlen($txt);$i++)
    {
        if ($ctr==strlen($encrypt_key))
        $ctr=0;
        $tmp.= substr($txt,$i,1) ^ substr($encrypt_key,$ctr,1);
        $ctr++;
    }
    return $tmp;
}
function encrypt($txt,$key)   {
    $encrypt_key = md5(mt_rand(0,100));
    $ctr=0;
    $tmp = "";
     for ($i=0;$i<strlen($txt);$i++)
     {
        if ($ctr==strlen($encrypt_key))
            $ctr=0;
        $tmp.=substr($encrypt_key,$ctr,1) . (substr($txt,$i,1) ^ substr($encrypt_key,$ctr,1));
        $ctr++;
     }
     return keyED($tmp,$key);
}

function decrypt($txt,$key){
    $txt = keyED($txt,$key);
    $tmp = "";
    for($i=0;$i<strlen($txt);$i++)
    {
        $md5 = substr($txt,$i,1);
        $i++;
        $tmp.= (substr($txt,$i,1) ^ $md5);
    }
    return $tmp;
}


function encrypt_url($url,$key){
    return rawurlencode(base64_encode(encrypt($url,$key)));
}
function decrypt_url($url,$key){
    return decrypt(base64_decode(rawurldecode($url)),$key);
}

function geturl($str,$key){
    $str = decrypt_url($str,$key);
    $url_array = explode('&',$str);
    if (is_array($url_array))
    {
        foreach ($url_array as $var)
        {
            $var_array = explode("=",$var);
            $vars[$var_array[0]]=$var_array[1];
        }
    }
    return $vars;
}

define('URLENCRY', '921299.com-654-zyj'); //url加密参数

//$key_url_md_5 = '921299.com-654-zyj'; 		//可以更换为其它的加密标记，可以自由发挥

//请求get_mb.php 改为 get.html
//RewriteRule ^get.html$ get_mb.php?&%{QUERY_STRING}   #.htaccess伪静态规则的设置（加入到.htaccess里就行）
