<?php

namespace app\modules\v1\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\auth\QueryParamAuth;
use yii\rest\ActiveController;

class CurrencyController extends ActiveController
{
	public $modelClass = 'app\modules\v1\models\Currency';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator']['class'] = QueryParamAuth::className();
        $behaviors['authenticator']['tokenParam'] = 'hash';
        return $behaviors;
    }

	public function actionIndex()
	{
		$requestParams = Yii::$app->getRequest()->getBodyParams();
		if (empty($requestParams)) {
			$requestParams = Yii::$app->getRequest()->getQueryParams();
		}

		/* @var $modelClass \yii\db\BaseActiveRecord */
		$modelClass = $this->modelClass;

		$query = $modelClass::find();
		if (!empty($filter)) {
			$query->andWhere($filter);
		}

		return Yii::createObject([
			'class' => ActiveDataProvider::className(),
			'query' => $query,
			'pagination' => [
				'params' => $requestParams,
			],
			'sort' => [
				'params' => $requestParams,
			],
		]);
	}
}