<?php

/* This detection for normal use */
    // Device Detection
    $isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));
    $isTab = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "tablet"));
    $isWin = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "windows"));
    $isAndroid = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "android"));
    $isIPhone = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "iphone"));
    $isIPad = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "ipad"));
    $isIOS = $isIPhone || $isIPad;

    // USE LIKE THIS
	if ($isMob) {
		if ($isTab) {
			// echo 'Tablet';
		} else {
			if ($isIOS) {
				// echo 'iOS Mobile';
			} elseif ($isAndroid) {
				// echo 'ANDROID';
			} else{
				// echo 'Other Mobile';
			}
		}
	} elseif ($isWin) {
		// echo 'WINDOWS';
	} else {
		// echo 'Others Desktop...';
	}
?>