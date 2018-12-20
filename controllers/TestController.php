<?php
/**
 * Created by PhpStorm.
 * User: Aleksandra Va Ladar
 * Date: 14.12.2018
 * Time: 8:27
 */

namespace app\controllers;

use app\models\Test;
use yii\web\Controller;


class TestController extends Controller
{
    /**
     * @return string
     */

    public function actionTest()
    {
        $testModel = new Test();
        $result = $testModel->addTwoDigit(2, 3);

        return $this->render('test', ['result' => $result]);
    }
}