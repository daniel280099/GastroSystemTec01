<?php

define('IS_LOCAL'   , in_array($_SERVER['REMOTE_ADDR']                                                   ,['127.0.0.1','::1']));

date_default_timezone_set('America/Lima');
define('LANG'       ,'es');

// BASE DE PROYECTO RUTA
define('BASE_PATH'  ,IS_LOCAL ? '/GastroSystemTec01/' :'___EN_PRODUCCION__');


//SEGURIDAD EN EL SISTEMA PARA LOS INCIOS DE SECCION
define('AUTH_SEG'   ,'GastroTec');

//PUESTOS Y URL DEL SITE REMOTO Y REAL
define('PORT'       ,'8848');
define('URL_PAST'   , IS_LOCAL ? 'htpp://127.0.0.1:'.PORT.'/GastroSystemTec01/' : '___URL EN PROCESO__');

// rutas de direcctorios y archivos
define('DS'         , DIRECTORY_SEPARATOR);
//RUTA ADSOLUTA 
define('ROOT'       ,getcwd().DS);
//LLAMDA A APP
define('APP'        ,ROOT.'app'.DS);
define('CLASS'      ,APP.'class'.DS);
define('CONFIG'     ,APP.'config'.DS);
define('CONTROLLERS',APP.'controllers'.DS);
define('FUNCTIONS'  ,APP.'functions'.DS);
define('MODELS'     ,APP.'models'.DS);


//LLAMADA A TEMPLATES
define('TEMPLATES'  ,ROOT.'templates'.DS);
define('INCLUDES'   ,TEMPLATES.'includes'.DS);
define('MODULES'    ,TEMPLATES.'modules'.DS);
define('VIEWS'      ,TEMPLATES.'views'.DS);
//LLAMDA A ASSETS
define('ASSETS'     ,URL_PAST.'assets/');
define('CSS'        ,ASSETS.'css/');
define('JS'         ,ASSETS.'js');
define('FAVICON'    ,ASSETS.'favicon/');
define('IMAGES'     ,ASSETS.'images/');
define('PLUGING'    ,ASSETS.'pluging/');


//CREDENCIALES PARA LA BASE DE DATOS 
//SET PARA LA CONEXION DE LOCAL
define('LDB_ENGINE' ,'mysql');
define('LDB_HOST'   ,'localhost');
define('LDB_NAME'   ,'');
define('LDB_USER'   ,'');
define('LDB_PASS'   ,'');
define('LDB_CHARSET','uft8');

//SERVIDOR REAL
define('DB_ENGINE'  ,'mysql');
define('DB_HOST'    ,'localhost');
define('DB_NAME'    ,'');
define('DB_USER'    ,'');
define('DB_PASS'    ,'');
define('DB_CHARSET' ,'uft8');


?>