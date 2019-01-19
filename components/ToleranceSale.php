<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 18.01.2019
 * Time: 21:51
 *
 * Example:
 * $Sale = new ToleranceSale(15, 1246);
 * if ($Sale->diff()) {
 *      echo 'Hello ' . $Sale->getAmount();
 *  } else {
 *      echo 'Fail ' . $Sale->getAmount();
 *  }
 */

namespace app\components;

use yii\base\BaseObject;

class ToleranceSale extends BaseObject
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
        parent::__construct();
    }

    //В случае, если результат будет больше, чем допустимое отклонение, то возвращаем false
    public function diff()
    {
        $this->Result = (($this->PreviousPrice - $this->CurrentPrice) / $this->CurrentPrice) * 100;

        return ($this->Result > $this->Tolerance) ? false : true;
    }

    //Результ вычисления
    public function getAmount()
    {
        return round($this->Result);
    }
}