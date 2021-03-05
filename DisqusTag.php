<?php

class DisqusTag {

	/**
	 * @param OutputPage &$out
	 */
	public static function addModule( &$out ) {
		$out->addModules( 'ext.DisqusTag' );
	}

	/**
	 * @param Parser $parser
	 */
	public static function setParserHook( Parser $parser ) {
		$parser->setHook( 'disqus', 'DisqusTag::renderDisqusLink' );
	}

	/**
	 * @param mixed &$data
	 * @param Skin $skin
	 * @return mixed
	 */
	public static function addDisqusElements( &$data, Skin $skin ) {
		global $egDisqusShortname;
		$data .= '<div id="disqus_dialog" title="Discuss"><div id="disqus_thread"></div></div>';
		$data .= '<script>var egDisqusShortname = "' . $egDisqusShortname . '";</script>';
		return true;
	}

	/**
	 * @param string $input
	 * @param array $args
	 * @param Parser $parser
	 * @param PPFrame $frame
	 * @return string[]
	 */
	public static function renderDisqusLink( $input, array $args, Parser $parser, PPFrame $frame ) {
		$id = '';
		if ( array_key_exists( 'id', $args ) ) {
			$id = $args['id'];
		}
		$title = 'Discuss';
		if ( array_key_exists( 'title', $args ) ) {
			$title = $args['title'];
		}
		if ( $input ) {
			$title = $input;
		}
		$link = '<a id="disqus-' . $id . '" href="#" onclick="window.showDisqusDialog(\'' . $id . '\'); return false;">' . $title . '</a>';
		return $link;
	}
}
