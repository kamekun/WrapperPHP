<?php

  $start_time = microtime(1);

  // no cache
  header("Expires: Thu, 01 Jan 1970 00:00:00 GMT");
  header("Last-Modified: Thu, 01 Jan 1970 00:00:00 GMT");
  header("Pragma: no-cache");
  header("Cache-Control: no-store, no-cache, must-revalidate");

  require_once "init.php";

  set_error_handler(array($debug = Debug::getInstance(), 'parsePHPError'));


  print "generated in: ".round(microtime(1) - $start_time, 3)."s; query counter: ".Mysql::get_num_queries()."; cache hits: ".Mysql::get_cache_hits()."; cache miss: ".Mysql::get_cache_misses()."; ".$debug->getErrorStr();

?>
