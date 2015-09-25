<?php

// comment out the following two lines when deployed to production

defined('YII_DEBUG') or define('YII_DEBUG', false); 
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();

/*

function logA($file)
{
	$f = fopen($file,'a');
	while(true)
	{
		$line = yield;
		fwrite($f, $line);
	}
}

$file = 'sss'
$log = logA($file);

$log->send("aaa");

// function createLog($file) {
    // $f = fopen($file, 'a');
    // while (true) {          # да, опять бесконечный цикл;
        // $line = yield;      # бесконечно "слушаем" метод send() для установки нового значения $line;
        // fwrite($f, $line);
    // }
// }
// $file = 'asd';
// $log = createLog($file);
// $log->send("First");
// $log->send("Second");
// $log->send("Third");