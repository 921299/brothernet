<?php
use NoahBuscher\Macaw\Macaw;

//pc
Macaw::get('', 'dtke/ShopController@index');
Macaw::get('zhibo', 'dtke/ZhiboController@index');
Macaw::post('zhibo/search', 'dtke/ZhiboController@search');
Macaw::post('zhibo/fieldSearch', 'dtke/ZhiboController@fieldSearch');
Macaw::get('bdan', 'dtke/BdanController@index');
Macaw::get('jxuan', 'dtke/JxuanController@index');
Macaw::post('jxuan/search', 'dtke/JxuanController@search');
Macaw::get('list', 'dtke/ListController@index');


//wap
Macaw::get('wap', 'dtke/wap/WapIndexController@index');
Macaw::get('wap/bdan', 'dtke/wap/WapBdanController@index');
Macaw::get('wap/jxuan', 'dtke/wap/WapJxuanController@index');
Macaw::get('wap/keyword', 'dtke/wap/WapKeyWordController@index');
Macaw::get('wap/list', 'dtke/wap/WapListController@index');


//路由error
Macaw::$error_callback = function() {
  throw new Exception("路由无匹配项 404 Not Found");
};

Macaw::dispatch();