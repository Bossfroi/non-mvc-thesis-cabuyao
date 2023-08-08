<?php
function validateUserType() {
	if ($_SESSION['user_type_id'] == 1) {
		return true;
	} else {
		if ($_SESSION['user_type_id'] == 2) {
			return true;
		}
	}
}