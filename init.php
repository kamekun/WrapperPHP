<?php 
/**
 * @Author:
 * @Package:
 **/

// ERROR SETTING
ini_set('display_errors', 1);
error_reporting(E_ALL);

// GLOBAL
define ('FATAL',E_USER_ERROR);

define ('ERROR',E_USER_WARNING);

define ('WARNING',E_USER_NOTICE);

if (!defined("PATH_SEPARATOR")){
    define("PATH_SEPARATOR", getenv("COMSPEC")? ";" : ":");
}

define('PROJECT_PATH', dirname(__FILE__));

ini_set("include_path", ini_get("include_path").PATH_SEPARATOR.PROJECT_PATH);

?>
