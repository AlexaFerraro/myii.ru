<?php
/**
 * Created by PhpStorm.
 * User: vench
 * Date: 04.12.18
 * Time: 21:32
 */

namespace app\controllers;

use app\models\UserEvent;
use yii\web\Controller;

/**
 * Class UserController
 * @package app\controllers
 */
class UserController extends  Controller
{

    /**
     *
     */
    public function actionEvents() {

        $events = [
            new UserEvent([], [
                'name'  => 'B-day',
                'description'   => 'sister\'s birthday',
                'dateTimeStart'   => '2018-12-07',
                'typeEvent'  => 'birthday',
            ]),
            new UserEvent([], [
                'name'  => 'Theater',
                'description'   => 'King of Lir',
                'dateTimeStart'   => '2018-12-21',
                'typeEvent'  => 'meeting',
            ]),
            new UserEvent([], [
                'name'  => 'Aqua zoo',
                'description'   => 'aqua show',
                'dateTimeStart'   => '2018-12-26',
                'typeEvent'  => 'meeting',
            ]),
        ];


        return $this->render('events', [
            'events' => $events,
        ]);
/*

        return $this->renderAjax('events', [
            'events' => $events,
        ]);

        return $this->renderPartial('events', [
            'events' => $events,
        ]);*/
    }
}