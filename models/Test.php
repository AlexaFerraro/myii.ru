<?php
/**
 * Created by PhpStorm.
 * User: Aleksandra Va Ladar
 * Date: 13.12.2018
 * Time: 22:06
 */

namespace app\models;


use yii\base\Model;

class Test extends Model
{
    public function addTwoDigit($first, $second)
    {
        if (!is_numeric($first) || !is_numeric($second)) {
            throw new \LogicException('Digits only!!!');
        }

        return $first + $second;
    }
}