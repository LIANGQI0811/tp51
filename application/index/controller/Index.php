<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return [
            'code'=>0,
            'message'=>'success',
            'data'=>[
                'data'=>[
                    ['name'=>'liangqi','age'=>2],
                    ['name'=>'liangqi','age'=>2],
                    ['name'=>'liangqi','age'=>2],
                    ['name'=>'liangqi','age'=>2],
                    ['name'=>'liangqi','age'=>2],
                    ['name'=>'liangqi','age'=>2],
                    ['name'=>'liangqi','age'=>2],
                ]
            ]
        ];
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
