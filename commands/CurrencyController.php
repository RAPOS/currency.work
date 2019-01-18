<?php
namespace app\commands;

use yii\console\Controller;
use app\modules\v1\models\Currency;

class CurrencyController extends Controller
{
    public $variant;
    public $name;
    public $rate;
    
    public function options($actionID)
    {
        return ['variant', 'name', 'rate'];
    }
    
    public function optionAliases()
    {
        return ['v' => 'variant', 'n' => 'name', 'r' => 'rate'];
    }
    
    public function actionIndex()
    {
        if ($this->variant == 1) {
            $Currency = new Currency();
            $Currency->name = $this->name;
            $Currency->rate = $this->rate;
            if ($Currency->save()) {
                echo "Запись добавлена. \n" . $this->name . " = " . $this->rate . "\n";
            } else {
                print_r($Currency->getErrors());
            }
        } else if ($this->variant == 2) {
            $xml = simplexml_load_file("http://www.cbr.ru/scripts/XML_daily.asp");
            $json = json_decode(json_encode($xml),TRUE);
            foreach ($json['Valute'] as $key => $value) {
                $Currency = new Currency();
                $Currency->name = $value['Name'];
                $Currency->rate = str_replace(',', '.', $value['Value']);
                $Currency->save();
            }
        };
    }
}
