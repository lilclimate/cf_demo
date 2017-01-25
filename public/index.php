<?php 
// 应用目录为当前目录
define('APP_PATH', dirname(dirname(__FILE__)) . '/');
define('LIB_PATH', APP_PATH . 'libraries/');

// 开启调试模式
define('APP_DEBUG', true);

// 设置环境
define('ENVIRONMENT', 'development');

// 网站根URL
define('APP_URL', 'http://cf_demo');

defined('FRAME_PATH') or define('FRAME_PATH', dirname(dirname(__FILE__)) . '/core/');
defined('APP_PATH') or define('APP_PATH', dirname($_SERVER['SCRIPT_FILENAME']).'/');
defined('APP_DEBUG') or define('APP_DEBUG', false);
defined('CONFIG_PATH') or define('CONFIG_PATH', APP_PATH . 'config/');
defined('RUNTIME_PATH') or define('RUNTIME_PATH', APP_PATH . 'runtime/');

require_once LIB_PATH . 'common_helper.php';

// 包含配置文件
switch (ENVIRONMENT) {
	case 'development':
		break;
	case 'testing':
		break;
	case 'production':
		break;
}

require APP_PATH . 'config/' . ENVIRONMENT . '/config.php';

//包含核心框架类
require FRAME_PATH . 'Core.php';

// 实例化核心类
$fast = new Core;
$fast->run();