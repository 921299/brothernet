<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e13f0b068860bad98cbb5e6d437df46
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'N' => 
        array (
            'NoahBuscher\\Macaw\\' => 18,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Database\\' => 20,
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
        ),
        'C' => 
        array (
            'Carbon\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'NoahBuscher\\Macaw\\' => 
        array (
            0 => __DIR__ . '/..' . '/noahbuscher/macaw',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/database',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
    );

    public static $classMap = array (
        'AliyunClient' => __DIR__ . '/../..' . '/services/tkSdk/aliyun/AliyunClient.php',
        'AppipGetRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/AppipGetRequest.php',
        'ApplicationVar' => __DIR__ . '/../..' . '/services/tkSdk/top/ApplicationVar.php',
        'Area' => __DIR__ . '/../..' . '/services/tkSdk/top/domain/Area.php',
        'AreasGetRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/AreasGetRequest.php',
        'Article' => __DIR__ . '/../..' . '/app/models/Article.php',
        'Autoloader' => __DIR__ . '/../..' . '/services/tkSdk/Autoloader.php',
        'BaseController' => __DIR__ . '/../..' . '/app/controllers/BaseController.php',
        'BdanController' => __DIR__ . '/../..' . '/app/controllers/dtke/BdanController.php',
        'ClusterTopClient' => __DIR__ . '/../..' . '/services/tkSdk/top/ClusterTopClient.php',
        'HttpdnsGetRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/HttpdnsGetRequest.php',
        'JxuanController' => __DIR__ . '/../..' . '/app/controllers/dtke/JxuanController.php',
        'KfcKeywordSearchRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/KfcKeywordSearchRequest.php',
        'KfcSearchResult' => __DIR__ . '/../..' . '/services/tkSdk/top/domain/KfcSearchResult.php',
        'ListController' => __DIR__ . '/../..' . '/app/controllers/dtke/ListController.php',
        'NTbkItem' => __DIR__ . '/../..' . '/services/tkSdk/top/domain/NTbkItem.php',
        'NTbkShop' => __DIR__ . '/../..' . '/services/tkSdk/top/domain/NTbkShop.php',
        'RequestCheckUtil' => __DIR__ . '/../..' . '/services/tkSdk/top/RequestCheckUtil.php',
        'ResultSet' => __DIR__ . '/../..' . '/services/tkSdk/top/ResultSet.php',
        'SellerCat' => __DIR__ . '/../..' . '/services/tkSdk/top/domain/SellerCat.php',
        'SellercatsListGetRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/SellercatsListGetRequest.php',
        'Shop' => __DIR__ . '/../..' . '/services/tkSdk/top/domain/Shop.php',
        'ShopCat' => __DIR__ . '/../..' . '/services/tkSdk/top/domain/ShopCat.php',
        'ShopController' => __DIR__ . '/../..' . '/app/controllers/dtke/ShopController.php',
        'ShopGetRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/ShopGetRequest.php',
        'ShopScore' => __DIR__ . '/../..' . '/services/tkSdk/top/domain/ShopScore.php',
        'ShopcatsListGetRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/ShopcatsListGetRequest.php',
        'SpiUtils' => __DIR__ . '/../..' . '/services/tkSdk/top/SpiUtils.php',
        'Subtask' => __DIR__ . '/../..' . '/services/tkSdk/top/domain/Subtask.php',
        'Task' => __DIR__ . '/../..' . '/services/tkSdk/top/domain/Task.php',
        'TbkEvent' => __DIR__ . '/../..' . '/services/tkSdk/top/domain/TbkEvent.php',
        'TbkFavorites' => __DIR__ . '/../..' . '/services/tkSdk/top/domain/TbkFavorites.php',
        'TbkItemGetRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/TbkItemGetRequest.php',
        'TbkItemInfoGetRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/TbkItemInfoGetRequest.php',
        'TbkItemRecommendGetRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/TbkItemRecommendGetRequest.php',
        'TbkShopGetRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/TbkShopGetRequest.php',
        'TbkShopRecommendGetRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/TbkShopRecommendGetRequest.php',
        'TbkUatmEventGetRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/TbkUatmEventGetRequest.php',
        'TbkUatmEventItemGetRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/TbkUatmEventItemGetRequest.php',
        'TbkUatmFavoritesGetRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/TbkUatmFavoritesGetRequest.php',
        'TbkUatmFavoritesItemGetRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/TbkUatmFavoritesItemGetRequest.php',
        'TimeGetRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/TimeGetRequest.php',
        'TopAuthTokenCreateRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/TopAuthTokenCreateRequest.php',
        'TopAuthTokenRefreshRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/TopAuthTokenRefreshRequest.php',
        'TopClient' => __DIR__ . '/../..' . '/services/tkSdk/top/TopClient.php',
        'TopIpoutGetRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/TopIpoutGetRequest.php',
        'TopLogger' => __DIR__ . '/../..' . '/services/tkSdk/top/TopLogger.php',
        'TopSdkFeedbackUploadRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/TopSdkFeedbackUploadRequest.php',
        'TopSecretGetRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/TopSecretGetRequest.php',
        'TopSecretRegisterRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/TopSecretRegisterRequest.php',
        'TopatsResultGetRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/TopatsResultGetRequest.php',
        'TopatsTaskDeleteRequest' => __DIR__ . '/../..' . '/services/tkSdk/top/request/TopatsTaskDeleteRequest.php',
        'UatmTbkItem' => __DIR__ . '/../..' . '/services/tkSdk/top/domain/UatmTbkItem.php',
        'View' => __DIR__ . '/../..' . '/services/View.php',
        'WapAjaxDataController' => __DIR__ . '/../..' . '/app/controllers/dtke/wap/WapAjaxDataController.php',
        'WapBdanController' => __DIR__ . '/../..' . '/app/controllers/dtke/wap/WapBdanController.php',
        'WapIndexController' => __DIR__ . '/../..' . '/app/controllers/dtke/wap/WapIndexController.php',
        'WapJxuanController' => __DIR__ . '/../..' . '/app/controllers/dtke/wap/WapJxuanController.php',
        'WapKeyWordController' => __DIR__ . '/../..' . '/app/controllers/dtke/wap/WapKeyWordController.php',
        'WapListController' => __DIR__ . '/../..' . '/app/controllers/dtke/wap/WapListController.php',
        'ZhiboController' => __DIR__ . '/../..' . '/app/controllers/dtke/ZhiboController.php',
        'tkBase' => __DIR__ . '/../..' . '/services/tkBase.class.php',
        'tkList' => __DIR__ . '/../..' . '/services/tkList.class.php',
        'tkRecommend' => __DIR__ . '/../..' . '/services/tkRecommend.class.php',
        'tkRelation' => __DIR__ . '/../..' . '/services/tkRelation.class.php',
        'tkSearch' => __DIR__ . '/../..' . '/services/tkSearch.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e13f0b068860bad98cbb5e6d437df46::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e13f0b068860bad98cbb5e6d437df46::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9e13f0b068860bad98cbb5e6d437df46::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit9e13f0b068860bad98cbb5e6d437df46::$classMap;

        }, null, ClassLoader::class);
    }
}