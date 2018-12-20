<?php
/**
 * Created by PhpStorm.
 * User: Aleksandra Va Ladar
 * Date: 20.12.2018
 * Time: 19:09
 */

namespace app\controllers;

use app\models\Calendar;
use yii\web\Controller;

class CalendarController extends Controller
{
    public function actionShow($monthNumber = null, $yearNumber = null)
    {
        if ($monthNumber === null) {
            $monthNumber = date('m');
        }
        if ($yearNumber === null) {
            $yearNumber = date('Y');
        }

        $calendar = new Calendar();

        return $this->render('calendar', [
            'head' => date(
                'M Y',
                $calendar->getHead($monthNumber, $yearNumber)
            ),
            'calendar' => $calendar->drawCalendar($monthNumber, $yearNumber)
        ]);
    }
}