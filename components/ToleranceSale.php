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
    //Допустимое отклонение в %
    private $Tolerance;
    //Текущая цена
    private $CurrentPrice;
    //Предыдущая цена
    private $PreviousPrice;
    //Результат в %
    private $Result;

    public function __construct($Tolerance, $CurrentPrice, $PreviousPrice = 0)
    {
        $this->Tolerance = $Tolerance;
        $this->CurrentPrice = $CurrentPrice;
        $this->PreviousPrice = $PreviousPrice;

        $this->diff();

        parent::__construct();
    }

    public function diff()
    {
        $sum = (($this->PreviousPrice - $this->CurrentPrice) / $this->CurrentPrice) * 100;
        if ($sum > $this->Tolerance) {
            $this->Result = 0;

            return false;
        } else {
            $this->Result = $sum;

            return true;
        }
    }

    public function getAmount()
    {
        return round($this->Result);
    }
}