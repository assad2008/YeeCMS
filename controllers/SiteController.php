<?php

namespace app\controllers;

use Yii;
use app\controllers\BaseController;

class SiteController extends BaseController
{
    public function actionIndex()
    {
    	$this->smarty->display("index.html");
    }

}
