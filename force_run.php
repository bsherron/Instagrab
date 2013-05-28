<?php
	require_once( dirname(__FILE__) . '/../../../wp-load.php' );
	$ig = new instagrab();
	$ig->instagrabGrabAndSave(true);

?>