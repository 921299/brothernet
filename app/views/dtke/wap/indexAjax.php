<?php 
include_once("/services/tkSdk/TopSdk.php");
include_once("/services/tkBase.class.php");
include_once("/config/tkConst.php");
include_once("/services/tkSearch.class.php");

$page = $_POST["page"];  //页数
$r = $_POST["r"];		//调用页面

$resultObj = new tkSearch('TbkItemGetRequest');
$resultObj->q('月饼'); 		//查询关键字
$resultList = $resultObj->execute('6', "$page");
$resultArr = $resultList['results']['n_tbk_item'];

/*
echo '<pre>';
var_dump($resultArr);
exit;
*/

$i = 0;
$datajson = '[{"status":"0","data":[';
foreach($resultArr as $val){
	$datajson .= "{\"$i\":[{";
	foreach($val as $k => $v){
		@$datajson .= '"'.$k.'":'.'"'.$v.'", ';
	}
	$datajson = rtrim($datajson, ', ');	
	$datajson .= "}]}, ";

	$i++;
}
$datajson = rtrim($datajson, ', ');
$datajson .= "]}]";

echo $datajson;

//echo '<br><br><br>';

///echo '[{"status":"0","data":[{"0":[{"classa":"中级","classb":"Java SE","ggg":"JpHP"}]},{"1":[{"classa":"日语","classb":"Java SE"}]}]}]';



















