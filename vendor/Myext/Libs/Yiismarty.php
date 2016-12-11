<?php
/**
* @file Yiismarty.php
* @synopsis  Smarty
* @author Yee, <rlk002@gmail.com>
* @version 1.0
* @date 2016-07-12 13:54:30
*/

namespace yii\libs;

use Yii;
use Smarty;

define("BASEPATH",\Yii::$app->basePath);

class Yiismarty extends Smarty
{
	public function __construct()
	{
		parent::__construct();
		$this->template_dir = BASEPATH . \Yii::$app->params['smarty']["template_dir"];
		$this->compile_dir = BASEPATH  . \Yii::$app->params['smarty']["compile_dir"];
		$this->cache_dir = BASEPATH . \Yii::$app->params['smarty']["cache_dir"];
		$this->left_delimiter = \Yii::$app->params['smarty']["left_delimiter"];
		$this->right_delimiter = \Yii::$app->params['smarty']["right_delimiter"];
		$this->force_compile = True;
		$this->caching = False;
		$this->compile_check = True;
		$this->debugging = \Yii::$app->params['smarty']["debugging"];
		$this->config($this);
	}

	public function config($s)
	{
		$s->assign('date_format', '%Y-%m-%d %H:%M:%S');
		$s->assign('date_format_ymd_hm', '%Y-%m-%d %H:%M');
		$s->assign('date_format_md_hm', '%m-%d %H:%M');
		$s->assign('date_format_yymd_hm', '%y-%m-%d %H:%M');
		$s->assign('date_format_ymd', '%Y-%m-%d');
		$s->assign('date_format_ym', '%Y-%m');
	}
}
