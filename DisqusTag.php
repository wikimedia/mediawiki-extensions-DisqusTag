<?php

if ( function_exists( 'DisqusTag' ) ) {
	wfLoadExtension( 'DisqusTag' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['DisqusTag'] = __DIR__ . '/i18n';
	wfWarn(
		'Deprecated PHP entry point used for the DisqusTag extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the DisqusTag extension requires MediaWiki 1.29+' );
}