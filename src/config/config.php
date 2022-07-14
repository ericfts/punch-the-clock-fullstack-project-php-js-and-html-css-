<?php
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt-BR.utf-8', 'portuguese');

//Constantes Gerais
define('DAILY_TIME', 60 * 60 * 8);

//Pastas
define('MODEL_PATH', realpath(dirname(__FILE__ , 2) . '/models' ));
define('VIEW_PATH', realpath(dirname(__FILE__ , 2) . '/views' ));
define('TEMPLATE_PATH', realpath(dirname(__FILE__ , 2) . '/views/template' ));
define('CONTROLLER_PATH', realpath(dirname(__FILE__ , 2) . '/controllers' ));
define('EXCEPTION_PATH', realpath(dirname(__FILE__ , 2) . '/exceptions' ));

// Arquivos
require_once(realpath(dirname(__FILE__) . '/database.php'));
require_once(realpath(dirname(__FILE__) . '/loader.php'));
require_once(realpath(dirname(__FILE__) . '/session.php'));
require_once(realpath(dirname(__FILE__) . '/date_utils.php'));
require_once(realpath(dirname(__FILE__) . '/utils.php'));
require_once(realpath(MODEL_PATH . '/model.php'));
require_once(realpath(MODEL_PATH . '/user.php'));
require_once(realpath(MODEL_PATH . '/WorkingHours.php'));
require_once(realpath(EXCEPTION_PATH . '/appException.php'));
require_once(realpath(EXCEPTION_PATH . '/ValidationException.php'));
