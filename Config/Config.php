<?php 
namespace Config;

define("ROOT", dirname(__DIR__) . "/");
//Path to your project's root folder
define("FRONT_ROOT", "/MoviePass/"); 
define("VIEWS_PATH", "Views/");
define("CSS_PATH", FRONT_ROOT.VIEWS_PATH . "css/");
define("JS_PATH", FRONT_ROOT.VIEWS_PATH . "js/");
define("IMG_PATH", FRONT_ROOT.VIEWS_PATH . "img/");
define("DB_HOST", "localhost");
define("DB_NAME", "movie_pass");
define("DB_USER", "root");
define("DB_PASS", "");
define("MOVIEDB_KEY","7aa6621ccfa43667fe6bb6917d72e075");

?>