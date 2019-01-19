<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 18.01.2019
 * Time: 21:51
 *
 * Example:
 * $result = new ToleranceSale(15, 1150, 1238);
 * print $result->getAmount();
 */

namespace app\components;

use yii\base\Component;

class ToleranceSale extends Component
{
    //Результат в %
    private $Result;

    /*
     * $Tolerance Допустимое отклонение в %
     * $CurrentPrice Текущая цена
     * $PreviousPrice Предыдущая цена
     */
    public function diff($Tolerance, $CurrentPrice, $PreviousPrice = 0)
    {
        $this->Result = (($PreviousPrice - $CurrentPrice) / $CurrentPrice) * 100;
    }

    public function getAmount()
    {
        return round($this->Result);
    }
}