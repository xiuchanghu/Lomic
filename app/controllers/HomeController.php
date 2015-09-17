<?php
/**
 * Created by PhpStorm.
 * User: huxiuchang
 * Date: 15-9-17
 * Time: 下午1:51
 */
class HomeController extends BaseController
{

    public function home()
    {
        RedisCache::set('key','value',5,'s');
        echo RedisCache::get('key');
//        $this->mail = Mail::to(['497850122@qq.com', 'hu.xiuchang@icntv.tv'])
//                                        ->from('huxiuchang <bobolab@163.com>')
//                                        ->title('TEST')
//                                        ->content('<h1>Hello~~</h1>');
//        $this->view = View::make('home')->with('article', Article::first())
//                                                               ->withTitle('LOMIC :-D')
//                                                               ->withOk('OK!');
    }
}