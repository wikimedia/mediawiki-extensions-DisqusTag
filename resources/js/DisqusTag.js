window.showDisqusDialog = function ( id ) {

	jQuery( '#disqus_dialog' ).dialog( {
		width: 800,
		position: 'top'
	} );

	var identifier = url = location.protocol + '//' + location.hostname + location.pathname + '#!' + id;

	// Reset Disqus to show the thread corresponding to the clicked button
	DISQUS.reset( {
		reload: true,
		config: function () {
			this.page.identifier = identifier;
			this.page.url = url;
		}
	} );
};

jQuery( function () {
	var shortname = mw.config.get( 'egDisqusShortname' );
	if ( !shortname ) {
		return;
	}
	var disqus = document.createElement( 'script' );
	disqus.type = 'text/javascript';
	disqus.async = true;
	disqus.src = '//' + shortname + '.disqus.com/embed.js';
	document.getElementsByTagName( 'body' )[ 0 ].appendChild( disqus );
} );
