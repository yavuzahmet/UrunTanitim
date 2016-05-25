<?php

namespace backend\modules\admin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
     public function actionProduct()
    {

	   $provider = new \yii\data\SqlDataProvider([
	   		'sql'=>'select * from product',
	   		'pagination' => ['pageSize'=>10,],
	   	]);
	   $veriler = $provider -> getModels();
	  
	   $provider1 = new \yii\data\SqlDataProvider([
	   		'sql'=>'select * from category',
	   		
	   	]);
	   $veriler1 = $provider1 -> getModels();

    return $this->render('product',['product'=>$veriler,'category'=>$veriler1]);
    }

    public function actionKategori($categoryID)
    {

	   $provider = new \yii\data\SqlDataProvider([
	   		'sql'=>'select * from product where categoryID',
	   		'pagination' => ['pageSize'=>10,],
	   	]);
	   $veriler = $provider -> getModels();
	  
	   
    return $this->render('product',['product'=>$veriler]);
    }

    public function actionAbout()
    {

	   $provider = new \yii\data\SqlDataProvider([
	   		'sql'=>'select * from about',
	   		//'pagination' => ['pageSize'=>10,],
	   	]);
	   $veriler = $provider -> getModels();

    return $this->render('about',['about'=>$veriler]);
    }

}
