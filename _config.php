<?php

$dir = basename(dirname(__FILE__));
if($dir != "dashboard") {
	user_error('Dashboard: Directory name must be "dashboard" (currently "'.$dir.'")',E_USER_ERROR);
}

LeftAndMain::require_css("dashboard/css/dashboard_icon.css");

if (!class_exists('SS_Object')) {
    class_alias('Object', 'SS_Object');
}
