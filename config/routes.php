<?php
/**
 * Created by PhpStorm.
 * User: huxiuchang
 * Date: 15-9-17
 * Time: 下午1:38
 */

use NoahBuscher\Macaw\Macaw;

Macaw::get('', 'HomeController@home');
Macaw::get('test', function() {
    echo "成功！";
});

Macaw::$error_callback = function() {
    throw new Exception("路由无匹配项 404 Not Found");
};

Macaw::dispatch();