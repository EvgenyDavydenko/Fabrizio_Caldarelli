<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class NewsController extends Controller
{

    public function actionIndex()
    {
        echo __METHOD__;
    }

    public function dataItems()
    {
        $newsList = [
            [ 'title' => 'First World War', 'date' => '1914-07-28' ],
            [ 'title' => 'Second World War', 'date' => '1939-09-01' ],
            [ 'title' => 'First man on the moon', 'date' => '1969-07-20' ]
        ];
        return $newsList;
    }

    public function actionList()
    {
        $newsList = $this->dataItems();
        return $this->render('list', ['List' => $newsList]);
    }

    public function actionItem($title)
    {
        $newsList = $this->dataItems();
        $item = null;
        foreach($newsList as $n)
        {
            if($title == $n['title']) $item = $n;
        }
        return $this->render('item', ['item' => $item]);
    }

    
}