<?php

namespace app\controllers;

use Yii;
use yii\web\Controller AS Yii2_Controller;
use yii\libs\Yiismarty;

class BaseController extends Yii2_Controller
{
	public $smarty;
	public $input;
	public $output;
	public $session;
	public $cookie;
	public $aseets_url;
	public $site_url;
	public function init()
	{
		parent::init();
		$this->smarty = new Yiismarty();
		$this->aseets_url = Yii::$app->params["site_url"] . "/assets/";
		$this->site_url = Yii::$app->params["site_url"];
		$this->smarty->assign("site_url",$this->site_url);
		$this->smarty->assign("aseets_url",$this->aseets_url);
		$this->_io();
	}

	public function _io()
	{
		$this->input = Yii::$app->request;
		$this->output = Yii::$app->response;
		$this->session = Yii::$app->session;
		$this->cookie = Yii::$app->request->cookies;
	}
}
