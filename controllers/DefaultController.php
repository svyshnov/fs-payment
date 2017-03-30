<?php

namespace fspayment\controllers;

use yii\web\Controller;
use yii\helpers\ArrayHelper;
use yii\filters\VerbFilter;

/**
 * PaymentController implements the CRUD actions.
 */
class DefaultController extends Controller
{

    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                ],
            ],
        ]);
    }

     /**
     * @return mixed
     */
    public function actionIndex()
    {
        var_dump('Congratulate!');exit;
    }

//    public function actionCreate()
//    {
//        var_dump('Creating');exit;
//    }

//    public function actionUpdate()
//    {
//        var_dump('Updating');exit;
//    }

//    public function actionDelete()
//    {
//        var_dump('Deleting');exit;
//    }
}