<?php

$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'DisqusTag',
	'descriptionmsg' => 'disqustag-desc',
	'version' => 0.2,
	'author' => array( 'Alexey Beloblotskiy', 'Luis Felipe Schenone' ),
	'url' => 'https://www.mediawiki.org/wiki/Extension:DisqusTag',
);

$wgResourceModules['ext.DisqusTag'] = array(
	'scripts' => 'DisqusTag.js',
	'styles' => 'DisqusTag.css',
	'position' => 'bottom',
	'dependencies' => array( 'jquery.ui.dialog' ),
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'DisqusTag',
);

$wgExtensionMessagesFiles['DisqusTag'] = __DIR__ . '/DisqusTag.i18n.php';
$wgAutoloadClasses['DisqusTag'] = __DIR__ . '/DisqusTag.body.php';

$wgHooks['BeforePageDisplay'][] = 'DisqusTag::addModule';
$wgHooks['ParserFirstCallInit'][] = 'DisqusTag::setParserHook';
$wgHooks['SkinAfterContent'][] = 'DisqusTag::addDisqusElements';