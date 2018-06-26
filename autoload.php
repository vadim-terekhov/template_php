<?php 
function myautoload($classname){
	include (__DIR__ . "/classes/" . $classname . ".php");
}
spl_autoload_register("myautoload");
?>