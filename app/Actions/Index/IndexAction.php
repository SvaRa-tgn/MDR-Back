<?php

namespace App\Actions\Index;


class IndexAction
{
    public $action;

    public function execute()
    {

        $head = [
            'title' => 'Мебель в Рязани - My Decor Room',
            'description' => 'Лучшая мебель на любой вкус по низким ценам в Рязани. Интернет-магазин My Decor Room'
        ];

        return view('/app-page/index-page/index-page', ['head' => $head]);
    }

}
