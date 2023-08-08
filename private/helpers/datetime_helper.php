<?php
function dateTimeNow() {
	date_default_timezone_set('Asia/Manila');
	return date('Y-m-d H:i:s');
}